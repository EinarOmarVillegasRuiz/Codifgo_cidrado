<?php
include("conexion.php");
if($_POST){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $gmail=$_POST["gmail"];
    $pass=$_POST["pass"];
}

$keypublica=openssl_pkey_get_public(file_get_contents('publica.key'));
openssl_public_encrypt($pass,$datos_cifrados,$keypublica);
$dato=base64_encode($datos_cifrados);
if($pass==null){
    echo "Error";
}else{
    $consulta= "INSERT INTO login1(nombre,apellido,edad,correo,contraseña,encryptado) values('$nombre','$apellido','$edad','$gmail','$pass','$dato')";
    $resultado=mysqli_query($conn,$consulta);
    if($resultado){
        $url="https://uthh.online/einar20200725/cifradorsa.php";
        $contenido= file_get_contents($url);
        echo $contenido;

    }else{
        echo "error";
    }
    
}
?>