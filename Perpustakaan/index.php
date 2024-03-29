<?php
require 'class/Buku.php';
$buku = new Buku();

$action = '';
if (!empty($_GET["action"])) {
    $action = $_GET["action"];
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Sistem Perpustakaan</title>
        <!-- Bootstrap core CSS -->
        <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/DataTables/datatables.min.css" rel="stylesheet">

        <script type="text/javascript" src="asset/jquery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="asset/DataTables/datatables.min.js"></script>
    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">Sistem Perpustakaan</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="?action=create">Create Buku</a>
                <a class="p-2 text-dark" href="index.php">Buku</a>
                <a class="p-2 text-dark" href="?action=anggota">Anggota</a>
                <a class="p-2 text-dark" href="#">Menu 4</a>
            </nav>
            <a class="btn btn-outline-primary" href="#">Sign up</a>
        </div>

        <div class="container">
            <?php
            switch ($action) {
                case "create":
                    if (isset($_POST['add'])) {
                        $buku->store();
                    }
                    require_once "web/create.php";
                    break;
                case "edit":
                    if (isset($_POST['edit'])) {
                        $buku->update();
                    }
                    $id = $_GET['id'];
                    $data = $buku->find($id);
                    require_once "web/edit.php";
                    break;
                case "delete":
                    $id = $_GET['id'];
                    $data = $buku->delete($id);
                    break;
                case "anggota":
                    require_once "web/anggota_view.php";
                    break;
                default :
                    require_once "web/view.php";
                    break;
            }
            ?>    
        </div>
    </body>
</html>
