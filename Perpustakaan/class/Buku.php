<?php

require 'Database.php';

class Buku {

    private $db;
    private $table = 'buku';

    public function __construct() {
        $this->db = new Database();
    }

    public function store() {
        $data['name'] = $_POST['name'];
        $data['penerbit'] = $_POST['penerbit'];
        $data['pengarang'] = $_POST['pengarang'];

        try {
            $this->db->insert($this->table, $data);
            header("Location: index.php");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function read() {
        try {
            return $this->db->read($this->table);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function find($id) {
        try {
            return $this->db->find($this->table, $id);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function update() {
        $id = $_POST['id'];
        $data['name'] = $_POST['name'];
        $data['penerbit'] = $_POST['penerbit'];
        $data['pengarang'] = $_POST['pengarang'];

        try {
            $this->db->update($this->table, $id, $data);
            header("Location: index.php");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function delete($id) {
        try {
            $this->db->delete($this->table, $id);
            header("Location: index.php");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

}
