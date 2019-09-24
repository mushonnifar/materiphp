<?php

include 'Hewan.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Burung
 *
 * @author Lenovo
 */
class Burung extends Hewan {

    public $namahewan;

    public function Jalan($namahewan) {
        echo $namahewan . " : hewan ini terbang.";
    }

}

$merpati = new Burung();
$merpati->Jalan('Merpati');
