<?php                    //    1        2     3     4       5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'RED HEATHER';
            if (empty($campo[2])) $campo[2] = 'MEDIUM';
            if (empty($campo[3])) $campo[3] = 'WRD-515';
            if (empty($campo[4])) $campo[4] = '845550015292';
            if (empty($campo[5])) $campo[5] = '17.99';
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
        $tahomaBold = FONT_PATH.'tahomabd.ttf';
        $timesNewRomanBold = FONT_PATH.'timesbd.ttf';
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        
        imagettftext($img,12,0,20,98,empty($campo[3])?$m_text_color:$text_color,$tahomaBold,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,9.5,0,20,120,$text_color,$tahomaBold,"COLOR");
        if (strlen($campo[1])<11)
            imagettfJustifytext($img,9,109,empty($campo[1])?$m_text_color:$text_color,$tahomaBold,FORMAT_WIDTH-15,FORMAT_HEIGHT,empty($campo[1])?$mtext:$campo[1]);
        else
            imagettfJustifytext($img,8,110,empty($campo[1])?$m_text_color:$text_color,$tahomaBold,FORMAT_WIDTH-5,FORMAT_HEIGHT,empty($campo[1])?$mtext:$campo[1]);
            
        imageline($img,0,125,168,125,$text_color);
        
        imagettftext($img,9,0,20,232,$text_color,$tahomaBold,"SIZE");
        imagettftext($img,10,0,60,232,empty($campo[2])?$m_text_color:$text_color,$arialBold,empty($campo[2])?$mtext:$campo[2]);
        
        imagettftext($img,16,0,puntoCentrado(empty($campo[5])?$mtext:'$'.$campo[5],16,0),285,empty($campo[5])?$m_text_color:$text_color,$arial,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        
        // Generamos el barcode
        $totaly = 200;
        $bartop = 145;
        $barbottom = 0;
        $barleft = 25;
        $barrigth = 2;
        $ancho = 0.1;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 4.5;
        $textLeft = 0;
        $textTop = 12;
        $numbersFont = 'arial.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[4],'UPC',1,'png');
           
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
