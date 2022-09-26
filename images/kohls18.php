<?php                      //      1         2      3       4      5         6          7               8               9        10
    $correctos = array('QTY','COLOR CODE','COLOR','SIZE','STYLE','UPC','RETAIL PRICE','DEPT','DEPT/SIZE DESCRIPTION','CLASS','SUB CLASS');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '031';
            if (empty($campo[2])) $campo[2] = 'HEATHER GREY';
            if (empty($campo[3])) $campo[3] = 'XL';
            if (empty($campo[4])) $campo[4] = '1WRD398R';
            if (empty($campo[5])) $campo[5] = '885347090125';
            if (empty($campo[6])) $campo[6] = '18.00';
            if (empty($campo[7])) $campo[7] = '059';
            if (empty($campo[8])) $campo[8] = 'MENS';
            if (empty($campo[9])) $campo[9] = '10';
            if (empty($campo[10])) $campo[10] = '13';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',175);
        define('FORMAT_HEIGHT',150);
        
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
        imagettftext($img,10,0,35,20,$text_color,$arialBold,"KOHL'S");        
                
        imagettftext($img,6,0,37,67,$text_color,$arial,"DEPT         CL           SBCL");
        imagettftext($img,8,0,37,78,empty($campo[7])||empty($campo[9])||empty($campo[10])?$m_text_color:$text_color,$arialBold,empty($campo[7])||empty($campo[9])||empty($campo[10])?$mtext:$campo[7]."         ".$campo[9]."          ".$campo[10]);
        
        imagettftext($img,6,0,35,55,$text_color,$arial,"STYLE");
        imagettftext($img,7,0,65,55,empty($campo[4])?$m_text_color:$text_color,$arial,empty($campo[4])?$mtext:$campo[4]);
        
        imagettftext($img,6.5,0,35,42,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?'N / A':$campo[1]);
        imagettftext($img,6.5,0,55,42,empty($campo[2])?$m_text_color:$text_color,$arial,empty($campo[2])?$mtext:$campo[2]);
        
        imagettftext($img,8,0,35,32,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        imagettftext($img,6,0,puntoCentrado(empty($campo[8])?$mtext:$campo[8],6,1),130,empty($campo[8])?$m_text_color:$text_color,$arial,empty($campo[8])?$mtext:$campo[8]);
        imagettftext($img,9,0,puntoCentrado('$'.$campo[6],9,0),145,empty($campo[6])?$m_text_color:$text_color,$arialBold,"\$".sinSigno(empty($campo[6])?$mtext:$campo[6]));
        
        
        // Generamos el barcode
        $totaly = 116;
        $bartop = 57;
        $barbottom = 0;
        $barleft = 7;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 3;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = -1;
        $textLeft = 1;
        $textTop = 8;
        $numbersFont = 'arial.ttf';
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 0;
        
        require("php-barcode.php");
           barcode_print($campo[5],'UPC',1.4,'png');
           
        $img = rotar($img,$anguloDeRotacion);
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>