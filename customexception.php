<?php
class customException extends Exception{
    public function errorMessage(){
        //error message
        $errorMsg = 'Error on line'.$this->getLine().'in'.$this->getFile()
        .':<b>'.$this->getMessage().'</b> is not a valid E-mail address' ;
        return $errorMsg;
    }
}
$email = "someone@example...com";
try{
    //check if
    if(filter_var($email, FILTER_VALIDATE_EMAIL)==FALSE){
        //throw exception if email is not valid
        throw new customException($email);
    }
}
catch(customException $e){
    //display custom exception
    echo $e->errorMessage();
}


?>