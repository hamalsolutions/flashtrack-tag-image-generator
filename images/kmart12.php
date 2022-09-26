<?php                      //   1      2       3      4         5          6      7       8
    $correctos = array('QTY','UPC','KSN','DEPT','CATEGORY','SUBCAT','SEASON','DEPT NAME','DESCRIPTION','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'88711755655');
        $KSN = asignar(2,'0-05910115-4');
        $DEPT = asignar(3,'49');
        $CATEGORY = asignar(4,'19');
        $SUBCAT = asignar(5,'17');
        $SEASON = asignar(6,'5013');
        $DEPT_NAME = asignar(7,"MENS");
        $DESCRIPTION = asignar(8,'TRIBAL WARRIOR'); 
        $SIZE = asignar(9,'M');
        $PRICE = asignar(10,'$16.99');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        $SEASON = str_replace(' ', '', $SEASON);
        $subSeasonCode = substr($SEASON, 0, 2);
        switch ($subSeasonCode) {
            case '20':
            case '21':
            case '24':
            case '23':
            case '29':  $colorBar = color(255,247,151); break;
            case '30':
            case '38':
            case '39':
            case '60':  $colorBar = color(249,196,206); break;
            case '40':
            case '43':
            case '45':
            case '48':
            case '49':  $colorBar = color(140,210,244); break;
            case '50':
            case '52':
            case '58':
            case '59':  $colorBar = color(211,235,219); break;
            default :
                $colorBar = color(255,255,255);
        }
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KmartLogo.ttf');
        
        // Introducimos los datos
        cajaRellena(305, 1, 45, 124, $colorBar, $colorBar);
        
        imageellipse($img,325,60,15,15,$gray);
        
        texto('K',10,30,0,0,$logo,$black,30,270,0);
        
        texto('K3132U-HT -I',75,40,0,0,$arial,$black,5,270,0);
        
        texto($DEPT_NAME,0,190,1,0,$arialBold,$black,strlen($DEPT_NAME)>15?7:10,270,0);
        
        texto('SIZE',125,22,0,0,$arial,$black,9,0,0);
        texto($SIZE,28,220,0,0,$arial,$black,15,270,0);
        
        texto('KSN:',5,246,0,0,$arial,$black,7.5,270,0);
        texto($KSN,38,246,0,0,$arial,$black,7.5,270,0);
        
        texto('DEPT:',5,258,0,0,$arial,$black,7.5,270,0);
        texto($DEPT,38,258,0,0,$arial,$black,7.5,270,0);
        
        texto('SEAS:',5,270,0,0,$arial,$black,7.5,270,0);
        texto($SEASON,38,270,0,0,$arial,$black,7.5,270,0);
        
        texto('CAT:',63,258,0,0,$arial,$black,7.5,270,0);
        texto($CATEGORY,105,258,0,0,$arial,$black,7.5,270,0);
        
        texto('SUBCAT:',63,270,0,0,$arial,$black,7.5,270,0);
        texto($SUBCAT,105,270,0,0,$arial,$black,7.5,270,0);
        
        texto($DESCRIPTION,0,295,1,0,strlen($DESCRIPTION)>18?$arialNarrow:$arial,$black,strlen($DESCRIPTION)>18?7:7.5,270,0);
        
        texto('-- - - - - - - - - - - - - --',0,310,1,0,$arial,$gray,9,270,0);
        
        texto($PRICE,0,335,1,0,$arial,$black,14,270,1);
        
        // Creacion del Barcode
        barcode($UPC,17,185,1.1,78,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
