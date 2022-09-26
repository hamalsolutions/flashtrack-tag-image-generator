<?php                      //      1         2       3       4         5          6      7
    $correctos = array('QTY','DESCRIPTION','STYLE','SIZE','COLOR','VENDOR CODE','SKU','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'WOLVERINE SS TEE';
            if (empty($campo[2])) $campo[2] = 'MC94760-BAN';
            if (empty($campo[3])) $campo[3] = 'M';
            if (empty($campo[4])) $campo[4] = 'BANANA';
            if (empty($campo[5])) $campo[5] = 'CLM';
            if (empty($campo[6])) $campo[6] = '10799927';
            if (empty($campo[7])) $campo[7] = '$24.00';
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
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        imagettftext($img,9,0,10,50,empty($campo[5])?$m_text_color:$text_color,$arialBold,empty($campo[5])?$mtext:$campo[5]);        
        
        imagettftext($img,strlen($campo[1])>20?8:9,0,10,65,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,9,0,10,85,empty($campo[4])?$m_text_color:$text_color,$arial,empty($campo[4])?$mtext:$campo[4]);
        
        imagettftext($img,9,0,10,100,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);
        
        //imagettftext($img,13,0,puntoCentrado($campo[6],13,0),175,empty($campo[6])?$m_text_color:$text_color,$arial,empty($campo[6])?$mtext:$campo[6]);
        
        //imagettftext($img,17,0,puntoCentrado($campo[3],17,1),200,empty($campo[3])?$m_text_color:$text_color,$arialBold,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,10,0,0,255,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        
        imagettftext($img,17,0,10,287,$text_color,$arial,'MSRP');
        
        imagettfJustifytext($img,17,265,empty($campo[7])?$m_text_color:$text_color,$arialBold,FORMAT_WIDTH-8,FORMAT_HEIGHT,'$'.sinSigno(empty($campo[7])?$mtext:$campo[7]));
        
        
        // Generamos el barcode
        $totaly = 158;
        $bartop = 108;
        $barbottom = 0;
        $barleft = 18;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 0;
        // Si se requiere introducir texto
        $withText= FALSE;
        $textSize = 4;
        $textLeft = 10;
        $textTop = 20;
        $numbersFont = 'arial.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[6],'128B',1,'png');
           
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>