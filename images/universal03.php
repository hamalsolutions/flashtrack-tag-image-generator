<?php                      //   1       2       3     4      5 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'SUPERMAN WRAPPIE';
            if (empty($campo[2])) $campo[2] = 'BLUE';
            if (empty($campo[3])) $campo[3] = 'OSFM';
            if (empty($campo[4])) $campo[4] = '400012290619';
            if (empty($campo[5])) $campo[5] = '$39.50';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',169);
        define('FORMAT_HEIGHT',300);
        
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
        $logo = FONT_PATH.'Universal_Logo.ttf';
        
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        
        imagettftext($img,55,0,18,88,$text_color,$logo,'U');
        
        imagettftext($img,8.5,0,10,203,empty($campo[1])?$m_text_color:$text_color,$arialBold,empty($campo[1])?$mtext:$campo[1]);
        
        textoParrafo($img,8.5,0,10,220,empty($campo[2])?$m_text_color:$text_color,$arialBold,1,$campo[2],12);
        
        imagettftext($img,12,0,28,240,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,10,0,0,250,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        
        imagettftext($img,16,0,puntoCentrado(empty($campo[5])?$mtext:'$'.$campo[5],16,0),280,empty($campo[5])?$m_text_color:$text_color,$arialBold,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        
        // Generamos el barcode
        $totaly = 175;
        $bartop = 90;
        $barbottom = 0;
        $barleft = 10;
        $barrigth = 2;
        $ancho = 0.3;
        $dientes = 6;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 0.1;
        $textLeft = 5;
        $textTop = 7;
        $numbersFont = 'arial.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[4],'UPC',1.2,'png');
           
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
