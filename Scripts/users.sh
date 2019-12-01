#!/bin/bash

while read line
do
  echo $line | awk -F':' '{print "<strong>Username:</strong> "$1"<br><strong>Home:</strong> "$6"<br><br>"}'
done </etc/passwd
