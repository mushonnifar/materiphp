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
    
    //method
    public function getEx(){
        return $this->nama;
    }
}

//instansiasi
$lanang = new Cowok();

//pemanggilan method
echo $lanang->getEx();