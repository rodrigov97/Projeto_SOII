#!/bin/bash

group=$1

grep -c "^$group:" /etc/group

