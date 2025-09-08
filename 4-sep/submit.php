
<?php   

$name = $_REQUEST['name'] ;

echo "Hello, " . htmlspecialchars($name) . "!";

$hello = $_SERVER["HTTP_HOST"];

echo $hello;
?>