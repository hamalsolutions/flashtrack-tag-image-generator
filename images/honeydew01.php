<?php                      //   1      2       3      4         5          6   
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'ORANGE SHERBET');
        $SIZE = asignar(2,'M');
        $STYLE = asignar(3,'300436');
        $UPC = asignar(4,'757322699268');
        $DESCRIPTION = asignar(5,'FLORA');
        $PRICE = asignar(6,'MSRP $14.00 3/$33.00');
        
        // Creacion del formato
        formato(450,110,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $green = color(123,200,157);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $miriadProCond = fuente('MYRIADPRO-COND.OTF');
        
        // Introducimos los datos
        texto($SIZE,5,56,0,0,$arial,$black,25,270,0);
        
        texto('STYLE: '.$STYLE,5,67,0,0,$miriadProCond,$black,7.5,270,0);
        
        texto($DESCRIPTION,5,80,0,0,$miriadProCond,$black,7.5,270,0);
        
        texto('COLOR: '.$COLOR,5,95,0,0,$miriadProCond,$black,7.5,270,0);
        
        texto('www.honeydewintimates.com',200,104,0,0,$arial,$green,12,0,0);
        
        texto($PRICE,0,435,1,0,$miriadProCond,$black,10,270,0);
        
        
        // Creacion del Barcode
        barcode($UPC,13,407,1,67,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>