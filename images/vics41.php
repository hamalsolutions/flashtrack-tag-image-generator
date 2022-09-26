<?php                     //   1       2       3      4     5       6
    $correctos = array('QTY','STYLE','COLOR','DESCRIPTION','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'F2466AML7');
        $COLOR = asignar(2,'BLACK');
		$DESCRIPTION = asignar(3, 'SCREEN TEE');
		$UPC = asignar(4, '841183107311');
		$SIZE = asignar(5, 'XSMALL');
		$PRICE = asignar(6, '$24.00');

            // Creacion del formato
		formato(150, 325, 255, 255, 255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(75, 25);
        
        texto($STYLE,0,50,1,0,$arialBold,$black,8,0,0);
        
        texto($COLOR,0,65,1,0,$arialBold,$black,8,0,0);
        
        texto($DESCRIPTION,0,81,1,0,$arialBold,$black,8,0,0);
        
        cajaRellena(1,163,147,25,$vicsColor,$vicsColor);
        
        texto($SIZE,0,183,1,0,$arialBold,$black,14,0,0);
        
        perforacion(150, 325, 290);

        if ($PRICE) {
            texto('MSRP', 18, 308, 0, 0, $arialBold, $black, 8, 0, 0);
            texto($PRICE,50,315,0,0,$arialBold,$black,14,0,1);
        }
        
        
         // Creacion del Barcode
        barcode($UPC,11,80,1.1,68,'UPC');
        
        barcodeTexto(3,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
