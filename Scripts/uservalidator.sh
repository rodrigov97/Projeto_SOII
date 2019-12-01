#!/bin/bash

username=$1

grep -c "^$username:" /etc/passwd

