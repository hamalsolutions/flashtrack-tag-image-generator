<?php                    //    1     2      3       4      5
    $correctos = array('QTY','SKU','UPC','PRICE','STYLE','SIZE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '1177313';
            if (empty($campo[2])) $campo[2] = '885347289512';
            if (empty($campo[3])) $campo[3] = '4.99';
            if (empty($campo[4])) $campo[4] = '4HJ150NH0451';
            if (empty($campo[5])) $campo[5] = 'SM';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',168);
        define('FORMAT_HEIGHT',300);
        
        // Creamos la imagen empezando por el escenario:
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Declaramos variables a utilizar en el diseno
                    // Colores
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $numberColor = $bg_color;
        $m_text_color = imagecolorallocate($img, 255, 0, 0);
        $graphic_color = imagecolorallocate($img, 64, 64, 64);
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $tradeGotBolConTwe = FONT_PATH. 'TradeGotBolConTwe.ttf';
        $tractorLogo = FONT_PATH. 'TractorSupply_logo.ttf';
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        imagettftext($img,32,0,30,78,$text_color,$tractorLogo,'T');
        
        imagettftext($img,9,0,13,106,empty($campo[1])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[1])?$mtext:'SKU#'.$campo[1]);
        
        imagettfJustifytext($img,9,95,empty($campo[4])?$m_text_color:$text_color,$tradeGotBolConTwe,160,FORMAT_HEIGHT,empty($campo[4])?$mtext:$campo[4]);
        
        imagettftext($img,10,0,60,217,$text_color,$tradeGotBolConTwe,'SIZE');
        imagettftext($img,18,0,85,220,empty($campo[5])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[5])?$mtext:$campo[5]);
                
        imagettftext($img,10,0,0,265,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        imagettftext($img,6,0,puntoCentrado('$'.$campo[3],10,0),246,empty($campo[3])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[3])?$mtext:'$');
        imagettftext($img,10,0,puntoCentrado($campo[3],10,0),250,empty($campo[3])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[3])?$mtext:' '.sinSigno($campo[3]));
        
        imagettftext($img,10,0,puntoCentrado('$'.$campo[3],18,0),284,empty($campo[3])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[3])?$mtext:'$');
        imagettftext($img,18,0,puntoCentrado($campo[3],18,0),292,empty($campo[3])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[3])?$mtext:' '.sinSigno($campo[3]));
        
        
        // Generamos el barcode
        $totaly = 175;
        $bartop = 95;
        $barbottom = 0;
        $barleft = 13;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 8;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1;
        $textLeft = 1;
        $textTop = 5;
        $numbersFont = 'OCR-B_SB.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[2],'UPC',1.2,'png');
           
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
