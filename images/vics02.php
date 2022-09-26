<?php                     //    1       2      3       4      5      6 
    $correctos = array('QTY','ULCLF','ULCLR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'HEATHER GREY';
            if (empty($campo[2])) $campo[2] = '7PL';
            if (empty($campo[3])) $campo[3] = 'SMALL';
            if (empty($campo[4])) $campo[4] = '3LDST137';
            if (empty($campo[5])) $campo[5] = '885347132467';
            if (empty($campo[6])) $campo[6] = '14.99';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',325);
        
        // Creamos la imagen empezando por el escenario:
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Declaramos variables a utilizar en el diseno
                    // Colores
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        $bg_color_s = imagecolorallocate($img, 255, 151, 47);
        $bg_color_m = imagecolorallocate($img, 255, 255, 94);
        $bg_color_l = imagecolorallocate($img, 141, 176, 0);
        $bg_color_xl = imagecolorallocate($img, 164, 164, 255);
        $bg_color_2xl = imagecolorallocate($img, 167, 51, 244);
        
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $m_text_color = imagecolorallocate($img, 255, 0, 0);
        $graphic_color = imagecolorallocate($img, 64, 64, 64);
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        
        $campo[3] = str_replace(" ","",$campo[3]);
        switch($campo[3])
        {
            case 'S':
            case 'SMALL': $bg_size_color = $bg_color_s;
                          break;
            case 'M':
            case 'MEDIUM': $bg_size_color = $bg_color_m;
                          break;
            case 'L':
            case 'LARGE': $bg_size_color = $bg_color_l;
                          break;
            case 'XL':
            case 'XLARGE': $bg_size_color = $bg_color_xl;
                          break;
            case 'XXL':
            case 'XXLARGE': $bg_size_color = $bg_color_2xl;
                          break;
            default: $bg_size_color = $bg_color;
        }
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
        imagefilledrectangle($img,0,175,149,200,$bg_size_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        imagettftext($img,7,0,9,42,empty($campo[4])?$m_text_color:$text_color,$arial,empty($campo[4])?$mtext:$campo[4]);
        
        imagettfJustifytext($img,6,32,empty($campo[1])?$m_text_color:$text_color,$arial,145,FORMAT_HEIGHT,empty($campo[1])?$mtext:$campo[2].'/'.$campo[1]);
        
        imagettfJustifytext($img,15,179,empty($campo[3])?$m_text_color:$text_color,$arialBold,142,FORMAT_HEIGHT,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,10,0,0,290,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        
        imagettfJustifytext($img,13,298,empty($campo[6])?$m_text_color:$text_color,$arialBold,130,FORMAT_HEIGHT,empty($campo[6])?$mtext:'$'.sinSigno($campo[6]));
        
        // Generamos el barcode
        $totaly = 150;
        $bartop = 45;
        $barbottom = 0;
        $barleft = 8;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 0;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 3;
        $textLeft = 4;
        $textTop = 17;
        $numbersFont = 'arial.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[5],'UPC',1.1,'png');
           
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
