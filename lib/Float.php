<?php
require_once('TypeException.php');
require_once('Numeric.php');
/**
 * Created by PhpStorm.
 * User: bensoer
 * Date: 14/04/16
 * Time: 10:13 PM
 */
class Float extends Numeric
{

    public function __construct($float){
        parent::__construct($float);
        if(is_float($float)){
            $this->value = $float;
        }else{
            throw new TypeException("Float - Constructor Passed Parameter Is Not A Float");
        }
    }
}