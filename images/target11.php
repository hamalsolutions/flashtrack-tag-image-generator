<?php                      //   1      2      3      4     5
    $correctos = array('QTY','DEPT','CLASS','ITEM','UPC','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $DEPT = asignar(1,'243');
        $CLASS = asignar(2,'25');
        $ITEM = asignar(3,'4068');
        $UPC = asignar(4,'490430137450');
        $SIZE = asignar(5,'S');
                       
            // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('DCPI:',25,31,0,0,$arial,$black,8,0,0);

        texto($DEPT,0,31,3,15,$arial,$black,8,0,0);
        texto('/',78,31,0,0,$arial,$black,8,0,0);
        texto($CLASS,0,31,3,-30,$arial,$black,8,0,0);
        texto('/',95,31,0,0,$arial,$black,8,0,0);
        texto($ITEM,0,31,3,-75,$arial,$black,8,0,0);
        
        texto(formatizarTexto('12  345  61  45451',$UPC),0,116,1,0,$arial,$black,10,0,0);
        
        texto('SIZE:',40,140,0,0,$arial,$black,13,0,0);
        texto($SIZE,0,140,3,-55,$arial,$black,13,0,0);
        
                
        // Creacion del Barcode
        barcode($UPC,18,40,1,60,'UPC');
        
        require_once('../includes/footer.php');
    }
?>