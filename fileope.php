<?php
 $file=fopen("file.html","r");
fwrite($file,"shiva");
 $data=fread($file,filesize('file.html'));
 echo $data;

unlink("file.html");