<?php
    $tenmaychu="localhost";
    $tentaikhoan="root";
    $pass="";
    $csdl="fashionweb";
    $conn= mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die("Khong ket noi duoc!!");
    mysql_select_db($csdl,$conn);
?>
