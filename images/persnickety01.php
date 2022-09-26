<?php                      //   1      2       3      4      5
    $correctos = array('QTY','SIZE','DESCRIPTION','CODE128','COLOR','PO');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $SIZE = asignar(1,'18m');
        $DESCRIPTION = asignar(2,'Millie Skirt');
        $CODE128 = asignar(3,'534-1-1-213');
        $COLOR = asignar(4,'Multi');
        $PO = asignar(5,'600435');
                       
            // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        //$arial = fuente('arial.ttf');
        $baskervilleOldFace = fuente('BASKVILL.TTF');
        $logo = fuente('Persnickety_Logo.ttf');
        
        // Introducimos los datos
        setAsSticker(10);
        
        texto('P',0,52,1,0,$logo,$black,49,0,0);
        
        texto($DESCRIPTION,20,80,0,0,$baskervilleOldFace,$black,10,0,0);
        
        texto('Color:',20,93,0,0,$baskervilleOldFace,$black,10,0,0);
        texto($COLOR,60,93,0,0,$baskervilleOldFace,$black,10,0,0);
        
        //texto(formatizarTexto('1  2 3 4 5 6   1 4 5 4 5  1',$UPC),0,90,1,0,$arial,$black,7,0,0);
        texto('Size:',20,106,0,0,$baskervilleOldFace,$black,10,0,0);
        texto($SIZE,50,106,0,0,$baskervilleOldFace,$black,10,0,0);
        
        texto('PO#',20,119,0,0,$baskervilleOldFace,$black,10,0,0);
        texto($PO,50,119,0,10,$baskervilleOldFace,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($CODE128,20,135,1,40,'128');
        barcodeTexto(2, 25, 0, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>