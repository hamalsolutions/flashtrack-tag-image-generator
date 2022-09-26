<?php                      //    1           2         3      4      5      6      7        8      9    10     11      12       13            14          15        16         17      18       19        20       21       22
    $correctos = array('QTY','CATEGORY','DESCRIPTION','DIV','ITEM','SKU','LINE','CLASS','SEASON','UPC','KSN','SIZE','PRICE','COLORBAR','COLORBAR VALUE','RACK','GROUP NAME','COLOR','PIECES','MODIFIER','PIC','WEEK CODE','EGP');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $CATEGORY = asignar(1,'Product Cat 12');
        $DESCRIPTION = asignar(2,'Product Description 18');
        $DIV = asignar(3,'77');
        $ITEM = asignar(4,'12345');
        $SKU = asignar(5,'SKU');
        $LINE = asignar(6,'XX');
        $CLASS = asignar(7,'XXX');
        $SEASON = asignar(8,'S1');
        $UPC = asignar(9,'845550574478');
        $KSN = asignar(10,'12345678-9');
        $SIZE = asignar(11,'SIZEXXXXXXXXX15');
        $PRICE = asignar(12,'$0.00');
        $COLORBAR = asignar(13,'N');
        $COLORBAR_V = asignar(14,'BLANK');
        $RACK = asignar(15,'XX15');
        $GROUP = asignar(16,'Group Name 15');
        $COLOR = asignar(17,'ColorXXXXXXXXXXX20');
        $PIECES = asignar(18,'XXPCS');
        $MODIFIER = asignar(19,'MODIFIERXXXXX15');
        $PIC = asignar(20,'PICXXXX8PIC2XXX8');
        $WEEK = asignar(21,'WC');
        $EGP = asignar(22,'yes');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Sears_Logo_2011.ttf');
        $egp_Logo = fuente('EGP_everyday-great_price_Logo.ttf');
           
            // Introducimos los datos
        
        imageellipse($img,330,60,15,15,$text_color);
        
        texto('S4687U-HT',5,45,0,0,$arial,$black,5.5,270,0);
        
        if (!empty($EGP))
            texto('E',5,71,0,0,$egp_Logo,$black,18,270,0);
        
        texto('S',80,21,0,0,$logo,$black,7,270,0);
        texto('sears.com',80,27,0,0,$arial,$black,5,270,0);
        
        texto($CATEGORY,5,87,0,0,$arial,$black,8,270,0);
        
        texto($GROUP,5,95,0,0,$arial,$black,6,270,0);
        
        texto($DESCRIPTION,5,103,0,0,$arial,$black,6,270,0);
        
        texto($COLOR,5,111,0,0,$arial,$black,6,270,0);
        
        texto($PIC,5,127,0,0,$arial,$black,6,270,0);
        
        texto('KSN#:',5,135,0,0,$arial,$black,6,270,0);
        texto($KSN,30,135,0,0,$arial,$black,6,270,0);
        
        texto('RACK TABLE',5,143,0,0,$arial,$black,6,270,0);
        texto($RACK,57,143,0,0,$arial,$black,6,270,0);
        
        texto($SEASON,5,167,0,0,$arial,$black,6,270,0);
        
        texto($WEEK,5,175,0,0,$arial,$black,6,270,0);
        
        if ($PIECES<>'XXPCS') {
            $PIECES = str_replace(' ','',$PIECES);
            $PIECES = str_replace('PCS','',$PIECES);
            $PIECES = str_replace('PC','',$PIECES);
            if (!empty($PIECES))
                $PIECES .= ($PIECES<>1)?' PCS':' PC';
        }
        texto($PIECES,5,183,0,0,$arialBold,$black,6,270,0);
        
        texto('D',5,191,0,0,$arial,$black,6,270,0);
        $DIV = substr($DIV,0,1) == 'D'?substr($DIV,1):$DIV;
        texto($DIV,11,191,0,0,$arial,$black,6,270,0);
        
        texto('M',5,199,0,0,$arial,$black,6,270,0);
        $ITEM = substr($ITEM,0,1) == 'M'?substr($ITEM,1):$ITEM;
        texto($ITEM,11,199,0,0,$arial,$black,6,270,0);
        
        texto($SKU,5,207,0,0,$arial,$black,6,270,0);
        
        texto('Line',5,215,0,0,$arial,$black,7,270,0);
        texto($LINE,25,215,0,0,$arial,$black,6,270,0);
        
        texto('CLS',5,223,0,0,$arial,$black,6,270,0);
        texto($CLASS,25,223,0,0,$arial,$black,6,270,0);
        
        texto($SIZE,0,295,1,0,$arialBold,$black,9,270,0);
        
        texto($MODIFIER,0,308,1,0,$arialBold,$black,9,270,0);
        
        texto('-- - - - - - - - - - - - - --',0,320,1,0,$arial,$black,9,270,0);
        
        texto($PRICE,0,343,1,0,$arialBold,$black,14,270,1);        
        
        
        // Creacion del Barcode
        barcode($UPC,70,265,1,35,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
