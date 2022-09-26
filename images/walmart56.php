<?php //                   1         2          3       4           5        6       7        8      9      10
$correctos = array('QTY','SIZE','DESCRIPTION','DEPT','SUBCLASS','FINELINE','COLOR','STYLE','SEASON','UPC','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $SIZE = asignar(1, 'S/CH (3-5)');
    //$SIZE = asignar(1,'M (7-9)');
    //$SIZE = asignar(1,'L/G (11-13)');
    //$SIZE = asignar(1,'XL/XG (15-17)');
    $DESCRIPTION = asignar(2, 'LS COLD SHOULDER');
    $DEPT = asignar(3, '34');
    $SUB = asignar(4, '00');
    $FINELINE = asignar(5, '3383');
    $COLOR = asignar(6, 'BEACH BUM BLUE');
    $STYLE = asignar(7, 'NJ24G801');
    $SEASON = asignar(8, '02-14');
    $UPC = asignar(9, '829268014549');
    $PRICE = asignar(10, '4.88');

    // Creacion del formato
    formato(150, 275, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);
    $white = color(255, 255, 255);
    $LogoBlue = color(0, 85, 184);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $arialNBold = fuente('arialnb.ttf');
    $logo = fuente('WalMart_Logo2.ttf');
    agujero(75, 25);

    cajaVacia(10, 64, 130, 32, $LogoBlue);
    texto('SIZE', 16, 76, 0, 0, $arial, $LogoBlue, 6, 0, 0);

    // Introducimos los datos
    texto('W',22,55,0,0,$logo,$LogoBlue,23,0,0);
    texto('Save money. Live better.',0,264,1,0,$arialNBold,$LogoBlue,8,0,0);

    $sizeArray = explode('(', str_replace(' ', '', $SIZE));
    if (count($sizeArray)> 1) {
        texto($sizeArray[0],0,78,3,-24,$arialBold,$black,10.5,0,0);
        texto('('.$sizeArray[1],0,92,3,-24,$arialBold,$black,10.5,0,0);
    } else {
        texto($SIZE,0,85,1,0,$arialBold,$black,12,0,0);
    }

    texto($DESCRIPTION, 0, 108, 1, 0, $arialNBold, $black, 7, 0, 0);
    $DSF = $DEPT . $SUB . $FINELINE;
    texto($DSF, 8, 122, 0, 0, $arial, $black, 7, 0, 0);
    texto($COLOR, 0, 122, 2, 8, $arial, $black, 7, 0, 0);
    texto($SEASON, 8, 134, 0, 0, $arial, $black, 7, 0, 0);
    texto($STYLE, 8, 134, 2, 8, $arial, $black, 7, 0, 0);
    texto('POS', 30, 144, 0, 0, $arial, $black, 6, 0, 0);

    texto('Distributed by Wal-Mart Stores, Inc.', 0, 207, 1, 0, $arial, $black, 4.5, 0, 0);
    texto('Bentonville, AR 72716', 0, 214, 1, 0, $arial, $black, 4.5, 0, 0);
    texto('Walmart.com', 0, 224, 1, 0, $arial, $black, 7, 0, 0);

    //perforacion(150, 300, 255);

    texto($PRICE, 0, 247, 1, 0, $arial, $black, 14, 0, 1);

    // Creacion del Barcode
    barcode($UPC, 11, 134, 1.1, 52, 'UPC');

    barcodeTexto(2, 0, 0, 5, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>