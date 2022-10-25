<?php
include("conexion.php");
if($_POST){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $gmail=$_POST["gmail"];
    $pass=$_POST["pass"];
};
$arr_msj=str_split($pass);
$cifrado="";
$par="";
$impar="";
for($i=0;$i<count($arr_msj);$i++){
  if($i%2==0)
    $par=$par.$arr_msj[$i];
  else
    $impar=$impar.$arr_msj[$i];
}
$cifrado=$par.$impar;
if($pass==null){
    echo "Error";
}else{
    $consulta= "INSERT INTO propio(nombre,apellido,edad,correo,contraseña,encryptado) values('$nombre','$apellido','$edad','$gmail','$pass','$cifrado')";
    $resultado=mysqli_query($conn,$consulta);
    if($resultado){
        $url="https://uthh.online/einar20200725/cifrapropio.php";
        $contenido= file_get_contents($url);
        echo $contenido;

    }else{
        echo "error";
    }
    
}
?>
