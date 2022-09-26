<?php                       //   1       2       3     4     5        6       7
    $correctos = array('QTY','PO','CONTROLLER','STYLE','COLLECTION NAME','SIZE','CLASS','DESCRIPTION1','DESCRIPTION2','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PO = asignar(1,'575102');
        $CONTROLER = asignar(2,'H17302');
        $STYLE = asignar(3,'92884-94');
        $COLLECTION = asignar(4,'SEASONAL');
        $SIZE = asignar(5,'M');
        $CLASS = asignar(6,'44');
        $DESCRIPTION1 = asignar(7,'PURCHASE YOUR REGULAR');
        $DESCRIPTION2 = asignar(8,'PRE-PREGNANCY SIZE USA');
        $UPC = asignar(9,'657107866789');
        $PRICE = asignar(10,'24.98');
        
        // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        agujero(75, 30);
        // Introducimos los datos
        texto($PO,10,20,0,0,$arial,$black,9,0,0);
        texto($CONTROLER,0,20,2,10,$arial,$black,9,0,0);
        
        texto('STYLE',10,45,0,0,$arial,$black,9,0,0);
        texto($STYLE,10,58,0,0,$arial,$black,9,0,0);
        texto($COLLECTION,10,70,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,55,2,20,$arialBold,$black,22,0,0);
        texto('CL='.$CLASS,0,70,2,10,$arial,$black,9,0,0);
        
        texto($DESCRIPTION1,0,85,1,0,$arial,$black,7,0,0);
        texto($DESCRIPTION2,0,95,1,0,$arial,$black,7,0,0);
        
        perforacion(150,1,158);
        
        texto('PRICE',0,215,1,0,$arialBold,$black,10,0,0);
        texto($PRICE,0,235,1,0,$arialBold,$black,11,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,88,1.2,50,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
