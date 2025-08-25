<?php
$numbers = array(4, 6, 2, 22, 11);

for ($x = 0; $x <= 4; $x++) {
    echo $numbers[$x], "<br>";
}

foreach ($numbers as $num) {
    print $num . "<br>";
}

$a = 5;
echo "<h1> this is  while </h1>";

while ($a <= 4) {
    echo $numbers[$a] . "<br>";
    $a++;
};



// echo "<h1> this is do while </h1>";
// do {
//     echo "hello world" . "<br>";
//     $a++;
// } while ($a<= 4);
