<?php                      //   1       2       3       4      5     6       7     8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','COO');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'BLACK';
            if (empty($campo[2])) $campo[2] = 'M';
            if (empty($campo[3])) $campo[3] = 'YBAK-029';
            if (empty($campo[4])) $campo[4] = '885347090125';
            if (empty($campo[5])) $campo[5] = '14.99';
            if (empty($campo[6])) $campo[6] = '15';
            if (empty($campo[7])) $campo[7] = '3';
            if (empty($campo[8])) $campo[8] = 'US';
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
        $timesNewRomanBold = FONT_PATH.'timesbd.ttf';
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        imagettftext($img,12,0,30,50,$text_color,$arial,"GANDER MTN.");        
        
        imagettftext($img,8,0,75,67,$text_color,$arial,"SIZE");        
        imagettftext($img,13,0,puntoCentrado($campo[2],13,0),84,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);        
        
        imagettftext($img,8,0,15,95,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,8,0,15,111,$text_color,$arial,'STYLE#');
        imagettftext($img,8,0,63,111,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,9,0,17,126,empty($campo[6])||empty($campo[7])||empty($campo[8])?$m_text_color:$text_color,$arial,empty($campo[6])||empty($campo[7])||empty($campo[8])?$mtext:'  '.$campo[6]."             ".$campo[7]."           ".$campo[8]);
        imagettftext($img,9,0,17,140,$text_color,$arial,"DEPT         CL        COO");
        
        imagettftext($img,15,0,puntoCentrado('$'.$campo[5],15,0),285,empty($campo[5])?$m_text_color:$text_color,$arial,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        
        // Generamos el barcode
        $totaly = 205;
        $bartop = 113;
        $barbottom = 0;
        $barleft = 8;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 5;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 2.5;
        $textLeft = 1;
        $textTop = 14;
        $numbersFont = 'arial.ttf';
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 0;
        
        require("php-barcode.php");
           barcode_print($campo[4],'UPC',1.3,'png');
           
        $img = rotar($img,$anguloDeRotacion);
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>