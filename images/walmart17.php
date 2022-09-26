<?php                     //    1      2       3      4      5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','D/S/F','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CHOCOLATE');
        $SIZE = asignar(2,'S/C - 3/5');
        $STYLE = asignar(3,'WRD-2164R');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'7.00');
        $DSF = asignar(6,'24002424');
        $SEASON = asignar(7,'01-06');
        
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $abadiBold = fuente('abadiB.ttf');
        
        // Introducimos los datos
        
        texto($PRICE,0,25,1,0,$abadiBold,$black,20,90,1);
        
        $yPos = 60;
        for($i=1;$i<=4;$i++){
            texto($SIZE,0,$yPos,1,0,$abadiBold,$black,10,90,0);
            $yPos += 59;
        }
        
        imageline($img,247,5,247,95,$black);
        imageline($img,248,5,248,95,$black);
        
        texto('The print process on this',0,258,1,0,$arialNarrow,$black,7,90,0);
        texto('garment is unique.',0,267,1,0,$arialNarrow,$black,7,90,0);
        texto('All variations are part',0,276,1,0,$arialNarrow,$black,7,90,0);
        texto('of the manufacturing',0,285,1,0,$arialNarrow,$black,7,90,0);
        texto('process and are intended',0,294,1,0,$arialNarrow,$black,7,90,0);
        texto('to make thisgarment',0,303,1,0,$arialNarrow,$black,7,90,0);
        texto('one of-a-kind',0,312,1,0,$arialNarrow,$black,7,90,0);
        
        imageline($img,314,5,314,95,$black);
        imageline($img,315,5,315,95,$black);
        
        texto($DSF,323,15,0,0,$arial,$black,7,0,0);
        
        texto($SEASON,323,27,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,373,15,0,0,$arial,$black,7,0,0);
        
        texto($STYLE,373,27,0,0,$arial,$black,7,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,323,1,43,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>