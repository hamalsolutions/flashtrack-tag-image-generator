<?php                    //        1         2       3       4      5 
    $correctos = array('QTY','DESCRIPTION','SIZE','UPC','PRICE','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'HELLO MY NAME IS AWESOME');
        $SIZE = asignar(2,'SMALL');
        $UPC = asignar(3,'845550607190');
        $PRICE = asignar(4,'24.00');
        $CLASS = asignar(5,'50');
        
        // Creacion del formato
        formato(300,169,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
                    
            // Introducimos los datos
        texto('Fred Meyer',0,65,1,0,$arialBold,$black,15,90,0);
        
        texto($DESCRIPTION,0,80,1,0,$arial,$black,7,90,0);
        
        texto($CLASS,125,118,0,0,$arial,$black,8,90,0);
        
        texto('CL',135,130,0,0,$arial,$black,6,90,0);
        
        texto('SIZE',15,250,0,0,$arial,$black,6,90,0);
        
        texto($SIZE,0,265,1,0,$arial,$black,14,90,0);
        
        texto(formatizarTexto('885347     085992',$UPC),110,145,0,0,$arial,$black,9.5,0,0);
        
        texto($PRICE,0,290,1,0,$arial,$black,14,90,1);
        
        
        // Creacion del Barcode
        barcode($UPC,100,90,1.1,60,'UPC',90);
        
        require_once('../includes/footer.php');
    }
?>
