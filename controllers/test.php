<?php

require_once "../libs/phpqrcode/index.php";

$qr = new CodeQR();
$imagen =  $qr->GenerateCodeQr(5);
$new_imagen = "../libs/phpqrcode/".$imagen;

?>
<img src="<?php echo $new_imagen;?>" alt="hola">