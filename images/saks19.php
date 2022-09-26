<?php                    //    1       2       3      4      5     6       7       8
    $correctos = array('QTY','DEPT','STYLE','COLOR','SIZE','UPC','MSRP','PRICE','SAVINGS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'926');
        $STYLE = asignar(2,'S16-5002B');
        $COLOR = asignar(3,'BONE');
        $SIZE = asignar(4,'2');
        $UPC = asignar(5,'828605668629');
        $MSRP = asignar(6,'$400.00');
        $PRICE = asignar(7,'199.00');
        $SAVINGS = asignar(8,'50% SAVINGS');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        $arialN = fuente('arialn.ttf');

        // Introducimos los datos

        texto($DEPT,10,20,0,0,$arial,$black,6,0,0);

        $StyleColor = $STYLE.'  '.$COLOR;

        texto($StyleColor,14,18,3,8,$arial,$black,6,0,0);
        
        texto($SIZE,0,18,2,10,$arial,$black,6,0,0);
        
        texto('MARKET PRICE',0,96,1,0,$arial,$black,6,0,0);
        
        texto($MSRP,0,108,1,0,$arialBoldSlash,$black,8,0,1);
        
        texto('YOU PAY',0,120,1,0,$arial,$black,7,0,0);
        
        texto($PRICE,0,133,1,0,$arialBold,$black,9,0,1);
        //$Saving = trim($SAVINGS,' ');
        $Saving = strtolower(str_replace(' ','',$SAVINGS));
        $Saving = str_replace('savings',' Savings',$Saving);
        texto($Saving,0,145,1,0,$arialBold,$black,7,0,0);
        
       // texto(formatizarTexto('1    23456   78901    2',$UPC),0,176,1,0,$arial,$black,9,0,0);
        
         // Creacion del Barcode
        barcode($UPC,12,24,1.1,48,'UPC');
        barcodeTexto(2,-1,1,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
