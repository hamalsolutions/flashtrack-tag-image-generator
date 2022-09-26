<?php                      //   1     2       3      4     5      6   
    $correctos = array('QTY','DEPT','CLASS','SUB','STYLE','UPC','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '351';
            if (empty($campo[2])) $campo[2] = '40';
            if (empty($campo[3])) $campo[3] = '41';
            if (empty($campo[4])) $campo[4] = 'KOH7000';
            if (empty($campo[5])) $campo[5] = '012345678905';
            if (empty($campo[6])) $campo[6] = '$30.00';
        }                                                             
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',175);
        
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
        
        // Introducimos los campos de datos en el formato
        imagettftext($img,13,0,7,22,$text_color,$arialBold,'KOHL\'S'); 
        
        imagettftext($img,9,0,7,35,$text_color,$arialBold,'Kohls.com');                       
        
        imagettftext($img,8,0,90,35,empty($campo[1])||empty($campo[2])||empty($campo[3])?$m_text_color:$text_color,$arialBold,empty($campo[1])||empty($campo[2])||empty($campo[3])?$mtext:$campo[1]." ".$campo[2]." ".$campo[3]);
        
        imagettftext($img,8,0,7,50,empty($campo[4])?$m_text_color:$text_color,$arialBold,empty($campo[4])?$mtext:'STYLE '.$campo[4]);
        
        imagettftext($img,8,0,95,18,empty($campo[6])?$m_text_color:$text_color,$arialBold,'$'.sinSigno(empty($campo[6])?$mtext:$campo[6]));
        
        
        // Generamos el barcode
        $totaly = 140;
        $bartop = 60;
        $barbottom = 0;
        $barleft = 5;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 8;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 2;
        $textLeft = 1;
        $textTop = 9;
        $numbersFont = 'OCR-B_SB.ttf'; 
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 0;
        
        require("php-barcode.php");
           barcode_print($campo[5],'UPC',1.2,'png');
           
        $img = rotar($img,$anguloDeRotacion);
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>