<?php                     //    1      2       3      4      5        6        7          8               9             10           11  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','TRACKING','D/S/F','DESCRIPTION','REPLENISHMENT','SECURITY CODE','SEASON');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'PINK';
            if (empty($campo[2])) $campo[2] = 'L/G (11/13)';
            if (empty($campo[3])) $campo[3] = 'ST3048';
            if (empty($campo[4])) $campo[4] = '884411935638';
            if (empty($campo[5])) $campo[5] = '$7.00';
            if (empty($campo[6])) $campo[6] = 'EPS-B70405-0511';
            if (empty($campo[7])) $campo[7] = '24002424';
            if (empty($campo[8])) $campo[8] = 'S/S TEES';
            if (empty($campo[9])) $campo[9] = 'POS';
            if (empty($campo[10])) $campo[10] = 'K2P032933535';
            if (empty($campo[11])) $campo[11] = '01-06';
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
        imagettftext($img,19,90,35,100-puntoCentrado270(empty($campo[5])?$mtext:'$'.sinSigno($campo[5]),18,0),empty($campo[5])?$m_text_color:$text_color,$MyriadProBold,empty($campo[5])?'':'$'.sinSigno($campo[5]));
        
        $campo[8] = str_replace('\\','',$campo[8]);
        $campo[2] = str_replace(' ','',$campo[2]);
        if (strpos($campo[2],'(')){
            $size1 = substr($campo[2],0,strpos($campo[2],'('));
            $size2 = substr($campo[2],strpos($campo[2],'('),strpos($campo[2],')'));
            $size2point  = 13;
        } else {
            $size1 = $campo[2];
            $size2 = $campo[8];
            $size2point  = 15;
        }
        
        if (strlen($size1 < 4))
            if ($size1 == 'M')
                $centeredFont = 22;
            else
                $centeredFont = 15;
        else
            $centeredFont = 13;
        
        imagettftext($img,12,90,80,100-puntoCentrado270(empty($size1)?$mtext:$size1,$centeredFont,0),empty($size1)?$m_text_color:$text_color,$MyriadProBold,empty($size1)?'N/A':$size1);
        imagettftext($img,12,90,95,100-puntoCentrado270(empty($size2)?$mtext:$size2,$size2point,0),empty($size2)?$m_text_color:$text_color,$MyriadProBold,empty($size2)?'N/A':$size2);
        
        imagettftext($img,12,90,142,100-puntoCentrado270(empty($size1)?$mtext:$size1,$centeredFont,0),empty($size1)?$m_text_color:$text_color,$MyriadProBold,empty($size1)?'N/A':$size1);
        imagettftext($img,12,90,157,100-puntoCentrado270(empty($size2)?$mtext:$size2,$size2point,0),empty($size2)?$m_text_color:$text_color,$MyriadProBold,empty($size2)?'N/A':$size2);
        
        imagettftext($img,12,90,205,100-puntoCentrado270(empty($size1)?$mtext:$size1,$centeredFont,0),empty($size1)?$m_text_color:$text_color,$MyriadProBold,empty($size1)?'N/A':$size1);
        imagettftext($img,12,90,220,100-puntoCentrado270(empty($size2)?$mtext:$size2,$size2point,0),empty($size2)?$m_text_color:$text_color,$MyriadProBold,empty($size2)?'N/A':$size2);
        
        imagettftext($img,12,90,267,100-puntoCentrado270(empty($size1)?$mtext:$size1,$centeredFont,0),empty($size1)?$m_text_color:$text_color,$MyriadProBold,empty($size1)?'N/A':$size1);
        imagettftext($img,12,90,282,100-puntoCentrado270(empty($size2)?$mtext:$size2,$size2point,0),empty($size2)?$m_text_color:$text_color,$MyriadProBold,empty($size2)?'N/A':$size2);
        
        $campo[8] = str_replace(' ','  ',$campo[8]);
        if (strlen($campo[8])>20)
            $fontSize = 4;
        else
            $fontSize = 5.4;
        if (strpos($campo[2],'('))
            imagettftext($img,$fontSize,90,310,100-puntoCentrado270(empty($campo[8])?$mtext:$campo[8],$fontSize-0.1,1),empty($campo[8])?$m_text_color:$text_color,$MyriadProBold,empty($campo[8])?'N/A':$campo[8]);
        
        imagettftext($img,7,0,318,15,$text_color,$MyriadPro,$campo[7]);
        imagettftext($img,7,0,320,27,empty($campo[11])?$m_text_color:$text_color,$MyriadPro,empty($campo[11])?$mtext:$campo[11]);
        
        imagettfJustifytext($img,7,8,$text_color,$MyriadPro,FORMAT_WIDTH-22,FORMAT_HEIGHT,$campo[1]);
        imagettfJustifytext($img,7,19,$text_color,$MyriadPro,FORMAT_WIDTH-22,FORMAT_HEIGHT,$campo[3]);
        
        if (empty($campo[10]))
            imagettftext($img,7,0,362,38,$text_color,$MyriadPro,$campo[9]);
        else
            imagettftext($img,7,0,325,38,$text_color,$MyriadPro,$campo[9]);
        imagettfJustifytext($img,7,30,$text_color,$MyriadPro,FORMAT_WIDTH-25,FORMAT_HEIGHT,$campo[10]);
        
        imagettftext($img,7,0,340,92,$text_color,$MyriadPro,$campo[6]);
        
        imagettftext($img,6,90,442,100-puntoCentrado270('Walmart.com',6,1),$text_color,$MyriadProBold,'Walmart.com');
        
        // Generamos el barcode
        $totaly = 75;
        $bartop = 40;
        $barbottom = 0;
        $barleft = 318;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1.5;
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