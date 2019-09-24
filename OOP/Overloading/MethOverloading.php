<?php

class MethOverloading {

    public function __call($name, $arguments) {
        // Note: value dari $name adalah case sensitive.  
        echo "Memanggil method '$name' "
        . implode(', ', $arguments) . "<br/>";
    }

    public static function __callStatic($name, $arguments) {
        // Note: value dari $name adalah case sensitive.  
        echo "Memanggil method '$name' "
        . implode(', ', $arguments) . "<br/>";
    }

}

$obj = new MethOverloading();
$obj->Jalankan('->pada konteks Object');
MethOverloading::Jalankan('->pada konteks Static');
