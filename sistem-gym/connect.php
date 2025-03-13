<?php
    //menghubungkan ke database
    $con = mysqli_connect("localhost","root","","sistem-gym");
    if(!$con) {
        die("". mysqli_connect_error());
    } 
?>