<?php
    // hostname or ip of server
    $servername='localhost';
    // username and password
    $dbusername='root';
    $dbpassword='';
    $link=mysqli_connect("$servername","$dbusername","$dbpassword");
    $db = mysqli_select_db($link, "lat_dbase"); // mengaktifkan database
    //membuat tabel
    $tabel= 'tbl_mhs';
    $sql = mysqli_query($link, "CREATE TABLE $tabel(
        mhsID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(mhsID),
        FirstName varchar(15),
        LastName varchar(15),
        Age int
        )");
    $createtable = mysqli_query($link,$sql);
    // input data
    $input=mysqli_query($link,"INSERT into $tabel(FirstName,LastName,Age)
    values('Anjar','Prabowo',25)");

    if($input){
        echo "Tabel $tabel berhasil dibuat";
    }

