<?php

require 'Database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Anggota
 *
 * @author Lenovo
 */
class Anggota {

    private $db;
    private $table = 'anggota';

    public function __construct() {
        $this->db = new Database();
    }

    public function read() {
        try {
            $data = $this->db->read($this->table);
            $result['data'] = [];
            $i = 1;
            foreach ($data as $key => $value) {
                $arr = [
                    'no' => $i,
                    'nama' => $value['name'],
                    'jenis_kelamin' => $value['jenis_kelamin'],
                    'tempat_lahir' => $value['tempat_lahir'],
                    'tanggal_lahir' => $value['tanggal_lahir'],
                    'alamat' => $value['alamat'],
                    'action' => '<button class="btn btn-warning" onclick="edit(' . $value['id'] . ')">Edit</button>&nbsp;'
                    . '<button class="btn btn-danger" onclick="remove(' . $value['id'] . ')">Delete</button>'
                ];
                array_push($result['data'], $arr);
                $i++;
            }
            header('Content-Type: application/json');
            echo json_encode($result);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function store() {
        $data['name'] = $_POST['name'];
        $data['jenis_kelamin'] = $_POST['jenis_kelamin'];
        $data['tempat_lahir'] = $_POST['tempat_lahir'];
        $data['tanggal_lahir'] = $_POST['tanggal_lahir'];
        $data['alamat'] = $_POST['alamat'];

        try {
            $this->db->insert($this->table, $data);
            $response = [
                "status" => "success",
                "status_code" => 1,
                "message" => "Data berhasil disimpan"
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        } catch (Exception $ex) {
            $response = [
                "status" => "fail",
                "status_code" => 0,
                "message" => $ex->getMessage()
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function find($id) {
        try {
            $data = $this->db->find($this->table, $id);
            $response = [
                "status" => "success",
                "status_code" => 1,
                "message" => "Berhasil get data",
                "data" => $data
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        } catch (Exception $ex) {
            $response = [
                "status" => "fail",
                "status_code" => 0,
                "message" => $ex->getMessage()
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function update($id) {
        $data['name'] = $_POST['name'];
        $data['jenis_kelamin'] = $_POST['jenis_kelamin'];
        $data['tempat_lahir'] = $_POST['tempat_lahir'];
        $data['tanggal_lahir'] = $_POST['tanggal_lahir'];
        $data['alamat'] = $_POST['alamat'];

        try {
            $this->db->update($this->table, $id, $data);
            $response = [
                "status" => "success",
                "status_code" => 1,
                "message" => "Data berhasil diperbarui"
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        } catch (Exception $ex) {
            $response = [
                "status" => "fail",
                "status_code" => 0,
                "message" => $ex->getMessage()
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function delete($id) {
        try {
            $this->db->delete($this->table, $id);
            $response = [
                "status" => "success",
                "status_code" => 1,
                "message" => "Data berhasil dihapus"
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        } catch (Exception $ex) {
            $response = [
                "status" => "fail",
                "status_code" => 0,
                "message" => $ex->getMessage()
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
}
