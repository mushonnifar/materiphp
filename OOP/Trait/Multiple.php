<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait ApaKabar {

    public function apaKabar() {
        return "Apa kabar?" . PHP_EOL;
    }

}

trait SelamatPagi {

    public function selamatPagi() {
        return "Selamat pagi?";
    }

}

trait KabarSelamat {

    // tersusun dari kedua trait di atas
    use ApaKabar,
        SelamatPagi;
}

class Pesan {

    // menggunakan trait lebih dari satu
    use ApaKabar,
        SelamatPagi;
}

$obj = new Pesan();
echo $obj->apaKabar();
echo $obj->selamatPagi();
