<?php                    //    1        2
    $correctos = array('QTY','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'X0001BE8BV');
        $DESCRIPTION = asignar(2,'The Official Colbert Nation US Speedskating Hat New');
        
            // Creacion del formato
        formato(225,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        
        parrafo($DESCRIPTION, 6, 80, 0, 0, $arial, $black, 7.5, 0, 50, 10);
        
        texto($UPC,0,60,1,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,15,10,1.3,37,'128');
        
        require_once('../includes/footer.php');
    }
?>
