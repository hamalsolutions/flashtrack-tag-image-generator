<?php                      //   1      2       3      4       5          6           7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Dark Chocolate');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'G3800L105LSM0');
        $UPC = asignar(4,'883096085164');
        $DESCRIPTION = asignar(5,'Soft Cotton Polo Shirt');
        $PRICE = asignar(6,'5');
                
        // Creacion del formato
        formato(200,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $purple = color(47,38,135);
        $gray = color(125,111,116);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('gildan_logo.ttf');
        
        // Introducimos los datos
        
        imagefilledellipse($img,105,20,15,15,$transparent);
        imageellipse($img,105,20,15,15,$gray);
        
        texto('H',0,79,1,0,$logo,$gray,65,0,0);
        
        texto('g',0,79,1,0,$logo,$purple,65,0,0);
        
        //texto($GENDER,0,95,1,0,$arial,$black,12,0,0);   // New layout doesn't have this field
        
        texto($DESCRIPTION,0,95,1,0,$arial,$black,strlen($DESCRIPTION)>18?10:12,0,0); // the new layout has thid field at the same location as Gender in the old format 
        //texto($DESCRIPTION,0,118,1,0,$arial,$black,12,0,0);
        
        texto($SIZE,0,118,1,0,$arialBold,$black,15,0,0);
        //texto($SIZE,0,150,1,0,$arialBold,$black,15,0,0);
        
        texto($COLOR,0,150,1,0,$arial,$black,12,0,0);
        //texto($COLOR,0,180,1,0,$arial,$black,12,0,0);
        
        texto($PRICE,0,180,1,0,$arialBold,$black,24,0,1);
        
        texto($STYLE,0,290,1,0,$arial,$black,9,0,0);
        
          // Creacion del Barcode
        barcode($UPC,35,175,1.1,85,'UPC');
        
        barcodeTexto(1,-1,-2,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
