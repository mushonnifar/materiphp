<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait ApaKabar {

    // apaKabar() dari trait
    public function apaKabar() {
        return "Apa kabar?";
    }

}

class Pesan {

    use ApaKabar;

    // apaKabar() dari current class
    public function apaKabar() {
        return "Apa kabarnya sekarang?";
    }

}

$pesan = new Pesan();
// yang dipakai adalah apaKabar() dari class Pesan
// bukan apaKabar() dari trait ApaKabar
echo $pesan->apaKabar();
// coba jalankan maka akan keluar
// Apa kabarnya sekarang?