<?php
$correctos = array('STYLE','COLOR','SIZE','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
{

    $STYLE = asignar(1,'N9175-5683');
    $COLOR = asignar(2,'DVHTR');
    $SIZE = asignar(3,'S');
    $UPC = asignar(4,'123456789012');

    formato(200,150,255,255,255);
    setAsSticker(10);

    $Black = color(0,0,0);

    $arialbd = fuente('arialbd.ttf');
    $arialn = fuente('arialn.ttf');
    $arial = fuente('arial.ttf');

    texto($STYLE,10,25,0,0,$arialbd,$Black,10,0,0);

    texto($COLOR,10,45,0,0,$arial,$Black,9,0,0);

    texto($SIZE,10,65,0,0,$arialn,$Black,10,0,0);

    barcode($UPC,25,55,1.2,80,'UPC');
    barcodeTexto(1,0,-5,8,'arial.ttf');

    require_once('../includes/footer.php');

}?>