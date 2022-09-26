<?php //                     1        2       3       4       5        6        7            8         9          10             11
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'PRICE', 'D/S/F', 'SEASON', 'DESCRIPTION','ITEM','REPLENISHMENT' ,'CPSIA CODE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $COLOR = asignar(1, 'LT PINK');
    $SIZE = asignar(2, 'XXS/XXCH (2-3)');
    $STYLE = asignar(3, 'FFKG335DG7874');
    $UPC = asignar(4, '191603931591');
    $PRICE = asignar(5, '$6.97');
    $D_S_F = asignar(6, '33000394');
    $SEASON = asignar(7, '02-20');
    $DESCRIPTION = asignar(8, 'SS TEE');
    $ITEM = asignar(9, '91X');
    $REPLEN = asignar(10, 'Replen-Code');
    $CPSIA = asignar(11, 'WM2402GU-0319');

    // Creacion del formato
    formato(138, 475, 255, 255, 255, 0);

    // Colores a usar
    $black = color(0, 0, 0);
    $white = color(255, 255, 255);

    // Fuentes a usar
    $MyriadProBold = fuente('MyriadPro-Bold.otf');
    $MyriadPro = fuente('MyriadPro-Regular.otf');
    $Logo = fuente('w.ttf');

    // creating the PMS Colors for Box Fill color box
    $pms_Rodamin = color(229,6,149); // This is only used for GIRLS XXS/XXCH (2/3) Size Strips
    $pms_Yellow = color(255,252,0);
    $pms_Green = color(0,168,135);
    $pms_Black = color(0,0,0);
    $pms_151C = color(255,131,0);
    $pms_185C = color(235,0,40);
    $pms_272C = color(116,115,192);
    $pms_285C = color(0,113,206);

    $menSize = $SIZE;
    $SIZE = str_replace(' ', '~', $menSize); //Replacing the Space For "~" to have a reference point to split the size in two

    // Assignamos los colores PMS a cada Talla
    if($SIZE == 'XXS/XXCH~(2-3)') {
        $menFillColor = $pms_Rodamin;
    } elseif($SIZE == 'XS/XCH~(4-5)'){
        $menFillColor = $pms_185C;
    } elseif($SIZE == 'S/CH~(6-6X)'){
        $menFillColor = $pms_151C;
    } elseif($SIZE == 'M~(7-8)'){
        $menFillColor = $pms_Yellow;
    } elseif($SIZE == 'L/G~(10-12)'){
        $menFillColor = $pms_Green;
    } elseif($SIZE == 'XL/XG~(14-16)') {
        $menFillColor = $pms_272C;
    } elseif($SIZE == 'XXL/XXG~(18)') {
        $menFillColor = $pms_285C;
    }

    // texto($SIZE, 0, 320, 1, 0, $MyriadProBold, $black, 19, 0, 0);

    if (strpos($SIZE, '~')) {
        $size1 = substr($SIZE, 0, strpos($SIZE, '~'));
        //$size2 = substr($SIZE, strpos($SIZE, '~')+1, strpos($SIZE, ''));
        $size2 = substr($SIZE, strpos($SIZE, '~')+1); // This will return starting from 1st character after "~" to the end of the string
        //$badChars = array('~', ' ');
        //$size2 = str_replace($badChars, '', $size2);
        $yPos = 85;
    } else {
        $size1 = $SIZE;
        $size2 = ' ';
        $yPos = 85;
    }

    cajaRellena(0, 48, 138, 153, $menFillColor, $menFillColor, 0);
    //cajaRellena(0, 50, 138, 156, $vicsColor, $vicsColor, 0);
    cajaRellena(0, 321, 138, 153, $menFillColor, $menFillColor, 0);

    for ($i = 1; $i <= 2; $i++) {
        $fontColor = ($SIZE == 'M~(7-8)') ? $black : $white; //this sets the font color to black if Size = L 42/44
        texto($size1, 0, $yPos, 1, 0, $MyriadProBold, $fontColor, 12, 0, 0);
        $yPos += 20;
        texto($size2, 0, $yPos, 1, 0, $MyriadProBold, $fontColor, 12, 0, 0);
        $yPos += 50;
    }
    $yPos = 360;
    for ($i = 1; $i <= 2; $i++) {
        texto($size1, 0, $yPos, 1, 0, $MyriadProBold, $fontColor, 12, 0, 0);
        $yPos += 17;
        texto($size2, 0, $yPos, 1, 0, $MyriadProBold, $fontColor, 12, 0, 0);
        $yPos += 50;
    }

    texto($PRICE, 0, 35, 1, 0, $MyriadProBold, $black, 19, 0, 1);
    texto($DESCRIPTION, 0, 215, 1, 0, $MyriadPro, $black, 6, 0, 0);
    texto($D_S_F, 8, 228, 0, 0, $MyriadPro, $black, 6, 0, 0);
    texto($COLOR, 0, 228, 2, 7, $MyriadPro, $black, 6, 0, 0);
    texto($SEASON, 8, 238, 0, 0, $MyriadPro, $black, 6, 0, 0);
    texto($STYLE, 0, 238, 2, 7, $MyriadPro, $black, 6, 0, 0);
    texto($REPLEN, 8, 248, 0, 0, $MyriadPro, $black, 6, 0, 0);
    texto($ITEM, 0, 248, 2, 7, $MyriadPro, $black, 6, 0, 0);
    texto($CPSIA, 0, 305, 1, 0, $MyriadPro, $black, 6, 0, 0);
    texto('4', 0, 318, 1, 0, $Logo, $black, 12, 0, 0);
    // Creacion del Barcode
    barcode($UPC, 12, 253, 1, 35, 'UPC', 0);
    barcodeTexto(2, -1, -4, 7, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>