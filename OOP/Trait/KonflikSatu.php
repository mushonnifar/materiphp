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
        return "Assalamu'alaikum?";
    }

}

trait Sapaan {

    public function salam() {
        return "Selamat pagi?";
    }

}

class Pesan {

    // mengeliminasi method salam()
    // dari trait Ucapan dan Sapaan
    // mengguanakan insteadof
    use Ucapan,
        Selamat,
        Sapaan {
        Selamat::salam insteadof Ucapan, Sapaan;
    }
}

$pesan = new Pesan();
echo $pesan->salam();
