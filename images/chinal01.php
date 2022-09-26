<?php                    //    1      2     3     4       5       6            7       8
    $correctos = array('QTY','PCS','SIZE','SKU','UPC','PRICE','DESCRIPTION','CLASS','DESTINY');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '2-PIEZAS';
            if (empty($campo[2])) $campo[2] = 'MED';
            if (empty($campo[3])) $campo[3] = '105 549 420 09';
            if (empty($campo[4])) $campo[4] = '1055409420091059';
            if (empty($campo[5])) $campo[5] = '55';
            if (empty($campo[6])) $campo[6] = 'PANTALETA TANGA';
            if (empty($campo[7])) $campo[7] = '14-235';
            if (empty($campo[8])) $campo[8] = 'FRNT';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',250);
        
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
        $arialNarrow = FONT_PATH.'arialn.ttf';
        $arialNarrowBold = FONT_PATH.'arialnb.ttf';
        
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        // Introducimos los datos
        imagettftext($img,20,0,10,55,$text_color,$arialNarrow,'TALLA');
        imagettftext($img,22,0,82,55,empty($campo[2])?$m_text_color:$text_color,$arialNarrowBold,empty($campo[2])?$mtext:$campo[2]);
        
        imagettftext($img,10.5,0,12,90,$text_color,$arialNarrow,'CONTADO');
        imagettftext($img,21,0,74,90,empty($campo[5])?$m_text_color:$text_color,$arialNarrowBold,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        imagettftext($img,7,0,puntoCentrado($campo[1],7,1),123,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        
        imagettftext($img,8,0,puntoCentrado($campo[3],8,1),168,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,8.5,0,10,195,empty($campo[6])?$m_text_color:$text_color,$arialNarrow,empty($campo[6])?$mtext:$campo[6]);
        
        imagettftext($img,8.5,0,10,182,empty($campo[7])?$m_text_color:$text_color,$arialNarrow,empty($campo[7])?$mtext:$campo[7]);
        
        imagettftext($img,6.5,0,110,222,empty($campo[8])?$m_text_color:$text_color,$arial,empty($campo[8])?$mtext:$campo[8]);
        
        imagettftext($img,18,0,puntoCentrado(empty($campo[5])?$mtext:'$'.$campo[5],18,1),275,empty($campo[5])?$m_text_color:$text_color,$arialBold,"\$".sinSigno(empty($campo[5])?$mtext:$campo[5]));
        
        imagettftext($img,6,270.5,5,90,$text_color,$arial,'COPPEL SA DE CV');
        imagettftext($img,6,270.5,140,95,$text_color,$arial,'COP-920428-Q20');
        
        
        // Generamos el barcode
        $totaly = 155;
        $bartop = 125;
        $barbottom = 0;
        $barleft = 15;
        $barrigth = 2;
        $ancho = 0.7;
        $dientes = 0;
        // Si se requiere introducir texto
        $withText= FALSE;
        $textSize = 3.5;
        $textLeft = 10;
        $textTop = 20;
        $numbersFont = 'arial.ttf';
        
        require("php-barcode.php");
           barcode_print($campo[4],'128',1,'png');
           
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>