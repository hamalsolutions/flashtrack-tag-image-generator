<?php                    //    1        2          3       4      5      6       7      8      9        10      11    
    $correctos = array('QTY','UPC','DESCRIPTION','STYLE','COLOR','EAN','SIZE','GRID','COO','COO-CITY','VENDOR','PO');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '785266144292';
            if (empty($campo[2])) $campo[2] = 'ARCH PAD 3 PIECE #04';
            if (empty($campo[3])) $campo[3] = '218333';
            if (empty($campo[4])) $campo[4] = 'BLACK';
            if (empty($campo[5])) $campo[5] = '9008514697472';
            if (empty($campo[6])) $campo[6] = '1SZ';
            if (empty($campo[7])) $campo[7] = '0011SZ';
            if (empty($campo[8])) $campo[8] = 'VN';
            if (empty($campo[9])) $campo[9] = 'Ho Chi Minh';
            if (empty($campo[10])) $campo[10] = '11182';
            if (empty($campo[11])) $campo[11] = '719209';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',300);
        define('FORMAT_HEIGHT',200);
        
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
        $times = FONT_PATH.'times.ttf';
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);  
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        // Introducimos los datos
        //textoParrafo($img,7.5,0,6,85,$text_color,$arial,0,$campo[2],50);
        imagettftext($img,14,0,puntoCentrado2($campo[2],$times,14),30,$text_color,$times,$campo[2]);
        
        imagettftext($img,14,0,puntoCentrado2($campo[4].' '.$campo[6],$times,14),60,$text_color,$times,$campo[4].' '.$campo[6]);
        
        imagettftext($img,14,0,puntoCentrado2($campo[3].'  '.$campo[7],$times,14),90,$text_color,$times,$campo[3].'  '.$campo[7]);
        
        imagettftext($img,8.5,0,10,190,$text_color,$arial,$campo[10].' / '.$campo[11]);
        
        imagettftext($img,8.5,0,200,190,$text_color,$arial,$campo[8].' - '.$campo[9]);
        
        // Generamos los barcodes
        
        //------------- # 1 --------------
        $totaly = 160;
        $bartop = 115;
        $barbottom = 0;
        $barleft = 20;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1;
        $textLeft = 3;
        $textTop = 5;
        $numbersFont = 'arial.ttf';
        
        require("php-barcode2.php");
           barcode_print($campo[1],'UPC',1,'png');
           
        //------------- # 2 --------------
        $totaly = 160;
        $bartop = 115;
        $barbottom = 0;
        $barleft = 160;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1;
        $textLeft = 3;
        $textTop = 5;
        $numbersFont = 'arial.ttf';
        
        barcode_print($campo[5],'EAN',1,'png');
        
           
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
