<?php               //      1       2      3      4
$correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
{

    $STYLE = asignar(1,'SJU523118');
    $COLOR = asignar(2,'BLK');
    $SIZE = asignar(3,'5');
    $UPC = asignar(4,'048238055041');

    formato(150,325,255,255,255);

    agujero(75,25);

    $black = color(0,0,0);

    $arialbd = fuente('arialbd.ttf');
    $logo = fuente('EPC_Logo.ttf');

    texto('E',0,35,2,10,$logo,$black,24,0,0);

    texto($STYLE,10,80,0,0,$arialbd,$black,10,0,0);
    texto($COLOR,10,110,0,0,$arialbd,$black,10,0,0);
    texto($SIZE,10,140,0,0,$arialbd,$black,12,0,0);
    texto(formatizarTexto('1 23456 12345 6', $UPC),10,170,0,0,$arialbd,$black,10,0,0);

require_once('../includes/footer.php');

}
?>
