<?php
require_once('TypeException.php');
require_once('Primitive.php');
/**
 * Created by PhpStorm.
 * User: bensoer
 * Date: 14/04/16
 * Time: 10:13 PM
 */
class Numeric extends Primitive
{

    public function __construct($numeric){
        if(is_numeric($numeric)){
            $this->value = $numeric;
        }else{
            throw new TypeException("Numeric - Constructor Passed Parameter Is Not A Numeric");
        }
    }

    public function toString(){
        return strval($this->value);
    }
}