<?php                  //       1      2       3         4          5
    $correctos = array('QTY','COLOR','SIZE','STYLE','DESCRIPTION','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'EGRET BLACK');
        $SIZE = asignar(2,'M');
        $STYLE = asignar(3,'4726CA398ST');
        $DESCRIPTION = asignar(4,'GEO PRINT SHIFT');
        //$DESCRIPTION = asignar(4,'GEO PRINT SHIFT HHHHHHHH');
        $UPC = asignar(5,'849568061210');

        // Creacion del formato
        formato(200,200,255,255,255);
        setAsSticker(13);
            // Colores a usar
        $black = color(0,0,0);

            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialN = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');

            // Introducimos los datos
        texto('MACY\'S',0,26,1,0,$arialBold,$black,12,0,0);
        texto($STYLE,15,45,0,0,$arial,$black,10,0,0);

		if (strlen($DESCRIPTION) > 23) {
            texto($DESCRIPTION, 15, 62, 0, 0, $arialN, $black, 10.5, 0, 0);
        } else {
			texto($DESCRIPTION, 15, 62, 0, 0, $arial, $black, 10, 0, 0);
		}

        texto($COLOR,15,78,0,0,$arial,$black,10,0,0);
        texto($SIZE,15,93,0,0,$arial,$black,10,0,0);

        // Creacion del Barcode
        barcode($UPC,20,83,1.3,90,'UPC');
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
