<?php
function kochb(){
    echo "Hello World this code is of 100 lines <br>";
}


kochb();


$arr=array("html","css","js","php");    // indexed array
// $arr[]= "nodejs";
// array_push($arr, "nodejs", "express js " , "mongoDb");

$arr2=array("a"=>"html", "b"=>"css", "c"=>"js", "d"=>"php");    // associative array
// $arr2["c"]= "nodejs";
$arr2["d"]= "nodejs";
$arr2 += array("e"=>"nodejs", "f"=>"express js", "g"=>"mongoDb");

echo var_dump($arr)."<br>";
echo var_dump($arr2);

?>