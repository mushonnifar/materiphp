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

    //property
    protected $nama = "sonif";

    //method
    public function getNama() {
        return $this->nama;
    }

}

//instansiasi
$manusia = new Manusia();

//pemanggilan method object manusia
//echo $manusia->getNama();
