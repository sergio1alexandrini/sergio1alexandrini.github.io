<?php
$var="something";
echo "Hello world";
echo $var;
/****************************************************
* Remember that header() must be called before any actual output is sent,
* either by normal HTML tags, blank lines in a file, or from PHP.
*****************************************************/
header("Location: http://www.tutu.ru/poezda/rasp_d.php?nnst1=2000000&nnst2=2208340&date=28.06.2016");
exit;
?>