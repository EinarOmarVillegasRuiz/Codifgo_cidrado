<?php
include("conexion.php");
include("cifrado_asimetrico.php");

if($_POST){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $gmail=$_POST["gmail"];
    $pass=$_POST["pass"];
    $llave=$_POST["publica"];
};
$mensaje_cifrado=cifrar($pass,$llave);
$mensaje_desifrado=desifrar($mensaje_cifrado,$llave);
if($pass==null){
    echo "Error";
}else{
    $consulta= "INSERT INTO login2(nombre,apellido,edad,correo,contraseña,llave,encriptado) values('$nombre','$apellido','$edad','$gmail','$pass','$llave','$mensaje_cifrado')";
    $resultado=mysqli_query($conn,$consulta);
    if($resultado){
        $url="https://uthh.online/einar20200725/cifradoaes.php";
        $contenido= file_get_contents($url);
        echo $contenido;

    }else{
        echo "error";
    }
    
}

?>
