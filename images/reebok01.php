<?php                      //   1     2       3  
    $correctos = array('QTY','STYLE','UPC','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'T01008';
            if (empty($campo[2])) $campo[2] = '400012290619';
            if (empty($campo[3])) $campo[3] = '$28.00';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',125);
        define('FORMAT_HEIGHT',250);
        
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
        
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        
        imagettftext($img,10,0,puntoCentrado($campo[1],10,0),190,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,12,0,puntoCentrado(empty($campo[3])?$mtext:'$'.$campo[3],12,0),235,empty($campo[3])?$m_text_color:$text_color,$arialBold,"\$".sinSigno(empty($campo[3])?$mtext:$campo[3]));
        
        
        // Generamos el barcode
        $totaly = 145;
        $bartop = 87;
        $barbottom = 0;
        $barleft = 2;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 6;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 3;
        $textLeft = 4;
        $textTop = 10;
        $numbersFont = 'arialn.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[2],'UPC',1,'png');
           
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
