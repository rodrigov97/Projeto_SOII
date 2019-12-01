#!/bin/bash

while read line
do
  echo $line | awk -F':' '{print "<strong>Grupo:</strong> "$1"<br><strong>Membros:</strong> "$4"<br><br>"}'
done </etc/group
