<?php                       //   1       2       3     4 
    $correctos = array('QTY','STYLE','DESCRIPTION','SIZE','UPC','ITEM','PRICE','COUNTRY','CA');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SG877839WT');
        $DESCRIPTION = asignar(2,'SONIC HEDGEHOG TEE');
        $SIZE = asignar(3,'4');
        $UPC = asignar(4,'884616098831');
        $ITEM = asignar(5,'30315877');
        $PRICE = asignar(6,'7');
        $COUNTRY = asignar(7,'Bangladesh');
        $CA = asignar(8,'51122');
        
        // Creacion del formato 
        formato(150,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,10,0,0,$arial,$black,6.5,0,0);
        
        texto($SIZE,0,10,2,10,$arial,$black,6.5,0,0);
        
        texto($DESCRIPTION,0,18,1,0,$arial,$black,6.5,0,0);
        
        texto($ITEM,0,26,1,0,$arial,$black,6.5,0,0);
        
        texto($PRICE,0,73,1,0,$arial,$black,7,0,1);
        
        texto('Made in / Fabrique au '.$COUNTRY,0,85,1,0,strlen($COUNTRY)>15?$arialNarrow:$arial,$black,strlen($COUNTRY)>15?6:6.5,0,0);
        
        texto('CA#'.$CA,0,95,1,0,$arial,$black,6.5,0,0);
        
        //texto('Satisfaction Guaranteed',0,87,1,0,$arial,$black,6.5,0,0);
        
        //texto('Satisfaction Garantie',0,95,1,0,$arial,$black,6.5,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,28,1,30,'UPC');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
