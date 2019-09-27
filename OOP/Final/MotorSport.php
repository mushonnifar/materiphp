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

    public function getTahun() {
        return parent::getTahun();
    }

    public function getBahanBakar() {
        return parent::getBahanBakar();
    }

}

$motor = new MotorSport();

echo $motor->getTahun();
