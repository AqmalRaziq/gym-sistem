<?php
    include("connect.php");
    if(isset($_GET['idnum'])) {
        $id = $_GET['idnum'];
    } else {
        $id = '';
    }
    $delete = mysqli_query($con,'DELETE FROM bmi_data WHERE idnum ="'.$id.'"');
    if($delete) {
        header('location:index.php');
    } else {
        echo'<script>alert("Gagal Padam!");</script>';
    }
?>