<?php                //     1           2           3        4       5      6
$correctos = array('QTY','GENDER','DESCRIPTION','MATERIAL','SIZE','COLOR','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
{

    $GENDER = asignar(1,'Men');
    $DESCRIPTION = asignar(2,'ARIAT BARSTRIPE SERAPE SS T-SHIRT');
    //$DESCRIPTION = asignar(2,'ARIAT BARSTRIPE SERAPE SS T-SHIRTHHHHHHHHHHHHHXXXXX');
    $MATERIAL = asignar(3,'10036565');
    $SIZE = asignar(4, 'Small');
    $COLOR = asignar(5,'CHARCOAL HEATHER');
    $UPC = asignar(6, '810071973475');

    formato(300,150,255,255,255);

    $black = color(0,0,0);
    //$gray = transparente();
    $arialB = fuente('arialbd.ttf');
    $arialnb = fuente('arialnb.ttf');
    $arial70b = fuente('Arial_70_Bold.ttf');

    $GenDescript = $GENDER.'  '.$DESCRIPTION; // concatenate GENDER and DESCRIPTION as one field
    if (strlen($GenDescript) <= 50) {
        texto($GenDescript,10,20,0,0,$arialnb,$black,8,0,0);
    } else {
        texto($GenDescript,10,20,0,0,$arial70b,$black,8.5,0,0);
    }

    texto($MATERIAL,44,60,0,0,$arialnb,$black,10.5,0,0);

    $SizeColor = $SIZE.' '.$COLOR;  // concatenate SIZE and COLOR as one field
    if (strlen($SizeColor) <= 26) {
        texto($SizeColor,10,88,0,0,$arialnb,$black,8,0,0);
    } else {
        texto($SizeColor,10,88,0,0,$arial70b,$black,8,0,0);
    }

    // Creacion del Barcode
    barcode($UPC,124,28,1.2,100,'UPC');
    barcodeTexto(2,0,-1,6,'arialbd.ttf');

require_once('../includes/footer.php');

}?>