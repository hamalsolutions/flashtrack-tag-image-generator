<?php                       //    1           2      3       4      5   
    $correctos = array('QTY','DESCRIPTION','COLOR','SIZE','STYLE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'Strap Bucket Hat');
        $COLOR = asignar(2,'Maroon');
        $SIZE = asignar(3,'S');
        $STYLE = asignar(4,'123-42-1');
        $UPC = asignar(5,'782519005812');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Kavu_Logo2010.ttf');
        $arial50 = fuente('Arial_50.ttf');
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('K',0,80,1,0,$logo,$black,36,0,0);
        
        if(strlen($DESCRIPTION) > 20){
          texto($DESCRIPTION,0,115,1,0,$arial50,$black,8,0,0);
        }else{
          texto($DESCRIPTION,0,115,1,0,$arialBold,$black,8,0,0);  
        }
        
        texto($COLOR,0,135,1,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,0,160,1,0,$arialBold,$black,12,0,0);
        
        texto('STYLE#: '.$STYLE,0,180,1,0,$arialBold,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,185,1,44,'UPC');
        
        barcodeTexto(2, 1, -3, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
