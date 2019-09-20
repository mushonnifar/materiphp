<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Peserta
 *
 * @author Lenovo
 */
class Peserta {

    private $name = 'Bagus';
    private $address = 'Yogyakarta';

    public function showBio() {
        echo "Nama saya $this->name dan saya berasal dari $this->address";
    }

    // destructor
    public function __destruct() {
        echo '<br> Ini dari destruktor.';
    }

    // constructor
    public function __construct() {
        echo 'Ini dari konstruktor. <br>';
    }

}

// membuat object $bagus
$bagus = new Peserta();

// panggil method dari object $bagus
echo $bagus->showBio();
