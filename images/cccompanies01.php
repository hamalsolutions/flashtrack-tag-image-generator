<?php                     //         1          2       3      4       5      6     7      8
    $correctos = array('QTY','DESCRIPTION','COMPARE PRICE','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'6Pc Classic Set');
        $COMPARE = asignar(2,'16.00');
        $COLOR = asignar(3,'Pink');
        $SIZE = asignar(4,'0-3M');
        $STYLE = asignar(5,'42618A0001');
        $UPC = asignar(6,'094134855049');
        $PRICE = asignar(7,'8.25');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
            // Contenido del formato
        texto($DESCRIPTION,0,40,1,0,$arialNarrowBold,$black,10,0,0);
        
        texto($STYLE,0,65,1,0,$arialNarrow,$black,10,0,0);
        
        texto($COLOR,0,85,1,0,$arialNarrow,$black,10,0,0);
        
        texto($SIZE,0,105,1,0,$arialNarrow,$black,10,0,0);
        
        cajaVacia(15,200,120,70,$black);
        cajaVacia(14,199,122,72,$black);
        
        texto('Compare at:',30,215,0,0,$arialBold,$black,7,0,0);
        texto($COMPARE,0,230,2,25,$arialBold,$black,10,0,1);
        
        texto('You Pay:',30,245,0,0,$arialBold,$black,7,0,0);
        texto($PRICE,0,265,2,25,$arialNarrowBold,$black,13,0,1);
        
            // Creacion del Barcode
        barcode($UPC,2,85,1.3,95,'UPC');
        texto(formatizarTexto('1  2 3 4 5 6   2 3 4 5 6  2',$UPC),5,192,1,0,$arial,$black,8.5,0,0);
        
        
        require_once('../includes/footer.php');
    }
?>