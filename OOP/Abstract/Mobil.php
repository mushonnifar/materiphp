<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mobil
 *
 * @author Lenovo
 */
class Mobil extends Kendaraan {

    public function getInformasi($warna) {
        return "Informasi Mobil, warna : " . $warna;
    }

}
