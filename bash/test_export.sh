#!/bin/bash
let "chapterid = $1 % 50";
let "volumeid = $1 % 5";
echo $chapterid;

mysql -h s3336c.mars.grid.sina.com.cn -P 3336 -u vipbook_r -pXXX -D vipbook -e "select a.title,a.content from volume_$volumeid b,chapter_$chapterid a where a.book_id=$1 AND a.book_id=b.book_id and a.volume_id=b.volume_id order by b.sequence,b.volume_id,a.sequence,a.chapter_id" >  $1.txt
