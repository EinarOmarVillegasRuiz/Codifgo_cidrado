<?php
include("conexion.php");

if($_POST){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $gmail=$_POST["gmail"];
    $pass=$_POST["pass"];
};
$cifrado=md5($pass);
if($pass==null){
    echo "Error";
}else{
    $consulta= "INSERT INTO md5tbl(nombre,apellido,edad,correo,contraseña,cifrado) values('$nombre','$apellido','$edad','$gmail','$pass','$cifrado')";
    $resultado=mysqli_query($conn,$consulta);
    if($resultado){
        $url="https://uthh.online/einar20200725/cifradomd5.php";
        $contenido= file_get_contents($url);
        echo $contenido;

    }else{
        echo "error";
    }
    
}

?>
