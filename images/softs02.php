<?php                    //      1
    $correctos = array('QTY','BARCODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $BARCODE = asignar(1,'8280449X1X1');
            // Creacion del formato
        formato(400,200,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        //$arialNarrow = fuente('arialn.ttf');
       
        // Introducimos los datos
        texto('Soft Surroundings',20,40,0,0,$arial,$black,15,0,0);
        
        // Creacion del Barcode, because the barcode grows or shrinks with the total characters, I kind of measure the total characters
        // in order to have a fairly centered barcode as much as possible

        if (strlen($BARCODE) == 11) {
            $mX = 55;
        } elseif (strlen($BARCODE) == 12) {
            $mX = 48;
        }  elseif (strlen($BARCODE) == 13) {
		    $mX= 38;
	    }   elseif (strlen($BARCODE) == 14) {
			$mX= 32;
		}   elseif (strlen($BARCODE) < 11) {
			$mX = 68;
		}   elseif (strlen($BARCODE) > 14) {
			$mX = 24;
		}

		// texto($mX,20,150,0,0,$arial,$black,8,0,0);
		//barcode($BARCODE,38,40,1.2,90,'39');
        barcode($BARCODE,$mX,60,1.2,90,'39');

		texto('*'.$BARCODE.'*',0,175,1,0,$arial,$black,14,0,0);

        require_once('../includes/footer.php');
    }
?>
