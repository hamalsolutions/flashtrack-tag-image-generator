<?php                //  1     2       3      4         5           6       7      8
    $correctos = array('QTY','DEPT','CLASS','DESCRIPTION','STYLE','PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {

        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'37');
        $CLASS = asignar(2,'132');
        $DESCRIPTION = asignar(3,'STAND TALL');
        $STYLE = asignar(4,'2DME471');
        $PRICE = asignar(5,'14.99');
        $UPC = asignar(6,'887117944805');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $bankgthd = fuente('bankgthd.ttf');
        $bankgthl = fuente('bankgthl.ttf');
        
        // Introducimos los datos
        texto('HYBRID',0,40,1,0,$bankgthd,$black,18,0,0);
        texto('__________',0,39,1,0,$arialBold,$black,18,0,0);
        texto('APPAREL',0,58,1,0,$bankgthl,$black,12,0,0);
        

        texto('DEPT: '.$DEPT,20,90,0,60,$arial,$black,10,0,0);        

        texto('CLASS: '.$CLASS,20,107,0,0,$arial,$black,10,0,0);
        
        texto('STYLE: '.$STYLE,20,123,0,0,$arial,$black,10,0,0);

        texto($DESCRIPTION,20,140,0,0,$arial,$black,10,0,0);        

        perforacion();

        texto($PRICE,0,277,1,0,$arial,$black,12,0,1);        

        // Creacion del Barcode
        barcode($UPC,8,118,1.3,100,'UPC');
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');

    }
?>
