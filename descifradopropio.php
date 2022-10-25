<?php
include("conexion.php");
if($_POST){
    $pass=$_POST["pass"];
};
$arr_msj=str_split($pass);
$decifrado=[];
$par=[];
$impar=[];
$j=0;
$k=0;
$msj="";
for($i=0;$i<count($arr_msj);$i++){
  if($i%2==0){
    $par[$j]=$i;
    $j++;
  }
    
  else{
    $impar[$k]=$i;
    $k++;
  }
    
}
for($i=0;$i<count($arr_msj);$i++)
    $decifrado[$i]=0;
for($i=0;$i<count($par);$i++)
    $decifrado[$par[$i]]=$arr_msj[$i];
$j=count($par);
for($i=0;$i<count($impar);$i++){
    $decifrado[$impar[$i]]=$arr_msj[$j];
    $j++;
}
for($i=0;$i<count($decifrado);$i++)
    $msj=$msj.$decifrado[$i];
echo "MENSAJE CIFRADO: ".$pass."<br>";
echo "MENSAJE DECIFRADO: ".$msj;
?>

