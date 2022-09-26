<?php                      //   1      2        3     4      5
    $correctos = array('QTY','COLOR','DESCRIPTION','STYLE','SKU');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK/RED');
        $DESCRIPTION = asignar(2,'HOODED ZIP FLEECE: RED - MENS');
        $STYLE = asignar(3,'MUNL673MIJE');
        $SKU = asignar(4,'TI4C001S');
        
        // Creacion del formato
        formato(300,100,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto($DESCRIPTION,0,15,1,0,$arial,$black,9,0,0);
        
        texto('STYLE: '.$STYLE,0,28,1,0,$arial,$black,9,0,0);
                
        texto('COLOR: '.$COLOR,0,41,1,0,$arial,$black,9,0,0);
                
        texto($SKU,0,95,1,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($SKU,65,50,1,30,'39');
        
        require_once('../includes/footer.php');
    }
?>