<?php                    //    1      2      3
    $correctos = array('QTY','UPC','STYLE','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'123456789012');
        $STYLE = asignar(2,'AD54474');
        $SIZE = asignar(3,'SMALL');
        
            // Creacion del formato
        formato(150,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        
        //texto('UPC# '.$UPC,0,25,1,0,$arial,$black,9,0,0);
        
        texto('STYLE# '.$STYLE,0,75,1,0,$arial,$black,9,0,0);
        
        texto('SIZE '.$SIZE,0,90,1,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,10,1,40,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
