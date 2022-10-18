<?php
function cifrar($mensaje,$llave){
    $inivec = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    $ms_encriptado = openssl_encrypt($mensaje,"AES-256-CBC",$llave,0,$inivec);
    return base64_encode($ms_encriptado."::".$inivec);
}
function desifrar($mensaje,$llave){
    list($datos,$inivec)=explode('::', base64_decode($mensaje),2);
    return openssl_decrypt($datos,'AES-256-CBC',$llave,0,$inivec);
}
?>