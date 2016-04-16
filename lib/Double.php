<?php
require_once('TypeException.php');
require_once('Numeric.php');
/**
 * Created by PhpStorm.
 * User: bensoer
 * Date: 14/04/16
 * Time: 10:13 PM
 */
class Double extends Numeric
{

    public function __construct($double){
        parent::__construct($double);
        if(is_double($double)){
            $this->value = $double;
        }else{
            throw new TypeException("Double - Constructor Passed Parameter Is Not A Double");
        }
    }
}