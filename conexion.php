<?php

    $servidor = "localhost";
    $user = "u454376638_einar";
    $psw = "Einar1234";  
    $bd = "u454376638_einar";
    
    $conn = mysqli_connect($servidor,$user,$psw,$bd);

    if(mysqli_connect_errno()){
        //echo'{"response":"0","message":"Error de conexion"}';
    }else{
        mysqli_set_charset($conn,"utf8");
    }
   
?>