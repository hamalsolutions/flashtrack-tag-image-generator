<?php                     //   1       2       3      4     5       6       7
    $correctos = array('QTY','STYLE','COLOR','SIZE','PRICE','DEPT','CLASS','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'7709SS');
        $COLOR = asignar(2,'BLUE');
        $SIZE = asignar(3,'0-3M');
        $PRICE = asignar(4,'15.99');
        $DEPT = asignar(5,'1200');
        $CLASS = asignar(6,'134');
        $UPC = asignar(7,'885347132467');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar 
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto('DPT',10,50,0,0,$arial,$black,9,0,0);
        texto($DEPT,35,50,0,0,$arial,$black,9,0,0);
        
        texto('CL',97,50,0,0,$arial,$black,9,0,0);
        texto($CLASS,115,50,0,0,$arial,$black,9,0,0);
        
        texto('VPN '.$STYLE,0,75,1,0,$arial,$black,9,0,0);
        
        texto('Color  '.$COLOR,30,190,0,0,$arial,$black,9,0,0);
                        
        texto('Size  '.$SIZE,30,220,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,260,1,0,$arial,$black,14,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,12,85,1.1,70,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
