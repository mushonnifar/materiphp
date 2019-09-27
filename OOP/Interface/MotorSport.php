<?php

include 'Motor.php';
include 'Kendaraan.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MotorSport
 *
 * @author Lenovo
 */
class MotorSport implements Motor, Kendaraan {

    public function getWarna() {
        return "Berasal dari method getWarna() di class : MotorSport";
    }

    public function getRoda() {
        return "Berasal dari method " . __METHOD__ . " di class : " . __CLASS__;
    }

}
