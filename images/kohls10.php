<?php                      //   1      2       3          4
    $correctos = array('QTY','COLOR','SIZE','STYLE','GRAPHIC NAME');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
        	// Valores por default para presentar una imagen
        	if (empty($campo[1])) $campo[1] = 'NAVY';
        	if (empty($campo[2])) $campo[2] = 'MEDIUM';
        	if (empty($campo[3])) $campo[3] = 'WRD-039';
            if (empty($campo[4])) $campo[4] = 'NOT SO FUN SIZE';
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
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$text_color);
        
        
        // Introducimos los datos
        imagettftext($img,18,0,40,60,$text_color,$arialBold,"KOHL'S");        
        
        imagettftext($img,7,0,69,100,$text_color,$arial,'STYLE');
        imagettftext($img,7,0,puntoCentrado($campo[3],7,1),111,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,8,0,25,130,$text_color,$arial,'COLOR');
        imagettftext($img,7.5,0,75,130,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,8,0,70,149,$text_color,$arial,'SIZE');
        imagettftext($img,8,0,puntoCentrado($campo[2],8,1),162,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);
        
        imagettftext($img,11,0,52,185,$text_color,$arialBold,'2 PC SET');
        
        imagettftext($img,8,0,puntoCentrado($campo[4],8,1),210,empty($campo[4])?$m_text_color:$text_color,$arial,empty($campo[4])?$mtext:$campo[4]);
        
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
