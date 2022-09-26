<?php                      //   1      2      3      4       5
    $correctos = array('QTY','COLOR','SIZE','UPC','STYLE','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'LODEN';
            if (empty($campo[2])) $campo[2] = 'M';
            if (empty($campo[3])) $campo[3] = '664233104432';
            if (empty($campo[4])) $campo[4] = 'OKWL-1471';
            if (empty($campo[5])) $campo[5] = '19.99';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',275);
        
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
        //$abadiBold = FONT_PATH.'abadiB.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $ocrb = FONT_PATH.'OCR-B_SB.ttf';
        
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        imagettftext($img,7.5,0,20,42,$text_color,$arial,"STYLE:");        
        imagettftext($img,7.5,0,62,42,empty($campo[4])?$m_text_color:$text_color,$arial,empty($campo[4])?$mtext:$campo[4]);
        
        imagettftext($img,7.5,0,20,68,$text_color,$arial,"SIZE:");        
        imagettftext($img,7.5,0,62,68,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);
        
        imagettftext($img,7.5,0,20,92,$text_color,$arial,"COLOR:");
        if (strlen($campo[1])>10)
            $colorSize = 5.5;
        else
            $colorSize = 7.5;
        imagettftext($img,$colorSize,0,62,92,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,8,0,16,197,$text_color,$ocrb,formatizarTexto('1   23456   78901   2',$campo[3]));
        
        //imagettftext($img,18,0,puntoCentrado(empty($campo[5])?$mtext:'$'.$campo[5],18,0),250,empty($campo[5])?$m_text_color:$text_color,$arialBold,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        
        // Generamos el barcode
        $totaly = 185;
        $bartop = 109;
        $barbottom = 0;
        $barleft = 8;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 0;
        // Si se requiere introducir texto
        $withText= FALSE;
        $textSize = 3;
        $textLeft = 4;
        $textTop = 17;
        $numbersFont = 'OCR-B_SB.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[3],'UPC',1.1,'png');
           
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
