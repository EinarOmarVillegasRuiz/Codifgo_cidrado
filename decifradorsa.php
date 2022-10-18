<?php
include("conexion.php");

if($_POST){
    $pass=$_POST["pass"];
};
$dato=base64_decode($pass);
$keyprivada=openssl_pkey_get_private(file_get_contents('privada.key'));
openssl_private_decrypt($dato,$datos_decifrados,$keyprivada);

echo "mensaje sifrado: ".$pass."<br/><br/>";
echo "mensaje desifrado: ".$datos_decifrados."<br/><br/>";
?>
