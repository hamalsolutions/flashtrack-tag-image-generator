<?php                    //     1       2          3          4       5
    $correctos = array('QTY','COLOR','PRICE','DESCRIPTION','STYLE#','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Earth/Rose');
        $PRICE = asignar(2,'20.00');
        $DESCRIPTION = asignar(3,'Dangling Heart Necklace');
        $STYLE = asignar(4,'AC313-290');
        $UPC = asignar(5,'884411849478');
                       
            // Creacion del formato
        formato(200,125,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        if (!empty($PRICE)){
            texto($STYLE,5,20,0,0,$arialNarrow,$black,10,0,0);
            texto($COLOR,0,20,1,0,$arialNarrow,$black,10,0,0);
            texto($PRICE,0,20,2,3,$arialNarrow,$black,10,0,1);
        } else {
            texto($STYLE,5,20,0,0,$arialNarrow,$black,10,0,0);
            texto($COLOR,0,20,2,3,$arialNarrow,$black,10,0,0);
        }
        
        texto($DESCRIPTION,10,35,0,0,$arialNarrow,$black,strlen($DESCRIPTION)>20?9:10,0,0);
        
        texto('OS',175,35,0,0,$arial,$black,9,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6    1 4 5 4 5 1',$UPC),0,115,1,0,$arialBold,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,10,29,1.5,70,'UPC');
        
        require_once('../includes/footer.php');
    }
?>