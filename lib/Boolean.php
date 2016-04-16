<?php
require_once('TypeException.php');
require_once('Primitive.php');
/**
 * Created by PhpStorm.
 * User: bensoer
 * Date: 14/04/16
 * Time: 10:13 PM
 */
class Boolean extends Primitive
{

    public function __construct($boolean){
        if(is_bool($boolean)){
            $this->value = $boolean;
        }else{
            throw new TypeException("Boolean - Constructor Passed Parameter Is Not A Boolean");
        }
    }

    public function toString(){
        return strval($this->value);
    }
}