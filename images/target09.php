<?php                    //       1        2       3       4      5       6      7          8        9       10
    $correctos = array('QTY','FORMAT-ID','SIZE','COLOR','STYLE','DEPT','CLASS','ITEM','FACTORY-ID','DATE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $FORMAT_ID = asignar(1,'AD S4-6');
        $SIZE = asignar(2,'8');
        $COLOR = asignar(3,'BLACK');
        $STYLE = asignar(4,'1740J9999A');
        $DEPT = asignar(5,'032');
        $CLASS = asignar(6,'06');
        $ITEM = asignar(7,'2385');
        $FACTORY_ID = asignar(8,'F16793352');
        $DATE = asignar(9,'Q3/11');
        $PRICE = asignar(10,'0.00');
        
            // Creacion del formato
        formato(125,238,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $timesBold = fuente('timesbd.ttf');
        $times = fuente('times.ttf');
       
        // Introducimos los datos
        
        texto($FORMAT_ID,0,15,2,15,$arial,$black,7,0,0);
        
        texto('SIZE',0,40,1,0,$timesBold,$black,9.5,0,0);
        texto($SIZE,0,70,1,0,$timesBold,$black,20,0,0);
        
        texto($COLOR,10,95,0,0,$timesBold,$black,9,0,0);
        
        texto('STYLE',10,110,0,0,$timesBold,$black,7,0,0);
        texto($STYLE,45,110,0,0,$timesBold,$black,7,0,0);
        
        texto($DEPT,0,130,3,80,$timesBold,$black,9,0,0);
        texto('DEPT',10,140,0,0,$timesBold,$black,7,0,0);
        
        texto($CLASS,0,130,1,0,$timesBold,$black,9,0,0);
        texto('CL',0,140,1,0,$timesBold,$black,7,0,0);
        
        texto($ITEM,0,130,3,-75,$timesBold,$black,9,0,0);
        texto('ITEM',0,140,3,-75,$timesBold,$black,7,0,0);
        
        texto($FACTORY_ID.' - '.$DATE,0,170,1,0,$times,$black,7,0,0);
        
        texto('-- - - - - - - - - - - - - --',0,190,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,225,2,10,$arial,$black,16,0,1);
        
        require_once('../includes/footer.php');
    }
?>
