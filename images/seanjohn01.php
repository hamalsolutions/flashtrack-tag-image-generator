<?php                      //   1       2      3      4      5 
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'MTI60045B1');
        $COLOR = asignar(2,'BRIGHT WHITE');
        $UPC = asignar(3,'882973087222');
        $SIZE = asignar(4,'6XB');
        $PRICE = asignar(5,'34.50');
        
        // Creacion del formato
        formato(300,350,255,255,255,0);
        
        // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $green = color(124,145,36);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $engravers = fuente('Engravers.ttf');
        $logo = fuente('SEANJOHN_MainLogo.ttf');
        
        // Introducimos los datos
        
        cajaRellena(0,0,150,70,$black,$black);
        texto('S',25,50,0,0,$logo,$white,11,0,0);
        
        cajaRellena(152,0,150,350,$black,$black);
        
        agujero(80, 25);
        
        texto($STYLE,5,90,0,0,$engravers,$black,8,0,0);
        
        texto($COLOR,75,90,0,0,$engravers,$black,8,0,0);
        
        texto($SIZE,90,220,0,0,$engravers,$black,19,0,0);
        
        texto('S',80,80,0,0,$logo,$white,19,270,0);
        
        texto('W',100,130,0,0,$logo,$white,19.5,270,0);
        
        agujero(225, 25);
        
        perforacion(300, 300, 320);
        
        $PRICE = str_replace('$','', $PRICE);
        $PRICE = str_replace('MSRP','', $PRICE); 
        if($PRICE == '0.00' || $PRICE == '00.00')
        {
            $PRICE = '';
        }
        
        texto('MSRP',20,340,0,0,$arial,$black,6.5,0,0);
        texto($PRICE,50,340,0,0,$engravers,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,19,125,1.0,55,'UPC',0);
        
        barcodeTexto(1.5,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>