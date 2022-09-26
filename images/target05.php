<?php                      //   1      2       3      4      5      6       7       8       9
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','ITEM','CLR-PART#');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'YELLOW';
            if (empty($campo[2])) $campo[2] = 'XL';
            if (empty($campo[3])) $campo[3] = '2YDME031TF';
            if (empty($campo[4])) $campo[4] = '885347090125';
            if (empty($campo[5])) $campo[5] = '9.99';
            if (empty($campo[6])) $campo[6] = '016';
            if (empty($campo[7])) $campo[7] = '07';
            if (empty($campo[8])) $campo[8] = '1607';
            if (empty($campo[9])) $campo[9] = 'D1610BLU';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',275);
        
        // Creamos la imagen empezando por el escenario:
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Declaramos variables a utilizar en el diseno
                    // Colores
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $m_text_color = imagecolorallocate($img, 255, 0, 0);
        $graphic_color = imagecolorallocate($img, 64, 64, 64);
        
        switch($campo[9])
        {
            case 'D1610GRN': $bg_color = imagecolorallocate($img, 186, 217, 140);
                             break;
            case 'D1610YEL': $bg_color = imagecolorallocate($img, 255, 255, 0);
                             break;
            case 'D1610ORG': $bg_color = imagecolorallocate($img, 240, 198, 125);
                             break;
            case 'D1610PUR': $bg_color = imagecolorallocate($img, 200, 163, 224);
                             break;
            case 'D1610PNK': $bg_color = imagecolorallocate($img, 255, 170, 220);
                             break;
            case 'D1610GRY': $bg_color = imagecolorallocate($img, 181, 190, 179);
                             break;
            case 'D1610BLU': $bg_color = imagecolorallocate($img, 172, 249, 249);
                             break;
            case 'D1610EGG': $bg_color = imagecolorallocate($img, 221, 222, 188);
                             break;
            default: $bg_color = imagecolorallocate($img, 255, 255, 255);
                             break;
        }
        
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $timesNewRomanBold = FONT_PATH.'timesbd.ttf';                                                  
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        imagettftext($img,10,0,60,38,$text_color,$arial,"SIZE");        
        imagettftext($img,16,0,puntoCentrado($campo[2],16,0),59,empty($campo[2])?$m_text_color:$text_color,$timesNewRomanBold,empty($campo[2])?$mtext:$campo[2]);        
        
        if (strlen($campo[8]) < 5)
            imagettftext($img,8,0,17,108,empty($campo[6])||empty($campo[7])||empty($campo[8])?$m_text_color:$text_color,$arial,empty($campo[6])||empty($campo[7])||empty($campo[8])?$mtext:' '.$campo[6]."           ".$campo[7]."           ".$campo[8]);
        else
            imagettftext($img,8,0,17,108,empty($campo[6])||empty($campo[7])||empty($campo[8])?$m_text_color:$text_color,$arial,empty($campo[6])||empty($campo[7])||empty($campo[8])?$mtext:' '.$campo[6]."           ".$campo[7]."       ".$campo[8]);
        
        imagettftext($img,9,0,13,120,$text_color,$arial,"DEPT      CL        ITEM");
        
        imagettftext($img,8,0,15,93,$text_color,$arial,'STYLE#');
        imagettftext($img,8,0,56,93,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,9,0,15,79,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:stripslashes($campo[1]));
        
        imagettfJustifytext($img,14,235,$text_color,$arial,140,275,'$'.sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        
        // Generamos el barcode
        $totaly = 190;
        $bartop = 129;
        $barbottom = 0;
        $barleft = 12;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 0;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1.1;
        $textLeft = 1;
        $textTop = 15;
        $numbersFont = 'arialn.ttf';
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 0;
        
        require("php-barcode.php");
           barcode_print($campo[4],'UPC',1.1,'png');
           
        $img = rotar($img,$anguloDeRotacion);
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>