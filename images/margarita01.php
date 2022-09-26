<?php                    //    1     2      3        4
    $correctos = array('QTY','UPC','SIZE','COLOR','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'123456789012');
        $SIZE = asignar(2,'S');
        $COLOR = asignar(3,'COLOR');
        $PRICE = asignar(4,'32.00');
        
            // Creacion del formato
        formato(150,188,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('Skullcandy_Logo.ttf');
       
        // Introducimos los datos
        $sizeImg = '';
        switch($SIZE)
        {
            case 'XS': $sizeImg = '1';
                      Break;
            case 'S': $sizeImg = '2';
                      Break;
            case 'M': $sizeImg = '3';
                      Break;
            case 'L': $sizeImg = '4';
                      Break;
            case 'XL': $sizeImg = '5';
                      Break;
            case 'XXL': $sizeImg = '6';
                      Break;
        }
        
        texto($sizeImg,0,40,1,0,$logo,$black,30,0,0);
        
        texto($COLOR,0,60,1,0,$arial,$black,11,0,0);
        
        texto('MSRP $'.sinSigno($PRICE),0,75,1,0,$arial,$black,10.5,0,0);
        
        // Creacion del Barcode
        barcode($UPC,5,72,1.2,80,'UPC');
        
        barcodeTexto(1,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
