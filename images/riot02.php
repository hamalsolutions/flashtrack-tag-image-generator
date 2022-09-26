<?php                      //   1 
    $correctos = array('QTY','SKU','DESCRIPTION','GENDER','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SKU = asignar(1,'1093-10-10');
        $DESCRIPTION = asignar(2,'WORLDS');
        $GENDER = asignar(3,'UNISEX');
        $SIZE = asignar(4,'S');
        // Creacion del formato
        formato(150,250,255,255,255);
        
        // Colores a usar
        $red = color(241,5,0);
        $black= color(0,0,0);
        
        // Fuentes a usar
        $logo = fuente('riot_logos.ttf');
        $logoG = fuente('riot_logos.ttf');
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        // Introducimos los datos
        
        texto('B',0,180,1,0,$logoG,$black,130,0,0);
        texto('A',0,160,1,0,$logo,$red,130,0,0);
        
        texto($DESCRIPTION,0,210,1,0,$arialBold,$black,strlen($DESCRIPTION)>18?7.5:9,0,0);
        texto($GENDER,0,225,1,0,$arialBold,$black,9,0,0);
        texto($SIZE,0,240,1,0,$arialBold,$black,9,0,0);
        
        // Creacion del Barcode
        texto($SKU,0,90,1,0,$arial,$black,9,0,0);
        barcode($SKU,0,18,1,60,'39');
        
        require_once('../includes/footer.php');
    }
?>