<?php              //    0     1     2      3       4         5         6          7       8       9       10         11
    $correctos = array('QTY','UPC','DEPT','SUB','FINELINE','SIZE','DESCRIPTION','PRICE','STYLE','COLOR','FORMAT-ID','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'123456789012');
        $DEPT = asignar(2,'240');
        $SUB = asignar(3,'024');
        $FINELINE = asignar(4,'24');
        $SIZE = asignar(5,'M-38/40');
        $DESCRIPTION = asignar(6,'DESCRIPTION');
        $PRICE = asignar(7,'4.97');
        $STYLE = asignar(8,'PBLJAN-16');
        $COLOR = asignar(9,'YELLOW');
        $FORMAT = asignar(10,'FASHION');
        $SEASON = asignar(11,'00-15');
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $pms285 = color(58,117,196);
        $pms356 = color(0,122,61);
        $pms186 = color(206,17,38);
        $SIZE = str_replace(' ','',$SIZE);
        $SIZE = trim($SIZE);
        //$vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arialNarrowBold = fuente('arialnb.ttf');
        $MyriadProBold = fuente('MyriadPro-Bold.otf');
        $Sign = fuente('Century-Gothic_ExB.TTF');
        
        // Introducimos los datos
        
            $yPos = 85;
            
            for($i=1;$i<=4;$i++){
                texto($SIZE,0,$yPos,1,0,$MyriadProBold,$black,10,90,0);
                $yPos += 55;
            }
        
        $FORMAT = str_replace(' ','',$FORMAT);
        $FORMAT = str_replace("'",'',$FORMAT);
        $yPoint = 22; 
        switch (strtoupper($FORMAT)) {
            case 'FASHION':
                cajaRellena(85,2,13,447,$pms356,$pms356,90);
                for ($i=0;$i<=3;$i++) {
                    textoVertical($FORMAT, 5, $yPoint, $MyriadProBold, $white, 8, 90,9);
                    $yPoint += 115;
                }
                cajaRellena(1,400,85,49,$pms356,$pms356,90);
                break;                              
            case 'MENS':
                cajaRellena(85,2,13,447,$pms285,$pms285,90);
                for ($i=0;$i<=5;$i++) {
                    textoVertical($FORMAT, 5, $yPoint, $MyriadProBold, $white, 8, 90,10);
                    $yPoint += 75;
                }
                cajaRellena(1,400,85,49,$pms285,$pms285,90);
                break;                                                   
            case 'HUMOR':                                                   
            case 'ACTIVE':
                cajaRellena(85,2,13,447,$pms186,$pms186,90);
                for ($i=0;$i<=4;$i++) {
                    textoVertical($FORMAT, 5, $yPoint, $MyriadProBold, $white, 8, 90,9);
                    $yPoint += 90;
                }
                cajaRellena(1,400,85,49,$pms186,$pms186,90);
                break;
        }
        texto('$',20,32,0,0,$Sign,$white,12,90,0);
        texto($PRICE,33,40,0,0,$Sign,$white,20,90,0);
        texto($DESCRIPTION,0,290,1,0,$arialNarrowBold,$black,7,90,0);
        texto($DEPT.$SUB.$FINELINE,318,15,0,0,$arialNarrowBold,$black,7,0,0);
        texto($SEASON,318,27,0,0,$arialNarrowBold,$black,7,0,0);
        texto($COLOR,0,15,2,22,$arialNarrowBold,$black,7,0,0);
        texto($STYLE,0,27,2,22,$arialNarrowBold,$black,7,0,0);
        
        // Creacion del Barcode
        barcode($UPC,60,320,1,35,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>