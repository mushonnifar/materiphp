<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Lenovo
 */
class User {

    const JK = "Perempuan";

    public function getJK() {
        return self::JK;
    }

}

$user = new User();

//memanggil konstanta dari method
//echo $user->getJK() . '<br>';
//memanggil konstanta dengan double colon
//echo $user::JK;
//pemanggilan class
echo User::JK;