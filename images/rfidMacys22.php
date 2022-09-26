<?php                      //   1      2      3      4      5         6          7
$correctos = array('QTY','STYLE','CUT','COLOR','UPC','SIZE','DESCRIPTION','PRICE',);
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
{
    // Valores por default para presentar en el formato
    $STYLE = asignar(1,'26T6257NWZ');
    $CUT = asignar(2,'17616');
    $COLOR = asignar(3,'1061');
    $UPC = asignar(4,'191170186509');
    $SIZE = asignar(5,'XS');
    $DESCRIPTION = asignar(6,'KIMONO ROMPERWPIPING');
    $PRICE = asignar(7,'49.00');

    // Creacion del formato
    formato(150,325,255,255,255);

    // Colores a usar
    $black = color(0,0,0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $arialNarrow = fuente('arialn.ttf');
    $arialNBold = fuente('arialnb.ttf');
    $logo = fuente('EPC_Logo.ttf');

    // Introducimos los datos

    agujero(75, 25);

    texto('E',112,33,0,0,$logo,$black,23,0,0);

    texto($STYLE,10,75,0,0,$arialBold,$black,9,0,0);

    texto($CUT,10,97,0,0,$arialBold,$black,9,0,0);

    texto($COLOR,0,97,2,10,$arialBold,$black,9,0,0);

    texto($SIZE,0,210,1,0,$arialNBold,$black,12,0,0);

	parrafo($DESCRIPTION, 0, 235, 1, 0, $arialBold, $black, 9, 0, 14, 14);

    texto($PRICE,0,300,1,0,$arialNBold,$black,14,0,1);


    // Creacion del Barcode
     barcode($UPC,18,105,1,60,'UPC');

    barcodeTexto(2,-1,5,0,'arial.ttf');

    require_once('../includes/footer.php');
}
?>