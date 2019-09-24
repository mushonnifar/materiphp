<?php

include 'Motor.php';
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
class MotorSport extends Motor {

    public $turbo = false;

    public function setAktifTurbo() {
        $this->turbo = true;
        return "Turbo di Aktifkan...";
    }

}

$motor = new MotorSport();

echo $motor->jalan();
echo "<br>";
echo $motor->setAktifTurbo();
