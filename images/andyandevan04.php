<?php                     //   1     2       3      4
    $correctos = array('QTY','UPC','ITEM','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'885347133761');
        $ITEM = asignar(2,'1518998');
        //$COLOR = asignar(3,'Teal');
        $COLOR = asignar(3,'Teal/Purple/BLK');
        $SIZE = asignar(4,'2T');
        // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(10);
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        // Colores a usar
        $black = color(0,0,0);
        $ITMCLRSZ = 'ITEM# '.$ITEM.'   '.$COLOR.'   '.$SIZE;
        if (strlen($ITMCLRSZ)<28) {
            $ITMCLRSZ = 'ITEM# '.$ITEM.'       '.$COLOR.'       '.$SIZE;
        }

        // Creacion del Barcode
        texto($ITMCLRSZ,0,90,1,0,$arial,$black,8,0,0);
        barcode($UPC,15,10,1.4,50,'UPC');
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
