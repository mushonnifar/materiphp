<?php

include 'Motor.php';
include 'Mobil.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$motor = new Motor();
echo $motor->getInformasi('Biru');
echo "<br>";

$mobil = new Mobil();
echo $mobil->getInformasi('Merah');
