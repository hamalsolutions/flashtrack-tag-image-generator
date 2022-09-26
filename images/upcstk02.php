<?php                       //   1       2          3      4        5      6
    $correctos = array('QTY','STYLE','UPC','COLOR','SIZE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'XDP9373C');
        $UPC = asignar(2,'846932000011');
        $COLOR = asignar(3,'RED');
        $SIZE = asignar(4,'5');
        $DESCRIPTION = asignar(5,'DESCRIPTION');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');

        // Introducimos los datos
        setAsSticker(15);
        
        texto('PINK & VIOLET',0,12,1,0,$arial,$black,8,0,0);     
        
        texto('STYLE:',30,25,0,0,$arialNarrow,$black,8,0,0);        
        texto($STYLE,65,25,0,0,$arialNarrow,$black,8,0,0);        
        
        texto('SIZE:',38,36,0,0,$arialNarrow,$black,8,0,0);        
        texto($SIZE,65,36,0,0,$arialNarrow,$black,8,0,0);        

        texto('COLOR:',26,47,0,0,$arialNarrow,$black,8,0,0);     
        texto($COLOR,65,47,0,0,$arialNarrow,$black,8,0,0);     
        
        texto($DESCRIPTION,0,60,1,0,$arialNarrow,$black,9,0,0);     
    
        // Creacion del Barcode
        barcode(str_replace('-','',$UPC),12,61,1.1,70,'UPC');
        
        barcodeTexto(2,0,-1,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
