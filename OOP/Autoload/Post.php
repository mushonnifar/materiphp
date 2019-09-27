<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author Lenovo
 */
class Post {

    public $title, $body;

    public function __construct() {
        $this->title = "Ini Judul nya";
        $this->body = "Ini Isi nya";
    }

    public function getTitle() {
        return $this->title;
    }

    public function getBody() {
        return $this->body;
    }

}
