<?php                      //   1      2       3      4      5      6       7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','ITEM');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'YELLOW';
            if (empty($campo[2])) $campo[2] = 'XL';
            if (empty($campo[3])) $campo[3] = '2YDME031TF';
            if (empty($campo[4])) $campo[4] = '885347090125';
            if (empty($campo[5])) $campo[5] = '18.00';
            if (empty($campo[6])) $campo[6] = '0033';
            if (empty($campo[7])) $campo[7] = '013';
            if (empty($campo[8])) $campo[8] = '3531';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',125);
        define('FORMAT_HEIGHT',238);
        
        // Creamos la imagen empezando por el escenario:
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Declaramos variables a utilizar en el diseno
                    // Colores
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $m_text_color = imagecolorallocate($img, 255, 0, 0);
        $graphic_color = imagecolorallocate($img, 64, 64, 64);
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $timesNewRomanBold = FONT_PATH.'timesbd.ttf';
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        imagettftext($img,9,0,50,27,$text_color,$arial,"SIZE");        
        imagettftext($img,14,0,puntoCentrado($campo[2],14,0),45,empty($campo[2])?$m_text_color:$text_color,$timesNewRomanBold,empty($campo[2])?$mtext:$campo[2]);        
        
        imagettftext($img,8,0,puntoCentradoEnSeccion($campo[6],7,1,55),83,empty($campo[6])?$m_text_color:$text_color,$arial,empty($campo[6])?$mtext:$campo[6]);
        
        imagettftext($img,8,0,puntoCentrado($campo[7],8,1),83,empty($campo[7])?$m_text_color:$text_color,$arial,empty($campo[7])?$mtext:$campo[7]);
        
        imagettftext($img,8,0,puntoCentradoEnSeccion($campo[8],7,1,200),83,empty($campo[8])?$m_text_color:$text_color,$arial,empty($campo[8])?$mtext:$campo[8]);
        
        imagettftext($img,6,0,17,93,$text_color,$arial,"DEPT         CL           ITEM");
        
        strlen($campo[3])>10?$margen=5:$margen=0;
        
        imagettftext($img,7,0,(15-$margen),70,$text_color,$arial,'STYLE#');
        imagettftext($img,7,0,(53-$margen),70,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        if (strlen($campo[1]) < 14)
            imagettftext($img,9,0,(15-$margen),60,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        else
            imagettftext($img,8,0,(15-$margen),60,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,8,0,18,149,$text_color,$arial,formatizarTexto('12  345  67  8901  2',$campo[4]));
        
        imagettftext($img,14,0,puntoCentrado('$'.$campo[5],14,0),195,empty($campo[5])?$m_text_color:$text_color,$arial,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
           
        
        // Generamos el barcode
        $totaly = 135;
        $bartop = 97;
        $barbottom = 0;
        $barleft = 7;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 0;
        // Si se requiere introducir texto
        $withText= FALSE;
        $textSize = 2;
        $textLeft = 1;
        $textTop = 8;
        $numbersFont = 'cour.ttf';
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 0;
        
        require("php-barcode.php");
           barcode_print($campo[4],'UPC',1,'png');
           
        $img = rotar($img,$anguloDeRotacion);
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
