<?php
require_once('Integer.php');
require_once('TypeException.php');
/**
 * Created by PhpStorm.
 * User: bensoer
 * Date: 14/04/16
 * Time: 10:12 PM
 */
class String
{

    public $value;

    public function __construct($string){
        if(is_string($string)){
            $this->value = $string;
        }else{
            throw new TypeException("String - Constructor Passed Parameter Is Not A String");
        }
    }

    public function isEmpty(){
        return empty($this->value);
    }

    public function length(){
        return strlen($this->value);
    }

    public function append($string){
        $this->value += $string;
    }

    public function substring(Integer $start, Integer $end = null){

        if($end == null){
            $length = $this->length();
            return substr($this->value, $start->value, ($length - $start->value));
        }else{
            return substr($this->value, $start->value, ($end->value - $start->value));
        }
    }


}