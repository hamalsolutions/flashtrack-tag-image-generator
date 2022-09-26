<?php                      //  1     2          3          4        5      6      7        8         9      10       11
    $correctos = array('QTY','KSN','SIZE','GROUP NAME','FEATURES','UPC','PRICE','DEPT','DEPT NAME','CAT','SUBCAT','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
              // Valores por default para presentar en el formato
        $KSN = asignar(1,'0-42722213-8');
		$SIZE = asignar(2, 'medium');
        $GROUP = asignar(3,'GROUP NAME-15CH');
        $FEATURES = asignar(4,'FEATURES-15CHAR');
        $UPC = asignar(5,'726392385005');
        $PRICE = asignar(6,'46.00');
        $DEPT = asignar(7,'49');
        $DEPT_NAME = asignar(8,'WOMENS');
        $CAT = asignar(9,'71');
        $SUBCAT = asignar(10,'19');
        $SEASON = asignar(11,'3006');
        
            // Creacion del formato
        formato(138,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $swis721Bold = fuente('tt3004m_.TTF');
        $logo = fuente('KmartLogo.ttf');
        
               // Introducimos los datos
        
        texto('K',10,30,0,0,$logo,$red,30,0,0);
        
        texto('KSN: '.$KSN,0,55,1,0,$arial,$black,7,0,0);
        
        texto($DEPT_NAME,0,160,1,0,$arialBold,$black,10,0,0);
        
        texto('DEPT: ',75,176,0,0,$arial,$black,7,0,0);
        texto($DEPT,0,176,2,7,$arial,$black,7,0,0);
        
        texto('CAT: ',75,188,0,0,$arial,$black,7,0,0);
        texto($CAT,0,188,2,7,$arial,$black,7,0,0);
        
        texto('SUBCAT: ',75,200,0,0,$arial,$black,7,0,0);
        texto($SUBCAT,0,200,2,7,$arial,$black,7,0,0);
        
        texto('SEAS: ',75,212,0,0,$arial,$black,7,0,0);
        texto($SEASON,0,212,2,7,$arial,$black,7,0,0);

		texto('SIZE', 120, 24, 0, 0, $arial, $black, 12, 90, 0);

		$SIZE = strtoupper($SIZE);

		$SIZE = str_replace(" ", "", $SIZE);

        if (strstr($SIZE,'('))
        {
            $size1 = substr($SIZE,0,strpos($SIZE,'('));
			texto($size1, 0, 185, 3, 38, $arialBold, $black, 13, 0, 0);
            
            $size2 = substr($SIZE,strpos($SIZE,'('),strlen($SIZE));
			texto($size2, 0, 200, 3, 38, $arialBold, $black, 10, 0, 0);

		} else {

			if ($SIZE == 'SMALL') {
				$SIZE2 = 'S';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);
			} elseif ($SIZE == 'MEDIUM') {
				$SIZE2 = 'M';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} elseif ($SIZE == 'LARGE') {
				$SIZE2 = 'L';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} elseif ($SIZE == 'XLARGE') {
				$SIZE2 = 'XL';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} elseif ($SIZE == 'X LARGE') {
				$SIZE2 = 'XL';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} elseif ($SIZE == 'X-LARGE') {
				$SIZE2 = 'XL';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} elseif ($SIZE == 'XXLARGE') {
				$SIZE2 = 'XXL';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} elseif ($SIZE == 'XX LARGE') {
				$SIZE2 = 'XXL';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} elseif ($SIZE == 'XX-LARGE') {
				$SIZE2 = 'XXL';
				texto($SIZE2, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);

			} else
				texto($SIZE, 0, 190, 3, 38, $arialBold, $black, 13, 0, 0);
		}
		//else
		//    texto($SIZE,0,190,3,30,$arialBold,$black,13,0,0);
            
        texto($GROUP,0,241,1,0,$arialBold,$black,6,0,0);
        
        texto($FEATURES,0,251,1,0,$arialBold,$black,6,0,0);
        
        texto('-- - - - - - - - - - - - - - - --',0,285,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,310,1,0,$arial,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,12,64,1,70,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>