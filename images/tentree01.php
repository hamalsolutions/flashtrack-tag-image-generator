<?php              //    1       2          3          4       5          6        7      8       9     10         11     
    $correctos = array('QTY','CODE39','DESCRIPTION','SIZE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        //$SKU = asignar(1,'WTAK-MIN');
        $CODE39 = asignar(1,'*WTAK-MIN-S*');
        $DESCRIPTION = asignar(2,'Take Flight (Mint Green)');
        $SIZE = asignar(3,'S');
        //$PRODCAT = asignar(5,'30');
        //$GENDER = asignar(6,'Women s');
        $COLOR = asignar(4,'Mint Green');
        //$WHSL = asignar(8,'17.5');
        //$MSRP = asignar(9,'35');
        //$SEASON = asignar(10,'SP14');
        //$CATEGORY = asignar(11,'T-Shirt');
        
        
        // Creacion del formato
        formato(310,188,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        setAsSticker(10);
        
        texto($DESCRIPTION,0,30,1,0,$arial,$black,12,0,0);
        
        texto($COLOR,20,60,0,0,$arial,$black,12,0,0);
        texto($SIZE,0,60,2,20,$arialBold,$black,12,0,0);
        
        texto(str_replace("*", "", $CODE39),0,160,1,0,$arialBold,$black,12,0,0);
        texto('TENTREE.COM',0,180,1,0,$arial,$black,12,0,0);
        
        // Creacion del Barcode
        barcode(strtoupper($CODE39),  strlen($CODE39)>14?12:22,75,1,60,'39');
        
        require_once('../includes/footer.php');
    }
?>