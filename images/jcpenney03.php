<?php                      //   1       2     3     4        5   
    $correctos = array('QTY','COLOR','SIZE','SKU','CAT#','SUPPLIER');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'HOT PINK';
            if (empty($campo[2])) $campo[2] = 'SMALL';
            if (empty($campo[3])) $campo[3] = '0133';
            if (empty($campo[4])) $campo[4] = '632-9006';
            if (empty($campo[5])) $campo[5] = '10433-1';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',200);
        define('FORMAT_HEIGHT',150);
        
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
        imagettftext($img,25,0,puntoCentrado(empty($campo[4])?$mtext:$campo[4],25,0),38,empty($campo[4])?$m_text_color:$text_color,$arialBold,empty($campo[4])?$mtext:$campo[4]);        
        
        imagettftext($img,25,0,puntoCentrado(empty($campo[3])?$mtext:$campo[3],25,0),68,empty($campo[3])?$m_text_color:$text_color,$arialBold,empty($campo[3])?$mtext:$campo[3]);
        
        imageline($img,0,75,200,75,$text_color);
        imageline($img,0,76,200,76,$text_color);
        
        imagettftext($img,9,0,12,105,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);
        imagettfJustifytext($img,9,93,empty($campo[1])?$m_text_color:$text_color,$arial,195,150,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,13,0,puntoCentrado(empty($campo[5])?$mtext:$campo[5],13,0),135,empty($campo[5])?$m_text_color:$text_color,$arialBold,empty($campo[5])?$mtext:$campo[5]);

        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 0;
        
        $img = rotar($img,$anguloDeRotacion);
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
