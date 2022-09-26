<?php                //     1       2      3      4
$correctos = array('QTY','LOGO','STYLE','COLOR','SIZE','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
{

    $LOGO = asignar(1,'HAUTELOOK');
    $STYLE = asignar(2,'15095');
    $COLOR = asignar(3,'BLACK');
    $SIZE = asignar(4,'SMALL');
    $UPC = asignar(5,'001234567895');

    formato(200,200,255,255,255);
    setAsSticker(10);
    
    $Black = color(0,0,0);

    $arialbd = fuente('arialbd.ttf');

    texto($LOGO,0,25,1,0,$arialbd,$Black,12,0,0);

    texto($STYLE,15,45,0,0,$arialbd,$Black,9,0,0);
    texto($COLOR,15,65,0,0,$arialbd,$Black,9,0,0);
    texto($SIZE,15,85,0,0,$arialbd,$Black,9,0,0);

    // Creacion del Barcode
    barcode($UPC,20,75,1.3,100,'UPC');

    barcodeTexto(3,-1,-2,6,'arial.ttf');

    require_once('../includes/footer.php');

}?>
