<?php                     //    1      2       3      4      5      6      7       8            9               10              11            12              13           14
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','SUB','FINELINE','DESCRIP2-ENGL','DESCRIP2-SPAN','DESCRIPTION','REPLENISHMENT','SECURITY CODE','SEASON');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'CHOCOLATE';
            if (empty($campo[2])) $campo[2] = 'L/G (11-13)';
            if (empty($campo[3])) $campo[3] = 'WRD-2164R';
            if (empty($campo[4])) $campo[4] = '884411935638';
            if (empty($campo[5])) $campo[5] = '$7.00';
            if (empty($campo[6])) $campo[6] = '24';
            if (empty($campo[7])) $campo[7] = '00';
            if (empty($campo[8])) $campo[8] = '2424';
            if (empty($campo[9])) $campo[9] = 'SHORT SLEEVE';
            if (empty($campo[10])) $campo[10] = 'MANGA CORTA';
            if (empty($campo[11])) $campo[11] = 'GROUCHY TEE';
            if (empty($campo[12])) $campo[12] = 'WSDSC';
            if (empty($campo[13])) $campo[13] = 'A590031595373';
            if (empty($campo[14])) $campo[14] = '01-06';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',450);
        define('FORMAT_HEIGHT',100);
        
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
        $MyriadProBold = FONT_PATH.'MyriadPro-Bold.otf';
        $MyriadPro = FONT_PATH.'MyriadPro-Regular.otf';
        
           
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$text_color);
        
        // Introducimos los datos
        
        $campo[5] = str_replace(' ','',$campo[5]);
        if (strpos($campo[5],'.'))
            if (substr($campo[5],strpos($campo[5],'.'),2) == 0)
                $campo[5] = substr($campo[5],0,strpos($campo[5],'.'));
        imagettftext($img,19,90,42,100-puntoCentrado270(empty($campo[5])?$mtext:'$'.sinSigno($campo[5]),18,0),empty($campo[5])?$m_text_color:$text_color,$MyriadProBold,empty($campo[5])?'':'$'.sinSigno($campo[5]));
        
        $campo[2] = str_replace(' ','',$campo[2]);
        $size1 = substr($campo[2],0,strpos($campo[2],'('));
        $size2 = substr($campo[2],strpos($campo[2],'('),strpos($campo[2],')'));
        
        if (strlen($size1 < 4))
            if ($size1 == 'M')
                $centeredFont = 22;
            else
                $centeredFont = 15;
        else
            $centeredFont = 13;
        
        imagettftext($img,12,90,90,100-puntoCentrado270(empty($size1)?$mtext:$size1,$centeredFont,0),empty($size1)?$m_text_color:$text_color,$MyriadProBold,empty($size1)?'N/A':$size1);
        imagettftext($img,12,90,105,100-puntoCentrado270(empty($size2)?$mtext:$size2,13,0),empty($size2)?$m_text_color:$text_color,$MyriadProBold,empty($size2)?'N/A':$size2);
        
        imagettftext($img,8,90,135,100-puntoCentrado270(empty($campo[9])?$mtext:$campo[9],7,1),empty($campo[9])?$m_text_color:$text_color,$MyriadProBold,empty($campo[9])?'N/A':$campo[9]);
        imagettftext($img,8,90,145,100-puntoCentrado270(empty($campo[10])?$mtext:$campo[10],8,1),empty($campo[10])?$m_text_color:$text_color,$MyriadProBold,empty($campo[10])?'N/A':$campo[10]);
        
        imagettftext($img,12,90,185,100-puntoCentrado270(empty($size1)?$mtext:$size1,$centeredFont,0),empty($size1)?$m_text_color:$text_color,$MyriadProBold,empty($size1)?'N/A':$size1);
        imagettftext($img,12,90,200,100-puntoCentrado270(empty($size2)?$mtext:$size2,13,0),empty($size2)?$m_text_color:$text_color,$MyriadProBold,empty($size2)?'N/A':$size2);
        
        imagettftext($img,8,90,230,100-puntoCentrado270(empty($campo[9])?$mtext:$campo[9],7,1),empty($campo[9])?$m_text_color:$text_color,$MyriadProBold,empty($campo[9])?'N/A':$campo[9]);
        imagettftext($img,8,90,240,100-puntoCentrado270(empty($campo[10])?$mtext:$campo[10],8,1),empty($campo[10])?$m_text_color:$text_color,$MyriadProBold,empty($campo[10])?'N/A':$campo[10]);
        
        $campo[11] = str_replace(' ','  ',$campo[11]);
        if (strlen($campo[11])>20)
            $fontSize = 5;
        else
            $fontSize = 6.4;
        imagettftext($img,$fontSize,90,295,100-puntoCentrado270(empty($campo[11])?$mtext:$campo[11],$fontSize-0.1,1),empty($campo[11])?$m_text_color:$text_color,$MyriadProBold,empty($campo[11])?'N/A':$campo[11]);
        
        imagettftext($img,7,0,310,15,$text_color,$MyriadPro,$campo[6].$campo[7].$campo[8]);
        imagettftext($img,7,0,310,27,empty($campo[14])?$m_text_color:$text_color,$MyriadPro,empty($campo[14])?$mtext:$campo[14]);
        
        imagettfJustifytext($img,7,8,$text_color,$MyriadPro,FORMAT_WIDTH-22,FORMAT_HEIGHT,$campo[1]);
        imagettfJustifytext($img,7,19,$text_color,$MyriadPro,FORMAT_WIDTH-31,FORMAT_HEIGHT,$campo[3]);
        
        imagettftext($img,7,0,319,38,$text_color,$MyriadPro,$campo[12]);
        imagettfJustifytext($img,7,30,$text_color,$MyriadPro,FORMAT_WIDTH-30,FORMAT_HEIGHT,$campo[13]);
        
        // Generamos el barcode
        $totaly = 85;
        $bartop = 40;
        $barbottom = 0;
        $barleft = 310;
        $barrigth = 2;
        $ancho = 0.1;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 2;
        $textLeft = 1;
        $textTop = 8;
        $numbersFont = 'OCR-B_SB.ttf';
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
        require("php-barcode.php");
           barcode_print($campo[4],'UPC',1,'png');
        
        $img = rotar($img,$anguloDeRotacion);   
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>