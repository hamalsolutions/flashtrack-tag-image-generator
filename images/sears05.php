<?php                      //   1      2      3        4          5      6      7       8      9     10      11         12       13     14        15
    $correctos = array('QTY','COLOR','PCS','SIZE','DESCRIPTION','UPC','PRICE','DEPT','CLASS','DIV','ITEM#','SEASON','SIZECODE','LINE','DEPT#','KSN ITEM#');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = 'NAVY';
            if (empty($campo[2])) $campo[2] = '1 PC';
            if (empty($campo[3])) $campo[3] = 'M(5/6)';
            if (empty($campo[4])) $campo[4] = 'S/S TEES';            
            if (empty($campo[5])) $campo[5] = '726392385005';
            if (empty($campo[6])) $campo[6] = '46.00';
            if (empty($campo[7])) $campo[7] = "MEN'S";
            if (empty($campo[8])) $campo[8] = '084';
            if (empty($campo[9])) $campo[9] = '43';
            if (empty($campo[10])) $campo[10] = '4568';  
            if (empty($campo[11])) $campo[11] = 'C6';
            if (empty($campo[12])) $campo[12] = '003';    
            if (empty($campo[13])) $campo[13] = '01'; 
            if (empty($campo[14])) $campo[14] = '41';
            if (empty($campo[15])) $campo[15] = '80300-2';    
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',350);
        define('FORMAT_HEIGHT',125);
        
        // Creamos la imagen empezando por el escenario:
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Declaramos variables a utilizar en el diseno
                    // Colores
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $m_text_color = imagecolorallocate($img, 255, 0, 0);
        $graphic_color = imagecolorallocate($img, 0, 0, 0);
                    // Fuentes
        $arial = FONT_PATH.'arial.ttf';
        $arialBold = FONT_PATH.'arialbd.ttf';
        $logo_font = FONT_PATH.'SearsLogo.ttf';
        
           
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
                    // Y creamos el marco
        imagerectangle($img,1,0,350,124,$text_color);
                    
        
        // Introducimos el logo y header
        imagettftext($img,6,270.5,320,10,$graphic_color,$arial,"STC");
        
        imageellipse($img,325,60,15,15,$text_color);
        
        imagettftext($img,10,270.5,300,75,$graphic_color,$logo_font,"A");        
        imagettftext($img,5,270.5,295,65,$graphic_color,$arial,"www.sears.com"); 
       
        // Introducimos los datos

        imagettftext($img,10,270.5,283,10,empty($campo[7])?$m_text_color:$text_color,$arialBold,empty($campo[7])?$mtext:stripslashes($campo[7]));
        imagettftext($img,8,270.5,270,10,empty($campo[4])?$m_text_color:$text_color,$arial,empty($campo[4])?$mtext:$campo[4]);
                
        imagettftext($img,8.5,270.5,248,10,empty($campo[1])?$m_text_color:$text_color,$arial,empty($campo[1])?$mtext:$campo[1]);
        imagettftext($img,8,270.5,238,10,$text_color,$arial,$campo[2]);
        imagettftext($img,8,270.5,227,10,empty($campo[11])?$m_text_color:$text_color,$arial,empty($campo[11])?$mtext:$campo[11]);
        
        imagettftext($img,8,270.5,208,10,empty($campo[15])?$m_text_color:$text_color,$arial,empty($campo[15])?'':$campo[15]);
        imagettftext($img,8,270.5,194,10,empty($campo[10])?$m_text_color:$text_color,$arial,empty($campo[10])?'':$campo[10]);
        imagettftext($img,8,270.5,180,10,empty($campo[14])?$m_text_color:$text_color,$arial,empty($campo[14])?'':$campo[14]);
        imagettftext($img,8,270.5,168,10,empty($campo[9])?$m_text_color:$text_color,$arial,empty($campo[9])?$mtext:'DIV'.$campo[9]);
        imagettftext($img,8,270.5,156,10,empty($campo[12])?$m_text_color:$text_color,$arial,empty($campo[12])?$mtext:$campo[12]);
        imagettftext($img,8,270.5,145,10,$text_color,$arial,"LINE");
        imagettftext($img,8,270.5,145,35,empty($campo[13])?$m_text_color:$text_color,$arial,empty($campo[13])?$mtext:$campo[13]);
        imagettftext($img,8,270.5,133,10,$text_color,$arial,"CLS");
        imagettftext($img,8,270.5,133,35,empty($campo[8])?$m_text_color:$text_color,$arial,empty($campo[8])?$mtext:$campo[8]);
        
        imagettftext($img,14,270.5,97,13,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?'N/A':$campo[3]);
         
        imagettftext($img,12,270.5,70,puntoCentrado270(empty($campo[7])?$mtext:$campo[7],12,1),empty($campo[7])?$m_text_color:$text_color,$arialBold,empty($campo[7])?$mtext:stripslashes($campo[7]));
        imagettftext($img,8,270.5,60,15,$text_color,$arialBold,'HUMOR SPINNER');
                
        imagettftext($img,10,270.5,40,0,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        imagettftext($img,14,270.5,15,puntoCentrado270(empty($campo[6])?$mtext:$campo[6],14,1),empty($campo[6])?$m_text_color:$text_color,$arialBold,empty($campo[6])?$mtext:'$'.sinSigno($campo[6]));
 
        
        // Generamos el barcode
        $totaly = 105;
        $bartop = 70;
        $barbottom = 0;
        $barleft = 97;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 4;
        $textLeft = 2;
        $textTop = 10;
        $numbersFont = 'arial.ttf';
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
        require("php-barcode.php");
           barcode_print($campo[5],'UPC',1,'png');
           
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>
