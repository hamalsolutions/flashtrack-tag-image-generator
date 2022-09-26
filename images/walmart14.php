<?php                     //    1      2       3      4      5       6          7       8         9
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','CLASS-FL','SEASON','DEPT','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'2XL (19)');
        $STYLE = asignar(3,'FFSEPTEX-09');
        $UPC = asignar(4,'846556281414');
        $PRICE = asignar(5,'7.00');
        $CLASS = asignar(6,'00 F/L 3080');
        $SEASON = asignar(7,'0310');
        $DEPT = asignar(8,'34');
        $DESCRIPTION = asignar(9,'SUPERMAN CLASSIC SHIELD');
        
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $MyriadProBold = fuente('MyriadPro-Bold.otf');
        
        // Introducimos los datos
        
        texto($PRICE,0,42,1,0,$MyriadProBold,$black,21,90,1);
        
        $yPos = 90;
        for($i=1;$i<=5;$i++){
            texto($SIZE,0,$yPos,1,0,$arialBold,$black,10,90,0);
            $yPos += 48;
        }
        
        texto($CLASS,texto($DEPT,310,15,0,0,$arial,$black,7,0,0)-6,15,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,380,15,0,0,$arial,$black,7,0,0);
        
        texto($SEASON,310,27,0,0,$arial,$black,7,0,0);
        
        texto($STYLE,360,27,0,0,$arial,$black,7,0,0);
        
        texto($DESCRIPTION,311,38,0,0,$arial,$black,6,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,310,1,43,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>