<?php                //    1       2      3      4       5
$correctos = array('QTY','DESC','COLOR','UPC','STYLE','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
{

    $DESC = asignar(1,'FISH HOOK LTD');
    $COLOR = asignar(2,'ZZ36 BLUE HELIX / BLUE GLASS');
    $UPC = asignar(3,'190015006149');
    $STYLE = asignar(4,'MSG13500');
    $PRICE = asignar(5,'269.00');

    formato(375,75,255,255,255);

    $black = color(0,0,0);
    $gray = transparente();

    $Barbell = fuente('Barbell_MiddleShape-b.ttf');
    $arialnb = fuente('arialnb.ttf');

    texto('a',0,12,0,0,$Barbell,$gray,10,0,0);
    texto('b',0,75,0,0,$Barbell,$gray,10,0,0);
    texto('c',363,12,0,0,$Barbell,$gray,10,0,0);
    texto('d',363,75,0,0,$Barbell,$gray,10,0,0);

    texto('C',0,75,1,0,$Barbell,$gray,56,0,0);
    texto('B',0,72,1,0,$Barbell,$gray,56,0,0);

    texto($DESC,34,20,0,0,$arialnb,$black,8,0,0);
    texto($COLOR,7,34,0,0,$arialnb,$black,6.5,0,0);
    texto($STYLE,40,50,0,0,$arialnb,$black,8,0,0);
    texto($PRICE,47,65,0,0,$arialnb,$black,8,0,1);

    cajaRellena(150,5,10,10,$gray,$gray);

    // Creacion del Barcode
    barcode($UPC,255,10,1,50,'UPC');

    barcodeTexto(2,0,-3,6,'arial.ttf');

require_once('../includes/footer.php');

}?>