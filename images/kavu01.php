<?php                       //    1           2      3      4     5      6  
    $correctos = array('QTY','DESCRIPTION','COLOR','SIZE','SKU','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'Banfield Zip');
        $COLOR = asignar(2,'Black');
        $SIZE = asignar(3,'Large');
        $SKU = asignar(4,'523-20-3');
        $UPC = asignar(5,'782519005812');
        $PRICE = asignar(6,'$55.00');
        
            // Creacion del formato
        formato(150,250,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('Kavu_Logo2010.ttf');
        $arial50 = fuente('Arial_50.ttf');
        // Introducimos los datos
        setAsSticker(15);
        
        agujero(75, 25);
        
        texto('K',0,70,1,0,$logo,$black,31,0,0);
        
        if(strlen($DESCRIPTION) > 14){
          texto($DESCRIPTION,0,95,1,0,$arial50,$black,11,0,0);
        }else{
          texto($DESCRIPTION,0,95,1,0,$arial,$black,11,0,0);  
        }
        
        texto($COLOR,0,113,1,0,$arial,$black,11,0,0);
        
        texto($SIZE,0,130,1,0,$arial,$black,11,0,0);
        
        texto($SKU,0,150,1,0,$arial,$black,11,0,0);
        
        perforacion(150, 250, 220);
        
        texto($PRICE,0,240,1,0,$arial,$black,12,0,1);
        
        texto($UPC,0,215,1,0,$arial,$black,10,0,0);       
        // Creacion del Barcode
        barcode($UPC,18,155,1,44,'UPC');
 
        require_once('../includes/footer.php');
    }
?>
