<?php                     //    1      2     3      4         5               6 
    $correctos = array('QTY','DEPT','SIZE','UPC','PRICE','DESCRIPTION1','DESCRIPTION2');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'TODDLERS');
        $SIZE = asignar(2,'2T');
        $UPC = asignar(3,'884411935638');
        $PRICE = asignar(4,'$7.00');
        $DESC1 = asignar(5,'Short Sleeve');
        $DESC2 = asignar(6,'THE BOSS TEE');
                
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
         
        // Introducimos los datos
        texto($DEPT,0,30,1,0,$arial,$black,10,90,0);
        
        $PRICE = str_replace(' ','',$PRICE);
        texto($PRICE,0,57,1,0,$arialBold,$black,18,90,1);
        
        $SIZE = str_replace(' ','',$SIZE);
        $x1 = 130;
        $x2 = 148;
        for ($i=0;$i<3;$i++) {
            texto($SIZE,0,$x1,1,0,$arialBold,$black,15,90,0);
            texto($DESC1,0,$x2,1,0,$arial,$black,8,90,0);
            $x1 += 62;
            $x2 += 62;
        }
        
        $fontSize = (strlen($DESC2)>20)?6:7;
        
        texto($DESC2,0,310,1,0,$arialNarrow,$black,$fontSize,90,0);
        
        texto(formatizarTexto('1 2 3 4 5 6 7 8 9 1 1 1',$UPC),338,88,0,0,$arial,$black,7.5,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,87,329,1,62,'UPC',90);
        
        require_once('../includes/footer.php');
    }
?>