<?php                       //   1       2      3     4 
    $correctos = array('QTY','STYLE','SIZE','COLOR','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'S53TC951');
        $SIZE = asignar(2,'M');
        $COLOR = asignar(3,'AZTECDIAMOND');
        $UPC = asignar(4,'123456789012');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto('STYLE',10,150,0,0,$arial,$black,8,0,0);
        texto('SIZE',75,150,0,0,$arial,$black,8,0,0);
        texto('COLOR',110,150,0,0,$arial,$black,8,0,0);
        
        imageline($img,10,157,65,157,$black); 
        imageline($img,75,157,100,157,$black); 
        imageline($img,110,157,190,157,$black); 
        
        texto($STYLE,10,170,0,0,$arial,$black,8,0,0);
        texto($SIZE,75,170,0,0,$arial,$black,8,0,0);
        texto($COLOR,110,170,0,0,$arial,$black,8,0,0);
        
        texto($UPC,55,120,1,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,20,25,1.3,80,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
