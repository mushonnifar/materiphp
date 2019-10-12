<?php

require 'class/Anggota.php';
$anggota = new Anggota();

$action = '';
if (!empty($_GET["action"])) {
    $action = $_GET["action"];
}

switch ($action) {
    case "view":
        $anggota->read();
        break;
    case "store":
        $anggota->store();
        break;
    case "edit":
        $id = $_GET["id"];
        $anggota->find($id);
        break;
    case "update":
        $id = $_GET["id"];
        $anggota->update($id);
        break;
    case "delete":
        $id = $_GET["id"];
        $anggota->delete($id);
        break;
}