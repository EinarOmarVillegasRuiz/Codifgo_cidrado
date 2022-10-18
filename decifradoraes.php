<?php
include("conexion.php");
include("cifrado_asimetrico.php");


if($_POST){
    $pass=$_POST["pass"];
    $llave=$_POST["publica"];
};
$mensaje_desifrado=desifrar($pass,$llave);
echo "el valor de la llave es: ".$llave."<br/><br/>";
echo "mensaje sifrado: ".$pass."<br/><br/>";
echo "mensaje desifrado: ".$mensaje_desifrado."<br/><br/>";


?>
