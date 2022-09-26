<?php                      //  1     2          3         4      5      6      7      8        9
    $correctos = array('QTY','SKU','SIZE','DESCRIPTION','UPC','PRICE','DEPT','CAT','SUBCAT','SEASON');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '0-42722213-8';
            if (empty($campo[2])) $campo[2] = 'S(6/7)';
            if (empty($campo[3])) $campo[3] = 'HOTWHEELS S/S';
            if (empty($campo[4])) $campo[4] = '726392385005';
            if (empty($campo[5])) $campo[5] = '46.00';
            if (empty($campo[6])) $campo[6] = '49';
            if (empty($campo[7])) $campo[7] = '71';
            if (empty($campo[8])) $campo[8] = '19';
            if (empty($campo[9])) $campo[9] = '3006';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',138);
        define('FORMAT_HEIGHT',325);
        
        // Creamos la imagen empezando por el escenario:
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Declaramos variables a utilizar en el diseno
                    // Colores
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $m_text_color = imagecolorallocate($img, 255, 0, 0);
        $graphic_color = imagecolorallocate($img, 255, 0, 0);
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $swis721Bold = FONT_PATH.'tt3004m_.TTF';
        $logo_font = FONT_PATH.'KmartLogo.ttf';
        
           
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$text_color);
        
        
        // Introducimos los datos
        imagettftext($img,30,0,10,30,$graphic_color,$logo_font,"K");
        
        imagettftext($img,7,0,30,48,$text_color,$arialBold,"SKU: ");
        imagettftext($img,7,0,55,48,empty($campo[1])?$m_text_color:$text_color,$swis721Bold,empty($campo[1])?'NO VALUE':$campo[1]);                
        
        imagettftext($img,7,0,75,176,$text_color,$arialBold,"DEPT:");
        imagettfJustifytext($img,7,167,empty($campo[6])?$m_text_color:$text_color,$arialBold,FORMAT_WIDTH-8,FORMAT_HEIGHT,empty($campo[6])?$mtext:$campo[6]);
        
        imagettftext($img,7,0,75,188,$text_color,$arialBold,"CAT:");
        imagettfJustifytext($img,7,179,empty($campo[7])?$m_text_color:$text_color,$arialBold,FORMAT_WIDTH-8,FORMAT_HEIGHT,empty($campo[7])?$mtext:$campo[7]);
        
        imagettftext($img,7,0,75,200,$text_color,$arialBold,"SUBCAT:");
        imagettfJustifytext($img,7,191,empty($campo[8])?$m_text_color:$text_color,$arialBold,FORMAT_WIDTH-8,FORMAT_HEIGHT,empty($campo[8])?$mtext:$campo[8]);
        
        imagettftext($img,7,0,75,212,$text_color,$arialBold,"SEAS:");
        imagettfJustifytext($img,7,203,empty($campo[9])?$m_text_color:$text_color,$arialBold,FORMAT_WIDTH-8,FORMAT_HEIGHT,empty($campo[9])?$mtext:$campo[9]);
                
        imagettftext($img,12,90,28,200,$text_color,$arial,"SIZE");
        if (strstr($campo[2],'('))
        {
            $size1 = substr($campo[2],0,strpos($campo[2],'('));
            imagettftext($img,13,0,puntoCentradoEnSeccion(empty($size1)?$mtext:$size1,13,0,100),185,empty($size1)?$m_text_color:$text_color,$arialBold,empty($size1)?$mtext:$size1);
            $size2 = substr($campo[2],strpos($campo[2],'('),strlen($campo[2]));
            imagettftext($img,10,0,puntoCentradoEnSeccion(empty($size2)?$mtext:$size2,10,0,100),200,empty($size2)?$m_text_color:$text_color,$arialBold,empty($size2)?$mtext:$size2);
        }
        else
            imagettftext($img,13,0,puntoCentradoEnSeccion(empty($campo[2])?$mtext:$campo[2],13,0,100),190,empty($campo[2])?$m_text_color:$text_color,$arialBold,empty($campo[2])?$mtext:$campo[2]);
        
        imagettftext($img,8,0,48,250,$text_color,$arialBold,'"MENS"');
        
        $campo[3] = stripslashes($campo[3]);
        imagettftext($img,6,0,puntoCentrado(empty($campo[3])?'NO VALUE':$campo[3],6,1),261,empty($campo[3])?$m_text_color:$text_color,$arialBold,empty($campo[3])?'NO VALUE':$campo[3]);
        
        imagettftext($img,10,0,0,285,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        
        imagettftext($img,12,0,puntoCentrado(empty($campo[5])?$mtext:'$'.$campo[5],12,0),310,empty($campo[5])?$m_text_color:$text_color,$arial,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        
        // Generamos el barcode
        $totaly = 105;
        $bartop = 55;
        $barbottom = 0;
        $barleft = 12;
        $barrigth = 2;
        $ancho = 0.1;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 2;
        $textLeft = 1;
        $textTop = 8;
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
