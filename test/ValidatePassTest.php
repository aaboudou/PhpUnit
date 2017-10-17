<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidatePassTest
 *
 * @author PC300
 */
class ValidatePassTest Extends PhpUnit_Framework_testCase  {
    //put your code here
    public function testValidLength(){
        $valpass= new ValidatePass();
        $this->assertFalse($valpass->ValidLenght('1234'));
    }
}
