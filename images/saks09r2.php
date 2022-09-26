<?php                    //    1      2        3       4     5      6
    $correctos = array('QTY','DEPT','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'914');
        //$STYLE = asignar(2,'F20ST64000');
        $STYLE = asignar(2,'F20ST64000-GRY');
        $COLOR = asignar(3,'ANIMALS');
        //$COLOR = asignar(3,'PURPLE');
        //$COLOR = asignar(3,'GRAY ANIMALS');
        $SIZE = asignar(4,'L (10-12)');
        $UPC = asignar(5,'193467105866');
        $PRICE = asignar(6,'16.99');
        
        // Creacion del formato
        formato(150,100,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);

        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNB = fuente('arialnb.ttf');
        $arial70B = fuente('Arial_70_Bold.ttf');
        $arial60B = fuente('Arial_60_Bold.ttf');

        // Concatebating these fields so that we can change the font size based in the length of the wholw string
        $DepStyColSiz = $DEPT.'    '.$STYLE.'    '.$COLOR.'    '.$SIZE;
        $mCount = strlen($DepStyColSiz);

        if(strlen($DepStyColSiz) <=45) {
            //texto($mCount, 10, 50, 0, 0, $arial, $black, 10, 0, 0);
            texto($DepStyColSiz, 0, 20, 1, 0, $arial70B, $black, 7.5, 0, 0);

        }elseif(strlen($DepStyColSiz) >= 46) {
            //texto($mCount, 10, 50, 0, 0, $arial70B, $black, 10, 0, 0);
            texto($DepStyColSiz, 0, 20, 1, 0, $arial60B, $black, 7.5, 0, 0);
        }
        texto($PRICE,0,92,1,5,$arial,$black,8,0,1);

        // Creacion del Barcode
        barcode($UPC,18,28,1,40,'UPC');
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>