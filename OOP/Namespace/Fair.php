<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NiceWeather;

include 'Storm.php';
include 'Sunny.php';

/**
 * Description of Fair
 *
 * @author Lenovo
 */
class Fair {

    public function __construct() {
        $storm = new Storm();
        $sunny = new Sunny;
    }

}
