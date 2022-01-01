<?php
    // hostname or ip of server
    $servername='localhost';
    // username and password
    $dbusername='root';
    $dbpassword='';
    $link=mysqli_connect("$servername","$dbusername","$dbpassword");
    $dbname="lat_dbase";
    $cek=mysqli_query($link,"CREATE DATABASE $dbname") 
    or die("Gagal membuat database: $dbname");
    if($cek){
    echo "Database $dbname berhasil dibuat";
    }

