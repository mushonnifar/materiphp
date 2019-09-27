<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait Ucapan {

    public function salam() {
        return "Pagi....?";
    }

}

trait Selamat {

    public function salam() {
        return "Assalamu'alaikum?" . PHP_EOL;
    }

}

trait Sapaan {

    public function salam() {
        return "Selamat pagi?";
    }

}

class Pesan {

    // membuat alias menggunakan as
    // krn ingin tetap memakai salam()
    // dari trait Sapaan
    use Ucapan,
        Selamat,
        Sapaan {
        Selamat::salam insteadof Ucapan, Sapaan;
        Sapaan::salam as salamKedua;
    }
}

$pesan = new Pesan();
echo $pesan->salam();
echo $pesan->salamKedua();
