<?php                    //      1            2   
    $correctos = array('QTY','BARCODE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $BARCODE = asignar(1,'300BB-BLCK-L');
        $DESCRIPTION = asignar(2,'STRAPPY TRIANGLE TOP');
        
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('BETTINIS_Logo3.ttf');
        // Introducimos los datos
        
        texto('B',0,35,1,0,$logo,$black,30,0,0);
        
        texto($BARCODE,0,118,1,0,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,0,139,1,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($BARCODE,15,55,1,50,'128');
        
        require_once('../includes/footer.php');
    }
?>