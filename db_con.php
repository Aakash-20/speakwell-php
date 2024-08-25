<?php 

    $sname =  "srv1496.hstgr.io";
    $uname = "u359928671_akash";
    $password = "H9|PmHj1z";

    $db_name = "u359928671_speakwellnew";

    $con = mysqli_connect($sname,$uname,$password,$db_name);

    if (!$con) {
        echo"connection failed";
    }  
