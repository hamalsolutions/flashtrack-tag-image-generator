<?php                    //     1        2       3      4     5        6           7         8           9      10      11
    $correctos = array('QTY','SLOGAN','SIZE1','STYLE','UPC','PCS','DESCRIPTION','PRICE','ITEM NUMBER','DESC1','DESC2','SIZE2');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SLOGAN = asignar(1,'Grandpa Rocks');
        $SIZE1 = asignar(2,'One Size Fits All');
        $STYLE = asignar(3,'PLZX7106WG');
        $UPC = asignar(4,'886349001386');
        $PCS = asignar(5,'2-Piece Set');
        $DESCRIPTION = asignar(6,'Licensed Hat & Tee Combo');
        $PRICE = asignar(7,'12.99');
        $ITEM = asignar(8,'511220');
        $DESC1 = asignar(9,'Hat');
        $DESC2 = asignar(10,'Tee');
        $SIZE2 = asignar(11,'L');
                       
            // Creacion del formato
        formato(150,250,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION,8,52,0,0,$arialNarrow,$black,8.5,0,0);
        
        texto($PCS,8,65,0,0,$arialNarrow,$black,8.5,0,0);
        
        texto($SLOGAN,8,80,0,0,$arialNarrow,$black,8.5,0,0);
        
        texto($DESC1.' - '.$SIZE1,5,101,0,0,$arialBold,$black,9,0,0);
        
        texto($DESC2.' - '.$SIZE2,5,115,0,0,$arialBold,$black,9,0,0);
        
        texto('Item#',5,134,0,0,$arialNarrow,$black,8.5,0,0);
        texto($ITEM,30,134,0,0,$arialNarrow,$black,8.5,0,0);
        
        texto($STYLE,0,134,2,5,$arial,$black,8,0,0);
        
        texto($PRICE,0,241,1,0,$arialBold,$black,10,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,129,1.1,68,'UPC');
        
        barcodeTexto(2,0,-2,6,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
