<?php                    //    1      2      3        4       5           6
    $correctos = array('QTY','DEPT','UPC','SEASON','SIZE','USA PRICE','CAN PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '0000';
            if (empty($campo[2])) $campo[2] = '123456789128';
            if (empty($campo[3])) $campo[3] = '0000';
            if (empty($campo[4])) $campo[4] = 'S/P 6-6x';
            if (empty($campo[5])) $campo[5] = '$20.00';
            if (empty($campo[6])) $campo[6] = '$27.00';
        }                                                             
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',125);
        define('FORMAT_HEIGHT',288);
        
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
        $arial = FONT_PATH.'futurab.ttf';
        $arialBold = FONT_PATH.'futurab.ttf';
        $recycleLogo = FONT_PATH.'Recycle_Symbol.ttf';


        // Rellenamos los fondos
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
        // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        // Introducimos los datos
        imagettftext($img,4,0,37,43,$text_color,$arial,'LABEL MADE WITH');
        imagettftext($img,4,0,20,50,$text_color,$arial,'Recycled (100%) MATERIAL');
        
        imagettftext($img,10,0,93,49,$text_color,$recycleLogo,'R');
        
        imagettftext($img,7,0,10,80,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettfJustifytext($img,7,70,$text_color,$arial,120,288,$campo[3]);
        
        imagettftext($img,7,0,puntoCentrado($campo[2],7,1),90,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);
        
        imagettftext($img,11,0,puntoCentrado($campo[4],11,1),210,empty($campo[4])?$m_text_color:$text_color,$arialBold,empty($campo[4])?$mtext:$campo[4]);
        
        imagettftext($img,11,0,puntoCentrado('USA $'.$campo[5],11,1),260,empty($campo[5])?$m_text_color:$text_color,$arialBold,'USA $'.sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        imagettftext($img,11,0,puntoCentrado('CAN $'.$campo[6],11,1),276,empty($campo[6])?$m_text_color:$text_color,$arialBold,'CAN $'.sinSigno(empty($campo[6])?$mtext:$campo[6]));
        
        
        // Generamos el barcode
        $totaly = 125;
        $bartop = 98;
        $barbottom = 0;
        $barleft = 6;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 0;
        // Si se requiere introducir texto
        $withText= FALSE;
        $textSize = 0.5;
        $textLeft = 1;
        $textTop = 9;
        $numbersFont = 'arial.ttf'; 
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 0;
        
        require("php-barcode.php");
           barcode_print($campo[2],'UPC',1,'png');
           
        $img = rotar($img,$anguloDeRotacion);
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>