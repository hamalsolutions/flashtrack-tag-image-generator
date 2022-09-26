<?php                    //    1        2          3       4      5      6       7      8   
    $correctos = array('QTY','UPC','DESCRIPTION','STYLE','COLOR','EAN','SIZE','GRID','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '785266144292';
            if (empty($campo[2])) $campo[2] = 'THE MOST UNHOLY JACKET EVER';
            if (empty($campo[3])) $campo[3] = '214558';
            if (empty($campo[4])) $campo[4] = 'NAVY';
            if (empty($campo[5])) $campo[5] = '9008514697472';
            if (empty($campo[6])) $campo[6] = 'XS';
            if (empty($campo[7])) $campo[7] = '002XS';
            if (empty($campo[8])) $campo[8] = '34.00';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',159);
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
        $perf_color = imagecolorallocate($img, 192, 192, 192);
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $times = FONT_PATH.'times.ttf';
        
        $logo = FONT_PATH.'Burton_Logo.ttf';
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);  
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        // Introducimos los datos
        
        textoParrafoCentrado2($campo[2],43,$arialBold,$text_color,9,0,15,10);
        
        imagettftext($img,7,0,puntoCentrado2('COLOR: '.$campo[4],$arial,7),66,$text_color,$arial,'COLOR: '.$campo[4]);
        
        imagettftext($img,8,0,puntoCentrado2('SIZE: '.$campo[6],$arial,8),78,$text_color,$arial,'SIZE: '.$campo[6]);
        
        imagettftext($img,8,0,puntoCentrado2('ITEM#: '.$campo[3].' '.$campo[7],$arial,8),90,$text_color,$arial,'ITEM#: '.$campo[3].' '.$campo[7]);
        
        imagettftext($img,20,0,puntoCentrado2('B',$logo,20),120,$text_color,$logo,'B');
        
        imagettftext($img,10,0,0,255,$perf_color,$arialBold,"-- - - - - - - - - - - - - - - - - - --");
        
        imagettftext($img,14,0,puntoCentrado2(str_replace('$','',$campo[8]),$arial,14),290,$text_color,$arial,str_replace('$','',$campo[8]));
        
        // Generamos los barcodes
        
        //------------- # 1 --------------
        $totaly = 179;
        $bartop = 104;
        $barbottom = 0;
        $barleft = 8;
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
           barcode_print($campo[1],'UPC',1.2,'png');
           
        //------------- # 2 --------------
        $totaly = 239;
        $bartop = 159;
        $barbottom = 0;
        $barleft = 8;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1;
        $textLeft = 3;
        $textTop = 8;
        $numbersFont = 'arial.ttf';
        
        barcode_print($campo[5],'EAN',1.2,'png');
        
           
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
