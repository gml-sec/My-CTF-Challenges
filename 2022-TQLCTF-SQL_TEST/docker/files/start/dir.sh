#!/bin/bash
dir=/tmp/secret
while : 1
do
    if [ ! -d "$dir" ]; then
        mkdir $dir && chmod 777 $dir 
    fi
    chmod 744 $dir/*
    sleep 2
done