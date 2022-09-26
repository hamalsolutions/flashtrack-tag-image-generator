<?php                       //  1      2       3     4      5       6
    $correctos = array('QTY','STYLE','COLOR','UPC','DEPT','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
        $STYLE = asignar(1,'<style>');
        $COLOR = asignar(2,'<color>');
        $UPC = asignar(3,'123456789012');
        $DEPT = asignar(4,'<dept>');
        $SIZE = asignar(5,'<size>');
        $PRICE = asignar(6,'20.00');
                       
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('NordstromRackLogo.ttf');
        
        // Introducimos los datos
        
        texto('n',0,30,1,0,$logo,$black,18,0,0);
        
        texto($STYLE,45,42,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,45,55,0,0,$arial,$black,8,0,0);
        
        texto($DEPT,35,113,0,0,$arial,$black,8,0,0);
        texto('Dept',35,127,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,35,139,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,140,2,17,$arial,$black,9,0,1);
        
        // Creacion del Barcode
        barcode($UPC,28,50,1.2,43,'UPC');
        
        barcodeTexto(2,-1,-2,6,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>