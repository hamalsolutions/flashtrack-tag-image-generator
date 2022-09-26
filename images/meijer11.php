<?php                     //    1      2       3      4      5      6        7          8         9
    $correctos = array('QTY','SIZE','DEPT','UPC','DESC1','DESC2','GENDER','STYLE','PRICE','PCS');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SIZE = asignar(1,'10/12');
        $DEPT = asignar(2,'210');
        $UPC = asignar(3,'808295638034');
        $DESC1 = asignar(4,'HK SHORT SLEEVE');
        $DESC2 = asignar(5,'SS TEE');
        $GENDER = asignar(6,'GIRLS');
        $STYLE = asignar(7,'HK8006367');
        $PRICE = asignar(8,'9.00');
        $PCS = asignar(9,'1PC');
        
            // Creacion del formato
        formato(131,675,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        
        texto($GENDER,0,50,1,0,$arialNarrowBold,$black,20,0,0);
        
        texto($PRICE,0,95,1,0,$arialNarrowBold,$black,18,0,1);
        
        $yPos = 190;
        for($i=1;$i<=3;$i++){
            texto($SIZE,0,$yPos,1,0,$arialNarrowBold,$black,18,0,0);
              $yPos += 30;
            texto($DESC1,0,$yPos,1,0,$arialNarrowBold,$black,11,0,0);
              $yPos += 70;
         }
        
        texto($DESC2,0,510,1,0,$arialNarrowBold,$black,14,0,0);
        
        texto($STYLE,0,530,1,0,$arialNarrowBold,$black,11,0,0);
        
        texto($DEPT,0,550,2,10,$arialNarrowBold,$black,8,0,0);
        
        texto($PCS,10,550,0,0,$arialNarrowBold,$black,8,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,10,560,1,60,'UPC');
        
        barcodeTexto(2,-1,-3,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>