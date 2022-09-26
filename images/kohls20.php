<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {

        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'NAVY');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'WRD-039');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'49');
        $PRICE = asignar(6,'46.00');
        $DEPT = asignar(7,'059');
        $CLASS = asignar(8,'60');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',0,69,1,0,$arialBold,$black,18,0,0);

        texto($DEPT,0,95,3,60,$arial,$black,12,0,0);        

        texto($CLASS,0,95,1,0,$arial,$black,12,0,0);
        
        texto($SUB,0,95,3,-60,$arial,$black,12,0,0);
        
        texto('STYLE  '.$STYLE,0,111,1,0,$arial,$black,8,0,0);

        texto('COLOR  '.$COLOR,0,126,1,0,$arial,$black,8,0,0);        

        texto('SIZE  '.$SIZE,0,147,1,0,$arial,$black,8,0,0);        

        texto(formatizarTexto('1    23456   78901    2',$UPC),0,235,1,0,$arial,$black,10,0,0);        

        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);        

        texto($PRICE,0,277,1,0,$arial,$black,12,0,1);        

        // Creacion del Barcode
        barcode($UPC,8,118,1.3,100,'UPC');
        
        require_once('../includes/footer.php');

    }
?>
