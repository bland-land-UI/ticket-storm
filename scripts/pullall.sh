#!/bin/bash

cd ~/public_html
git fetch origin
git pull origin master
git reset --hard origin/master

cd ~/public_html/ticketstorm
git fetch origin
git pull origin master
git reset --hard origin/master

cd ~/public_html/showbox
git fetch origin
git pull origin master
git reset --hard origin/master