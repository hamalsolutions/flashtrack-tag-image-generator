<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','GROUP NAME');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HEATHER GREY');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'3LDST137');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'14.99');
        $GROUP = asignar(6,'Group Name');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('oneclothing.ttf');
        
        // Introducimos los datos
        
        texto('A',0,55,1,0,$logo,$black,30,0,0);
        
        texto($STYLE,9,67,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,67,2,5,$arial,$black,7,0,0);
        
        cajaRellena(1,155,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,175,2,5,$arialBold,$black,15,0,0);
        
        texto($GROUP,0,220,1,0,$arialBold,$black,10,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,280,1,0,$arial,$black,10,0,0);
        
        texto('MSRP $'.sinSigno($PRICE),0,300,1,0,$arial,$black,14,0,0);
        
        
         // Creacion del Barcode
        barcode($UPC,10,70,1.1,60,'UPC');
        
        barcodeTexto(3,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
