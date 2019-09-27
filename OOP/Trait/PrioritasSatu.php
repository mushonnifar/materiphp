<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ApaKabar {

    // ini akan diturunkan
    public function apaKabar() {
        return "Apa kabar?" . PHP_EOL;
    }

}

trait SelamatPagi {

    public function selamatPagi() {
        return "Selamat pagi?";
    }

    // apaKabar() dari trait
    public function apaKabar() {
        return "Apa kabar pagi ini?" . PHP_EOL;
    }

}

class Pesan extends ApaKabar {

    use SelamatPagi;
}

$pesan = new Pesan();
// yang dipakai adalah apaKabar() dari trait
echo $pesan->apaKabar();
// jika dijalankan akan keluar
// Apa kabar pagi ini?