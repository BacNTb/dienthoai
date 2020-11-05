<?php
    session_start();
    if(isset($_GET['id_sp'])) {
        $id_sp = $_GET['id_sp'];
        if($id_sp == 'xoa') {
            unset($_SESSION['giohang']);
            header('location: ../view/home.php');
        }
        else {
            unset($_SESSION['giohang'][$id_sp]);
            header('location: ../view/giohang.php');
        }
    }
?>