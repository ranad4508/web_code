<?php
$a=3;
$b=17;
$c=0;
for($i=$a;$i<$b;$i++){
    if($i%2 == 0){
        $c = $c + $i ;
        
    }
}
echo"Sum of even numbers between $a and $b = $c";
?>