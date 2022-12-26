<?php
//WAP in php to display multiplication table using whilel and do while loop

$i=1;
$n=1;
while ($i <= 10) {
    echo"$n * $i =".$n*$i;
    echo "<br>";
    $i++;
}
?>



<?php
echo"<br>";
$i=1;
$n=8;
do {
    echo"$n * $i =".$n*$i;
    echo "<br>";
    $i++;
} while ($i <= 10);
?>