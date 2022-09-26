<?php                       //    1           2      3      4     5   
    $correctos = array('QTY','DESCRIPTION','COLOR','SIZE','SKU','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'Hooweerd');
        $COLOR = asignar(2,'Green Lake');
        $SIZE = asignar(3,'L');
        $SKU = asignar(4,'502-15-3');
        $UPC = asignar(5,'153477899858');
        
            // Creacion del formato
        formato(300,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial50 = fuente('Arial_50.ttf');
        $timesNewRoman = fuente('times.ttf');
        
        // Introducimos los datos
        setAsSticker(15);
       
        if(strlen($DESCRIPTION) > 14){
          texto($DESCRIPTION,0,25,3,-140,$arial50,$black,16,0,0);
        }else{
          texto($DESCRIPTION,0,25,3,-140,$timesNewRoman,$black,16,0,0);  
        }
        
        texto($SKU,10,25,0,0,$timesNewRoman,$black,16,0,0);
        
        texto('Size: '.$SIZE,10,100,0,0,$timesNewRoman,$black,16,0,0);
        
        texto('Color: '.$COLOR,10,180,0,0,$timesNewRoman,$black,16,0,0);
        
        // Creacion del Barcode 
        barcode($UPC,125,50,1.2,70,'UPC');
        
        barcodeTexto(2, 1, -3, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
