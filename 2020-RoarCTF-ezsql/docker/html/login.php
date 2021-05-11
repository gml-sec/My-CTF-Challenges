<?php
error_reporting(0);
function check($value){
    if (preg_match("/select|;|creat|like|insert| |update|sys|drop|union|file|show|rename|handler|alter|sys|if|innodb|prepare|execute|delete|where\./i", $value)){
        die('Hacker!');
        exit();
    }
}
$servername = "localhost";    
$username = "root";
$password = "gmmml123456";  

try {
    $pdo = new PDO("mysql:host=$servername;dbname=ctf", $username, $password);
}
catch(PDOException $e)
{
    die("数据库连接失败");
}

if ((isset($_POST['username'])&&isset($_POST['password']))){
    $user=$_POST['username'];
    $pwd=md5($_POST['password']);
    check($user);
    $query="SELECT password FROM admin WHERE username='".$user."'";
    $result=$pdo->query($query);
    if ($result!=null&&$result->rowCount()!==0){
        $row = $result->fetch();
        if($row['password']===$pwd){
            echo '<script>alert("login success!")</script>';
            echo '<script>alert("No flag!");history.go(-1);</script>';
        }
        else{
            echo '<script>alert("password error!");history.go(-1);</script>';
        }
    }
    else{
        echo '<script>alert("username error!");history.go(-1);</script>';
    }

}    
