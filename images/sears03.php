<?php                      //   1       2      3          4         5      6      7       8      9      10       11        12     13      14     
    $correctos = array('QTY','COLOR','ITEM#','SIZE','DESCRIPTION','UPC','PRICE','DEPT','CLASS','DIV','SEASON','SIZECODE','LINE','DEPT#','STYLE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'DENIM');
        $ITEM = asignar(2,'26680');
        $SIZE = asignar(3,'M');
        $DESCRIPTION = asignar(4,'JIMMY');
        $UPC = asignar(5,'884411975290');
        $PRICE = asignar(6,'36.00');
        $DEPT_NAME = asignar(7,'MEN\'S');
        $CLASS = asignar(8,'084');
        $DIV = asignar(9,'43');
        $SEASON = asignar(10,'1456');
        $SIZECODE = asignar(11,'003');
        $LINE = asignar(12,'01');
        $DEPT_NUM = asignar(13,'41');
        $STYLE = asignar(14,'3LMSW002');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('SearsLogo.ttf');
        
            // Introducimos los datos
        
        imageellipse($img,325,60,15,15,$black);
        
        texto('A',70,50,0,0,$logo,$black,13,270,0);
        
        texto('www.sears.com',65,55,0,0,$arial,$black,5,270,0);
        
        
        texto($DEPT_NAME,10,72,0,0,$arialBold,$black,9,270,0);
        
        texto($DESCRIPTION,10,85,0,0,$arial,$black,8,270,0);
        
        texto($COLOR,10,105,0,0,$arial,$black,8,270,0);
        
        texto($SEASON,10,127,0,0,$arial,$black,9,270,0);
        
        texto($STYLE,10,140,0,0,$arial,$black,8,270,0);
        
        texto($ITEM,10,154,0,0,$arial,$black,8,270,0);
        
        texto($DEPT_NUM,10,166,0,0,$arial,$black,8,270,0);
        
        texto($SIZECODE,10,179,0,0,$arial,$black,8,270,0);
        
        texto('LINE',10,190,0,0,$arial,$black,8,270,0);
        texto($LINE,35,190,0,0,$arial,$black,8,270,0);
        
        texto('CLS',10,202,0,0,$arial,$black,8,270,0);
        texto($CLASS,35,202,0,0,$arial,$black,8,270,0);
        
        texto('DIV',10,215,0,0,$arial,$black,8,270,0);
        texto($DIV,30,215,0,0,$arial,$black,8,270,0);
        
        texto($SIZE,0,253,3,50,$arial,$black,16,270,0);
        
        texto($DEPT_NAME,0,280,1,0,$arialBold,$black,12,270,0); 
        
        
        texto('-- - - - - - - - - - - - - --',0,310,1,0,$arial,$black,9,270,0);
        
        texto($PRICE,0,335,1,0,$arialBold,$black,14,270,1);
        
         // Creacion del Barcode
        barcode($UPC,70,250,1,35,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>