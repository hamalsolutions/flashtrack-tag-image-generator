<?php                      //    1           2         3      4      5      6      7        8      9    10     11      12       13            14          15        16         17      18       19
    $correctos = array('QTY','CATEGORY','DESCRIPTION','DIV','ITEM','SKU','LINE','CLASS','SEASON','UPC','KSN','SIZE','PRICE','COLORBAR','COLORBAR VALUE','RACK','GROUP NAME','COLOR','PIECES','MODIFIER');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $CATEGORY = asignar(1,'Product Category');
        $DESCRIPTION = asignar(2,'Product Description');
        $DIV = asignar(3,'IV');
        $ITEM = asignar(4,'(Item#)');
        $SKU = asignar(5,'SKU');
        $LINE = asignar(6,'XX');
        $CLASS = asignar(7,'XXX');
        $SEASON = asignar(8,'Season Code');
        $UPC = asignar(9,'666666666662');
        $KSN = asignar(10,'XXXXXXXXXX');
        $SIZE = asignar(11,'SIZE');
        $PRICE = asignar(12,'$0.00');
        $COLORBAR = asignar(13,'N');
        $COLORBAR_V = asignar(14,'BLANK');
        $RACK = asignar(15,'Rack');
        $GROUP = asignar(16,'Group Name');
        $COLOR = asignar(17,'Color');
        $PIECES = asignar(18,'Pieces');
        $MODIFIER = asignar(19,'MODIFIER');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $green = color(0,117,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('SearsLogo.ttf');
        
            // Introducimos los datos

        if ($COLORBAR == 'Y') {
            switch ($COLORBAR_V) {
                case '100C':
                    $color = color(246,235,97);
                    cajaRellena(1, 0, 122, 31, $color, $color, 270);
                    break;
                default:
                    $color = color(0,117,0);
                    cajaRellena(1, 0, 122, 31, $color, $color, 270);
            }
        } else {
            if ($COLORBAR_V == 'BLANK') {
                cajaRellena(1, 0, 122, 31, $green, $green, 270);
            }
        }

        imageellipse($img,330,60,15,15,$black);
        
        texto('S4688U-HT-I',5,25,0,0,$arial,$black,5.5,270,0);    
        
        texto($RACK,80,25,0,0,$arial,$black,6,270,0);    
        
        texto('A',75,50,0,0,$logo,$black,10,270,0);
        texto('www.sears.com',65,55,0,0,$arial,$black,5,270,0);
        
        texto($CATEGORY,5,67,0,0,$arial,$black,6,270,0);
        
        texto($DESCRIPTION,5,80,0,0,$arial,$black,6.5,270,0);
        
        texto($GROUP,5,94,0,0,$arialBold,$black,8.5,270,0);
        
        texto($COLOR,5,104,0,0,$arialBold,$black,8.5,270,0);
        
        if ($PIECES<>'Pieces') {
            $PIECES = str_replace(' ','',$PIECES);
            $PIECES = str_replace('PCS','',$PIECES);
            $PIECES = str_replace('PC','',$PIECES);
            if (!empty($PIECES))
                $PIECES .= ($PIECES<>1)?' PCS':' PC';
        }
        texto($PIECES,5,114,0,0,$arialBold,$black,8,270,0);
        
        texto($SEASON,5,125,0,0,$arialBold,$black,8,270,0);
        
        texto('KSN#:',5,142,0,0,$arial,$black,8,270,0);
        texto($KSN,37,142,0,0,$arial,$black,8,270,0);
        
        texto('D',5,160,0,0,$arial,$black,8,270,0);
        $DIV = substr($DIV,0,1) == 'D'?substr($DIV,1):$DIV;
        texto($DIV,15,160,0,0,$arial,$black,8,270,0);
        
        texto('M',5,178,0,0,$arial,$black,8,270,0);
        $ITEM = substr($ITEM,0,1) == 'M'?substr($ITEM,1):$ITEM;
        texto($ITEM,15,178,0,0,$arial,$black,8,270,0);
        
        texto($SKU,5,194,0,0,$arial,$black,8,270,0);
        
        texto('Line',5,210,0,0,$arial,$black,8,270,0);
        texto($LINE,27,210,0,0,$arial,$black,8,270,0);
        
        texto('CLS',5,227,0,0,$arial,$black,8,270,0);
        texto($CLASS,27,227,0,0,$arial,$black,8,270,0);
        
        texto($SIZE,0,263,3,50,$arialBold,$black,9.5,270,0);
        
        texto($MODIFIER,0,285,3,50,$arialBold,$black,10,270,0);
        
        texto('-- - - - - - - - - - - - - --',0,320,1,0,$arial,$black,9,270,0);
        
        texto($PRICE,0,343,1,0,$arialBold,$black,14,270,1);        
        
        
        // Creacion del Barcode
        barcode($UPC,70,265,1,35,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
