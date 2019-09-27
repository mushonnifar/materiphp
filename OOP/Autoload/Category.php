<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author Lenovo
 */
class Category {

    public $name;

    public function __construct() {
        $this->name = "Berita";
    }

    public function getName() {
        return $this->name;
    }

}
