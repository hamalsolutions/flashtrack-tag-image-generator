<?php                    //     1       2      3       4     5      6          7   
    $correctos = array('QTY','SIZE','STYLE','COLOR','MSRP','UPC','PRICE','DEPT');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'MEDIUM');
        $STYLE = asignar(2,'MS7FT006');
        $COLOR = asignar(3,'06P');
        $MSRP = asignar(4,'80.00');
        $UPC = asignar(5,'609328240930');
        $PRICE = asignar(6,'54.99');
        $DEPT = asignar(7,'974');
        
        // Creacion del formato
        formato(300,169,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        
           // Introducimos los datos
        
        texto('DEPT',15,50,0,0,$arial,$black,8,90,0);
        
        texto($DEPT,47,50,0,0,$arial,$black,8,90,0);
                
        texto($STYLE,15,70,0,0,$arialBold,$black,10,90,0);
        
        texto($UPC,15,90,0,0,$arial,$black,7,90,0);
        
        texto($COLOR,15,120,0,0,$arial,$black,8,90,0);
        
        cajaVacia(75, 115, 85, 20, $black, 90);
        
        texto('SIZE',40,160,0,0,$arial,$black,8,90,0);
        
        texto($SIZE,0,180,3,70,$arialBold,$black,10,90,0);
        
        texto('VALUE',35,200,0,0,$arial,$black,8,90,0);
        
        texto($MSRP,0,215,3,70,$arialBoldSlash,$black,11,90,1);
        
        texto($PRICE,0,240,3,60,$arialBold,$black,11,90,1);
        
        // Creacion del Barcode
        barcode($UPC,160,70,1.2,45,'UPC',90);
        
        barcodeTexto(1,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
