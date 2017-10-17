<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidatePass
 *
 * @author PC300
 */
class ValidatePass {
    const  MINLGT =6;
    const MAXLGT = 20;
    
    public function ValidLenght($pass){
        $passlenght = strlen($pass);
        if($passlenght >= self::MINLGT && $passlenght<= self::MAXLGT){
            return true;
        }
        else{
            return false;
        }
    }
}
