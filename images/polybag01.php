<?php                      //   1         2           3       
    $correctos = array('QTY','PART#','DESCRIPTION','COUNTRY','QTY CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PART = asignar(1,'286521003');
        $DESCRIPTION = asignar(2,'MIUSA LS IMC TEE');
        $COUNTRY = asignar(3,'USA');
        $QTY = asignar(4,'Q1');
        
        // Creacion del formato
        formato(400,200,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('(P) Part #',50,25,0,0,$arial,$black,10,0,0);
        texto('P'.$PART,50,45,0,0,$arialBold,$black,12,0,0);
        
        texto($DESCRIPTION,50,60,0,0,$arialBold,$black,10,0,0);
        
        texto('(Q) QTY',50,145,0,0,$arial,$black,10,0,0);
        texto($QTY,50,180,0,0,$arialBold,$black,12,0,0); 
        
        texto('(COO) Country Of Origin: '. $COUNTRY,0,165,2,30,$arialBold,$black,9,0,0);
        
        // Creacion del Barcode
        require("php-barcode2.php");
        
        //------------- # 1 --------------
        $totaly = 125;
        $bartop = 65;
        $barbottom = 0;
        $barleft = 50;
        $barrigth = 2;
        $ancho = 0.2;
        
        barcode_print('P'.$PART,'39',1,'png');
        
        //------------- # 1 --------------
        $totaly = 190;
        $bartop = 135;
        $barbottom = 0;
        $barleft = 110;
        $barrigth = 2;
        $ancho = 0.2;
        
        barcode_print($QTY,'39',1,'png');
           
        barcodeTexto(-1, 0, 0, 0, 'arial.ttf');
        
        require_once('../includes/footer2.php');
    }
?>