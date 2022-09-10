<?php
echo "hello";
function test($x) {
    static $y = 0;
    echo $y;
    $x++;
}

$strArray = array("hello", "you're", "sun", "of", "the", "bitch");
sort($strArray); //排序
for ($i = 0; $i < count($strArray); $i++) {
    echo $strArray[$i];
}


