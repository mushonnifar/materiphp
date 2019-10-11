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
}