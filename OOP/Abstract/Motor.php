<?php

include 'Kendaraan.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Motor
 *
 * @author Lenovo
 */
class Motor extends Kendaraan {

    public function getInformasi($warna) {
        return "Informasi Motor, warna : " . $warna;
    }

    public function getInformasiKendaraan() {
        
    }

}
