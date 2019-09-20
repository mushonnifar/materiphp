<?php
include 'Manusia.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setan
 *
 * @author Lenovo
 */
class Cowok extends Manusia {
    //put your code here
    public function getEx(){
        return $this->nama;
    }
}

$setan = new Cowok();

echo $setan->getEx();