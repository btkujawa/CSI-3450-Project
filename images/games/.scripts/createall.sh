#!/bin/bash
find ../gc/ -type f > ./gclist.txt
find ../ps1/ -type f > ./ps1list.txt
find ../xbox360/ -type f > ./xbox360list.txt
inputgc="./gclist.txt"
inputps1="./ps1list.txt"
inputxbox360="./xbox360list.txt"
gcscript="./createimagegc.sh"
ps1script="./createimageps1.sh"
xbox360script="./createimagexbox360.sh"
regex1="\/(\w*\w)\."
regex2="\w*\w"
cat $inputgc | while IFS= read -r line
do
	name=$(echo "$line" | grep -Po "$regex1" | grep -Po "$regex2")
    $gcscript $line $name
    rm $line

done
cat $inputps1 | while IFS= read -r line
do
	name=$(echo "$line" | grep -Po "$regex1" | grep -Po "$regex2")
    $ps1script $line $name
    rm $line

done
cat $inputxbox360 | while IFS= read -r line
do
	name=$(echo "$line" | grep -Po "$regex1" | grep -Po "$regex2")
    $xbox360script $line $name
    rm $line

done