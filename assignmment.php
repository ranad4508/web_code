<?php
#WAP in php to create a custom exception that accepts two parameter and if the sum of those two parameter is greater than 10, it should throw and exception
$num1 = 5;
$num2 = 9;
$sum;
$sum = $num1+$num2;
class customException extends Exception{
    public function errorMessage(){
        //error message
        $errorMsg = 'Error on line '.$this->getLine().' in'.$this->getFile().':<b>'.$this->getMessage().'</b> is greater than 10';
        
        return $errorMsg; 
    }
}

try{
    //check if
    if($sum>10){
        //throw exception if email is not valid
        throw new customException($sum);
    }
}
catch(customException $e){
    //display custom exception
    echo $e->errorMessage();
}
?>