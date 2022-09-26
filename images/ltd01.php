<?php                       // 1      2     3
    $correctos = array('QTY','CODE','UPC','COO');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $CODE = asignar(1,'LPO-CMX');
        $UPC = asignar(2,'884616098831');
        $COO = asignar(3,'MADE IN PAKISTAN');
        
        // Creacion del formato
        formato(150,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('CODE:',35,18,0,0,$arial,$black,7,0,0);
        texto($CODE,70,18,0,0,$arial,$black,7,0,0);
        
        texto($COO,0,90,1,0,$arial,$black,7,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,22,1,50,'UPC');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
