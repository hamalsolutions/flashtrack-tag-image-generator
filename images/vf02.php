<?php                      //      1          2       3     4          5          6
    $correctos = array('QTY','DESCRIPTION','STYLE','SIZE','UPC','COMPARE PRICE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'Screenprint Tee');
        $STYLE = asignar(2,'39902RT');
        $SIZE = asignar(3,'XXL');
        $UPC = asignar(4,'051071572330');
        $COMPARE = asignar(5,'$28.00');
        $PRICE = asignar(6,'$14.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $blue = color(0, 0, 255);
        $yellow = color(255, 187, 119);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $cordiaBold = fuente('cordiab.ttf');
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto('C-LIFE',0,50,1,0,$cordiaBold,$black,20,0,0);
        
        //parrafo($DESCRIPTION,0,45,1,0,$arial,$black,9,0,12,12);
        texto($DESCRIPTION,0,65,1,0,$arial,$black,9,0,0);
        
        texto('Style '.$STYLE,0,80,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,105,1,0,$arialBold,$black,14,0,0);
        
        texto(formatizarTexto('1    2 3 4 5 6   2 3 4 5 6    2',$UPC),0,190,1,0,$arial,$black,8.5,0,0);
        
        texto('Compare at:',10,210,0,0,$arial,$black,7,0,0);
        
        texto($COMPARE,40,228,0,0,$arial,$black,8,0,1);
        
        texto('You Pay :',10,254,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,30,280,0,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,4,79,1.4,95,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
