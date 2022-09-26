<?php                       //  1     2     3       4          5
    $correctos = array('QTY','ITEM','UPC','SIZE','PACKS','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
		$ITEM = asignar(1, '585279477');
		$UPC = asignar(2, '013244474285');
		$SIZE = asignar(3, '');
		$PACKS = asignar(4, '1');
        $DESCRIPTION = asignar(5, 'PLAYSTATION LOGO QT PANT-2XL');
                       
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
		$arialNB = fuente('arialnb.ttf');
        $arial70B = fuente('Arial_70_Bold.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
		$WMITEM = 'WM ITEM# ' . $ITEM;

        if (strlen($WMITEM) < 19) {
			texto($WMITEM, 0, 20, 1, 0, $arialBold, $black, 12, 0, 0);
		} else {
			texto($WMITEM, 0, 20, 1, 0, $arialNB, $black, 10, 0, 0);
		}

        if (strlen($DESCRIPTION) < 20) {
			texto($DESCRIPTION, 0, 45, 1, 0, $arial, $black, 12, 0, 0);
		} else {
			texto($DESCRIPTION, 0, 45, 1, 0, $arial70B, $black, 12, 0, 0);
		}

		texto('PACK SIZE: ' . $PACKS, 0, 70, 1, 0, $arialBold, $black, 12, 0, 0);
        
        
        // Creacion del Barcode
        barcode($UPC,10,55,1.5,78,'UPC');
        
        barcodeTexto(1,-1,-2,6,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>