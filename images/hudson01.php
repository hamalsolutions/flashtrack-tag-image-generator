<?php                    //    1        2     3     4       5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','DATE','CAT','PCS','SKU');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CHARCOAL');
        $SIZE = asignar(2,'XLG');
        $STYLE = asignar(3,'MS1IX154');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'52.00');
        $DEPT = asignar(6,'332');
        $DATE = asignar(7,'SS14');
        $CAT = asignar(8,'1234');
        $PCS = asignar(9,'1');
        $SKU = asignar(10,'1234');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $tahomaBold = fuente('tahomabd.ttf');
        
            // Introducimos los datos
        texto('DEPT',15,23,0,0,$arial,$black,6,0,0);
        texto('RAYON',15,31,0,0,$arial,$black,6,0,0);
        texto($DEPT,15,45,3,110,$arialBold,$black,10,0,0);
        
        lineaVertical(55, 20, 30, $black, 2);
        
        texto('DATE',0,23,1,0,$arial,$black,6,0,0);
        texto('CODE',0,31,1,0,$arial,$black,6,0,0);
        texto($DATE,0,45,1,0,$arialBold,$black,8,0,0);
        
        lineaVertical(107, 20, 30, $black, 2);
        
        texto('CATEGORY',0,23,3,-110,$arial,$black,6,0,0);
        texto('#',0,31,3,-110,$arial,$black,6,0,0);
        texto($CAT,0,45,3,-110,$arialBold,$black,8,0,0);
        
        lineaHorizontal(5, 51, 158, $black,2);
        
        texto('SKU',15,81,0,0,$arial,$black,7,0,0);
        texto('REF',15,89,0,0,$arial,$black,7,0,0);
        texto($SKU,60,86,0,0,$arialBold,$black,9,0,0);
        
        lineaVertical(120, 51, 45, $black, 2);
        
        texto('PCS',125,89,0,0,$arial,$black,7,0,0);
        texto($PCS,145,89,0,0,$arial,$black,7,0,0);
        
        lineaHorizontal(5, 96, 158, $black,2);
        
        texto('COLOR',15,110,0,0,$arial,$black,7,0,0);
        texto('COULEUR',15,118,0,0,$arial,$black,7,0,0);
        texto($COLOR,70,115,0,0,$arialBold,$black,9,0,0);
        
        lineaHorizontal(5, 125, 158, $black,2);
        
        texto('STYLE',15,139,0,0,$arial,$black,7,0,0);
        texto('MODELE',15,147,0,0,$arial,$black,7,0,0);
        texto($STYLE,60,144,0,0,$arialBold,$black,10,0,0);
        
        lineaHorizontal(5, 154, 158, $black,2);
        
        lineaHorizontal(5, 230, 158, $black,2);
        
        texto('SIZE',15,244,0,0,$arial,$black,7,0,0);
        texto('TAILLE',15,252,0,0,$arial,$black,7,0,0);
        texto($SIZE,60,249,0,0,$arialBold,$black,10,0,0);
        
        lineaHorizontal(5, 260, 158, $black,2);
        
        texto('PRICE',15,280,0,0,$arial,$black,7,0,0);
        texto('PRIX',15,288,0,0,$arial,$black,7,0,0);
        texto($PRICE,60,285,0,0,$arialBold,$black,10,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,5,115,1.4,100,'UPC');
        
        barcodeTexto(1,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
