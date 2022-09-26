<?php                      //      1          2      3 
    $correctos = array('QTY','ITEM NUMBER','COLOR','SIZE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '81288';
            if (empty($campo[2])) $campo[2] = 'RED';
            if (empty($campo[3])) $campo[3] = '8/8X';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',100);
        
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
        
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        imagettftext($img,8,0,18,18,$text_color,$arial,'ITEM#     '.$campo[1]);
        
        imagettftext($img,8,0,18,48,$text_color,$arial,'COLOR:  '.$campo[2]);
        
        imagettftext($img,8,0,18,67,$text_color,$arial,'SIZE:       '.$campo[3]);
        
        
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