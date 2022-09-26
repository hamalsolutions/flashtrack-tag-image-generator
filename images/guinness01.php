<?php                    //    1        2           3       4       5     6       7
    $correctos = array('QTY','UPC','DESCRIPTION','STORE','COLOR','SIZE','ITEM','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'654563601879');
        $DESCRIPTION = asignar(2,'MENS COMMEMORATE VEGAS');
        $STORE = asignar(3,'The Guinness Store');
        $COLOR = asignar(4,'BLACK');
        $SIZE = asignar(5,'S');
        $ITEM = asignar(6,'GNM091');
        $PRICE = asignar(7,'22.00');
        
            // Creacion del formato
        formato(225,113,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $courrier = fuente('cour.ttf');
       
        // Introducimos los datos
        texto($STORE,5,15,0,0,$arial,$black,8,0,0);
        texto($DESCRIPTION,5,27,0,0,$arial,$black,8,0,0);
        texto($COLOR. '  '.$SIZE,5,38,0,0,$arial,$black,8,0,0);
        texto($ITEM,5,49,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,57,1,0,$arial,$black,9,0,1);
                
        texto(formatizarTexto('1 2 3 4 5 6   1 4 5 4 5 1',$UPC),0,108,1,0,$courrier,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($UPC,-3,29,2.1,67,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
