<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manusia
 *
 * @author Lenovo
 */
class Manusia {

    //put your code here
    public $nama = "sonif";

    public function getNama() {
        return $this->nama;
    }

}

$manusia = new Manusia();
//
echo $manusia->getNama();
