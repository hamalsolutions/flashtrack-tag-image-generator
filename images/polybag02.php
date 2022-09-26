<?php                      //   1         2           3       
    $correctos = array('QTY','PART#','DESCRIPTION','COUNTRY');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PART = asignar(1,'286521003');
        $DESCRIPTION = asignar(2,'MIUSA LS IMC TEE');
        $COUNTRY = asignar(3,'USA');
                
        // Creacion del formato
        formato(300,100,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('IndianMotorcycle_Logo.ttf');
        
        // Introducimos los datos
        
        texto('I',10,40,0,0,$logo,$black,25,270,0);
        
        texto($DESCRIPTION,20,77,0,0,$arial,$black,10,0,0);
        
        texto($PART,55,95,0,0,$arialBold,$black,10,0,0);
        
        texto($COUNTRY,0,95,2,70,$arialBold,$black,9,0,0);
        
        // Creacion del Barcode
        barcode('P'.$PART,  strlen($PART)>14?37:20,10,1,52,'39');
            
        barcodeTexto(-1, 0, 0, 0, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>