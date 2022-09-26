<?php                      //   1            2        3     4      5        6
    $correctos = array('QTY','DESCRIPTION','COLOR','SIZE','PRICE','CODE39','PACKS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'MARVEL JUNIORS GIRLS RULE');
        $COLOR = asignar(2,'WHT');
        $SIZE = asignar(3,'SM');
        $PRICE = asignar(4,'26.95');
        $CODE39 = asignar(5,'400012396526');
        $PACKS = asignar(6,'6');
              
        
        // Creacion del formato
        formato(350,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($CODE39,0,75,1,0,$arial,$black,12,0,0);
        
        texto($DESCRIPTION,0,90,1,0,$arial,$black,9,0,0);
        
        texto('COLOR: '.$COLOR,10,110,0,0,$arial,$black,9,0,0);
        texto('SIZE: '.$SIZE,0,110,2,10,$arial,$black,9,0,0);
        
        texto('QTY:  '.$PACKS,10,130,0,0,$arial,$black,10,0,0);
        texto('RET: PRICE  ',0,130,2,100,$arial,$black,10,0,0); 
        texto($PRICE,0,130,2,60,$arial,$black,10,0,1);
        
        // Creacion del Barcode
        barcode($CODE39,  strlen($CODE39)>14?37:55,5,1,52,'39');
                
        barcodeTexto(-1, 0, 0, 0, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>