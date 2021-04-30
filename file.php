<?php
$fh = fopen("data.txt", "r");

if(!$fh){
	die("File tidak dapat dibuka");
}
$content = fread($fh, 14);
echo $content;
fclose($fh);
?>