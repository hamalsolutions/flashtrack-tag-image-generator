<?php                     //    1      2       3      4      5      6        7          8         9
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','FINELINE','SEASON','DEPT','SUB','GENDER','DESCRIPTION'); 
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'S/C-6/7');
        $STYLE = asignar(3,'GTWM70048');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'4.88');
        $FINELINE = asignar(6,'7029');
        $SEASON = asignar(7,'01-06');
        $DEPT = asignar(8,'55');
        $SUB = asignar(9,'009');
        $GENGER = asignar(10,'Boys');
        $DESCRIPTION = asignar(11,'Ninja list');
        
            // Creacion del formato
        formato(132,700,245,245,245);
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(245,245,245);
        $darkGray = color(167,166,166);
        $white = color(255,255,255);
        $red = color(255,0,0);
        $blue = color(46,49,146);
        $transparent = transparente();
        $vicsColor = colorVic($SIZE);
        //$transparent = color(255,255,255);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('gildan_logo.ttf');
        
        // Introducimos los datos
        
        cajaRellena(2,2,127,550,$transparent,$transparent);
        
        cajaRellena(2,68,127,62,$blue,$blue);
        
        texto('H',0,109,1,0,$logo,$darkGray,50,0,0);
        texto('G',0,109,1,0,$logo,$white,50,0,0);
        
        texto($PRICE,0,50,1,0,$arialNarrowBold,$black,30,0,1);
        
        $SIZE = str_replace('  ','',$SIZE);
        $size3 = '';
        
        if (strpos($SIZE,'-')) {
            $size1 = substr($SIZE,0,strpos($SIZE,'-'));
            $size2 = substr($SIZE,strpos($SIZE,'-')+1,(strlen($SIZE) - (strpos($SIZE,'-')+1)));
            if (strpos($SIZE,'/')) {
                $size3 = $size2;
                $size2 = substr($size1,strpos($size1,'/')+1,(strlen($size1) - (strpos($size1,'/')+1)));
                $size1 = substr($SIZE,0,strpos($SIZE,'/'));
            }
        } else {
            if (strpos($SIZE,' ')) {
                $size1 = substr($SIZE,0,strpos($SIZE,' '));
                $size2 = substr($SIZE,strpos($SIZE,' ')+1,(strlen($SIZE) - (strpos($SIZE,' ')+1)));
                if (strpos($size2,' ')) {
                    $leftover = $size2;
                    $size2 = substr($size2,0,strpos($size2,' '));
                    $size3 = substr($leftover,strpos($leftover,' ')+1,(strlen($leftover) - strpos($leftover,' ')+1));
                }
            }
        }
        
        
        /*
        if (strpos($SIZE,'(')){
            $size1 = substr($SIZE,0,strpos($SIZE,'('));
            $size2 = substr($SIZE,strpos($SIZE,'('),strpos($SIZE,')'));
        } else {
            $size1 = $SIZE;
            $size2 = ' ';
        }*/
        
        $yPos = 155;
        if ($size1 == 'M')
            $sizeColor = $black;
        else
            $sizeColor = $white;
        for($i=1;$i<=5;$i++){
            //cajaRellena(15,$yPos,100,50,$gray,$gray);
            if ($i % 2 == 0) {
                cajaRellena(15,$yPos,100,50,$gray,$gray);
                //parrafo($DESCRIPTION, 0, $yPos+20, 1, 0, $arialNarrowBold, $black, 10, 0, 11, 20);
                texto($GENGER,0,$yPos+23,1,0,$arialNarrowBold,$black,8,0,0);
                texto($DESCRIPTION,0,$yPos+37,1,0,$arialNarrowBold,$black,8,0,0);
                //texto($size2,0,$yPos+40,1,0,$arialNarrowBold,$black,10,0,0);
            } else {
                cajaRellena(15,$yPos,100,50,$vicsColor,$vicsColor);
                if ($size3 == '') {
                    texto($size1,0,$yPos+20,1,0,$arialNarrowBold,$sizeColor,10,0,0);
                    texto($size2,0,$yPos+35,1,0,$arialNarrowBold,$sizeColor,10,0,0);
                } else {
                    texto($size1,0,$yPos+15,1,0,$arialNarrowBold,$sizeColor,10,0,0);
                    texto($size2,0,$yPos+30,1,0,$arialNarrowBold,$sizeColor,10,0,0);
                    texto($size3,0,$yPos+45,1,0,$arialNarrowBold,$sizeColor,10,0,0);
                }
                //parrafo($DESCRIPTION, 0, $yPos+20, 1, 0, $arialNarrowBold, $black, 10, 0, 11, 20);
            }
            $yPos += 80;
        }
        
        texto($COLOR,0,570,1,0,$arialNarrow,$black,10,0,0);
        
        texto($STYLE,5,585,0,0,$arialNarrow,$black,7.5,0,0);
        
        texto($DEPT.$SUB.$FINELINE,0,585,2,5,$arialNarrow,$black,7.5,0,0);
        
        texto($SEASON,5,595,0,0,$arialNarrow,$black,7.5,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,10,603,1,60,'UPC');
        
        barcodeTexto(2,-1,-3,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>