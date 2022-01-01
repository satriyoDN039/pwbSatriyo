<?php
    // hostname or ip of server
    $servername='localhost';
    // username and password
    $dbusername='root';
    $dbpassword='';
    $link=mysqli_connect("$servername","$dbusername","$dbpassword");
    if (!$link)
    {
        die('Could not connect: ' . mysqli_error());
    }

    mysqli_select_db($link,"lat_dbase",);
    mysqli_query($link,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
    VALUES ('Karina', 'Suwandi', '29')");
    mysqli_query($link,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
    VALUES ('Glenn', 'Gandari', '32')");
    mysqli_close($con);
