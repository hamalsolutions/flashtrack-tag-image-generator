<?php                      //   1      2       3      4           5          6 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','COMPARE PRICE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'VL7B0080F');
        $COLOR = asignar(2,'ROYAL BLUE');
        $SIZE = asignar(3,'LARGE');
        $UPC = asignar(4,'889560220949');
        $COMPARE = asignar(5,'18.00');
        $PRICE = asignar(6,'9.00');

            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,5,3);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos

        texto($STYLE,0,45,1,0,$arialNarrowBold,$black,8,0,0);
        texto($COLOR,0,60,1,0,$arialNarrowBold,$black,8,0,0);
        texto($SIZE,0,75,1,0,$arialNarrowBold,$black,9,0,0);

        cajaVacia(15,191,100,70,$black);
        cajaVacia(14,190,102,72,$black);

        texto('Compare at:',25,205,0,0,$timesNewRomanBold,$red,8,0,0);
        texto($COMPARE,0,220,2,45,$timesNewRomanBold,$red,8,0,1);

        texto('You Pay:',25,235,0,0,$timesNewRomanBold,$red,8,0,0);
        texto($PRICE,0,255,2,45,$timesNewRomanBold,$red,11,0,1);


        texto(formatizarTexto('12  345  67  8901  2',$UPC),0,155,1,0,$arial,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,11,73,1.1,70,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
