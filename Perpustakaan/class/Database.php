<?php

class Database {

    const DB_SERVER = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_NAME = 'perpustakaan';

    private $conn;

    public function __construct() {
        $this->conn = $this->connectDB();
    }

    private function connectDB() {
        $conn = mysqli_connect(self::DB_SERVER, self::DB_USER, self::DB_PASS, self::DB_NAME);

        return $conn;
    }

    public function insert($table, $field) {
        $query = "insert into " . $table . " (";
        $keys = array_keys($field);
        $query .= implode(", ", $keys) . ") values ('";
        $value = array_values($field);
        $query .= implode("', '", $value) . "')";

        $result = $this->conn->query($query);
        if (!$result) {
            throw new Exception("Gagal menyimpan !");
        }
        return $result;
    }

    public function read($table) {
        $query = "select * from " . $table;
        $result = $this->conn->query($query);
        if (!$result) {
            throw new Exception("Gagal membaca data !");
        }
        $data = [];
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    public function find($table, $id) {
        $query = "select * from " . $table . " where id = " . $id;
        $result = $this->conn->query($query);
        if (!$result) {
            throw new Exception("Gagal membaca data !");
        }
        $data = $result->fetch_array(MYSQLI_ASSOC);

        return $data;
    }

    public function update($table, $id, $field) {
        $query = "update " . $table . " set ";
        $n = count($field);
        $i = 1;
        foreach ($field as $key => $value) {
            $query .= $key . " = '" . $value . "'";
            if ($i < $n) {
                $query .= ", ";
            }
            $i++;
        }
        $query .= " where id = '" . $id . "'";

        $result = $this->conn->query($query);
        if (!$result) {
            throw new Exception("Gagal menyimpan !");
        }
        return $result;
    }

    public function delete($table, $id) {
        $query = "delete from " . $table . " where id = " . $id;

        $result = $this->conn->query($query);
        if (!$result) {
            throw new Exception("Gagal menghapus !");
        }
        return $result;
    }

}
