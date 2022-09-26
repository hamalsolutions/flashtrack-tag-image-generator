<?php                     //    1       2       3      4       5      6      7
    $correctos = array('QTY','DEPT','SEASON','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '23';
            if (empty($campo[2])) $campo[2] = '03-09';
            if (empty($campo[3])) $campo[3] = 'WHITE';
            if (empty($campo[4])) $campo[4] = 'XXL';
            if (empty($campo[5])) $campo[5] = '2FFMMA080/X';
            if (empty($campo[6])) $campo[6] = '884411855196';
            if (empty($campo[7])) $campo[7] = '8.00';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',250);
        
        // Creamos la imagen
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Configuramos un fondo blanco con texto negro y graficos grises
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $m_text_color = imagecolorallocate($img, 255, 0, 0);        
        $graphic_color = imagecolorallocate($img, 64, 64, 64);
        
        // Llenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
        
        // Introducimos datos
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $logo_font = FONT_PATH.'WalMart_Logo.ttf';
                
        imagettftext($img,9,0,30,55,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        imagettftext($img,9,0,20,70,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);
        
        imagettfJustifytext($img,9,59,empty($campo[3])?$m_text_color:$text_color,$arial,FORMAT_WIDTH-8,FORMAT_HEIGHT,empty($campo[3])?$mtext:$campo[3]);
        
        imagerectangle($img,10,80,140,100,$logo_color);
        imagettftext($img,8,0,20,95,$logo_color,$arialBold,"SIZE");
        imagettftext($img,8,0,50,96,empty($campo[4])?$m_text_color:$text_color,$arialBold,empty($campo[4])?$mtext:$campo[4]);
        
        imagettftext($img,30,0,15,30,$logo_color,$logo_font,"w");
        imagettftext($img,8,0,puntoCentrado($campo[5],8,1),125,empty($campo[5])?$m_text_color:$text_color,$arialBold,empty($campo[5])?$mtext:$campo[5]);
        
        imagettftext($img,8,0,40,143,empty($campo[6])?$m_text_color:$text_color,$arial,empty($campo[6])?$mtext:$campo[6]);
        
        imagettftext($img,16,0,puntoCentrado('$'.$campo[7],16,0),220,empty($campo[7])?$m_text_color:$text_color,$arial,empty($campo[7])?$mtext:"\$".sinSigno($campo[7]));
        
        imagettftext($img,7,0,20,240,$logo_color,$arialBold,"EVERY DAY LOW PRICE");                                                                     

        // Generamos el barcode
        $totaly = 200;
        $bartop = 150;
        $barbottom = 10;
        $barleft = 10;
        $barrigth = 2;
        $ancho = 0.5;
        $dientes = 10;
        
        require("php-barcode.php");
           barcode_print($campo[6],'UPC',1,'png');
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>