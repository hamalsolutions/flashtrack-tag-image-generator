<?php                      //   1      2      3       4      5  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'Dark Handsand Without Holes';
            if (empty($campo[2])) $campo[2] = '23';
            if (empty($campo[3])) $campo[3] = 'R5034CD';
            if (empty($campo[4])) $campo[4] = '842889063529';
            if (empty($campo[5])) $campo[5] = '189.00';
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
        $graphic_color = imagecolorallocate($img, 64, 64, 64);
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $tahomaBold = FONT_PATH.'tahomabd.ttf';
        
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        
        imagettftext($img,9,0,12,60,$text_color,$tahomaBold,$campo[3]);
        
        textoParrafoCentrado($img,9,0,115,$text_color,$tahomaBold,1,$campo[1],21);
        
        imagettftext($img,12,0,puntoCentrado('SIZE   '.$campo[2],12,1),236,$text_color,$arialBold,'SIZE    '.$campo[2]);
        
        imagettftext($img,10,0,0,255,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        
        imagettftext($img,14,0,puntoCentrado('$'.$campo[5],14,1),285,$text_color,$arial,"\$".sinSigno($campo[5]));
        
        
        // Generamos el barcode
        $totaly = 200;
        $bartop = 145;
        $barbottom = 0;
        $barleft = 25;
        $barrigth = 2;
        $ancho = 0.1;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 4.5;
        $textLeft = 0;
        $textTop = 12;
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