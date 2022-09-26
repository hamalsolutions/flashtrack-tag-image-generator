<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
		//$COLOR = asignar(1,'BLUE');
		$COLOR = asignar(1, 'MARINE TEAL HEATHER');
        $SIZE = asignar(2,'S');
		$STYLE = asignar(3, '19F4254J-78');
        $UPC = asignar(4,'000123456784');
        $PRICE = asignar(5,'12');
                       
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $red = color(255,0,0);
        $vicsColor = colorVic($SIZE);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
		$arial70B = fuente('Arial_70_Bold.ttf');
        $arialBold = fuente('arialbd.ttf');
        //$tradeGothic = fuente('TradeGotBolConTwe.ttf');
        $tradeGothic = fuente('tradegothicltstdbold.ttf');
        $logo = fuente('vicsLogos.ttf');
        
        // Introducimos los datos
        
        texto('Z',0,75,1,0,$logo,$black,65,0,0);
        
        imagefilledellipse($img,75,30,15,15,$transparent);
        imageellipse($img,75,30,15,15,$gray);

		if (strlen($STYLE) > 6) {
			texto($STYLE, 9, 125, 0, 0, $arial70B, $black, 8, 0, 0);
		} else {
			texto($STYLE, 9, 125, 0, 0, $tradeGothic, $black, 8, 0, 0);
		}


		if (strlen($COLOR) > 16) {
			texto($COLOR, 0, 125, 2, 5, $arial70B, $black, 8, 0, 0);
		} else {
			texto($COLOR, 0, 125, 2, 5, $tradeGothic, $black, 8, 0, 0);
		}

        
        cajaRellena(1,235,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,257,1,0,$arialBold,$black,19,0,0);
        
        perforacion(150, 400, 369);
        
        texto('$',52,390,0,0,$tradeGothic,$black,12,0,0);
        texto($PRICE,0,394,1,0,$tradeGothic,$black,18,0,-1);
        
         // Creacion del Barcode
        barcode($UPC,11,123,1.1,90,'UPC');
        
        barcodeTexto(2,-1,-5,6,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
