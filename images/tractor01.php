<?php                       //   1       2     3     4        5         6
    $correctos = array('QTY','SEASON','SIZE','SKU','UPC','COLOR BAR','PRICE');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if (empty($campo[1])) $campo[1] = '00-01';
            if (empty($campo[2])) $campo[2] = '12';
            if (empty($campo[3])) $campo[3] = '00-00000';
            if (empty($campo[4])) $campo[4] = '885347132467';
            if (empty($campo[5])) $campo[5] = 'WHITE';
            if (empty($campo[6])) $campo[6] = '9.99';
        }
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',350);
        
        // Creamos la imagen empezando por el escenario:
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Declaramos variables a utilizar en el diseno
                    // Colores
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        $bg_color_springOdd = imagecolorallocate($img, 15, 142, 70);
        $bg_color_summerOdd = imagecolorallocate($img, 252, 23, 33);
        $bg_color_fallOdd = imagecolorallocate($img, 207, 82, 0);
        $bg_color_winterOdd = imagecolorallocate($img, 9, 93, 167);
        
        $bg_color_springEven = imagecolorallocate($img, 255, 255, 0);
        $bg_color_summerEven = imagecolorallocate($img, 115, 84, 166);
        $bg_color_fallEven = imagecolorallocate($img, 101, 8, 25);
        $bg_color_winterEven = imagecolorallocate($img, 255, 115, 0);
        
        $bg_color_specialBuys = imagecolorallocate($img, 0, 0, 0);
        
        
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
        
        $campo[1] = str_replace(" ","",$campo[1]);
        
        $year = substr($campo[1],0,2);
        $month = substr($campo[1],3,2);
        
        if ( $year%2 == 1)
            switch($month)
            {
                case '03':
                case '04':
                case '05': $bg_season_color = $bg_color_springOdd;
                              break;
                case '06':
                case '07':              
                case '08': $bg_season_color = $bg_color_summerOdd;
                              break;
                case '09':
                case '10':
                case '11': $bg_season_color = $bg_color_fallOdd;
                              break;
                case '12':
                case '01':
                case '02': $bg_season_color = $bg_color_winterOdd;
                              break;
                default: $bg_season_color = $bg_color;
            }
        else
            switch($campo[5])
            {
                case 'YELLOW': $bg_season_color = $bg_color_springEven;
                               $numberColor = $text_color;
                              break;
                case 'LIGHT PURPLE': $bg_season_color = $bg_color_summerEven;
                              break;
                default: $bg_season_color = $bg_color;
            }
            
                    // Rellenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
        imagefilledrectangle($img,4,4,145,30,$bg_season_color);
                    // Y creamos el marco
        imagerectangle($img,0,0,FORMAT_WIDTH-1,FORMAT_HEIGHT-1,$graphic_color);
        
        
        imagettftext($img,10,0,128,25,$numberColor,$tradeGotBolConTwe,'10');
        
        imagettftext($img,32,0,18,78,$text_color,$tractorLogo,'T');
        
        imagettftext($img,8,0,13,93,empty($campo[3])?$m_text_color:$text_color,$arial,empty($campo[3])?$mtext:$campo[3]);
        
        imagettfJustifytext($img,8,83,empty($campo[1])?$m_text_color:$text_color,$arial,140,FORMAT_HEIGHT,empty($campo[1])?$mtext:'#'.$campo[1]);
        
        imagettftext($img,12,0,48,200,$text_color,$tradeGotBolConTwe,'SIZE');
        imagettftext($img,20,0,78,200,empty($campo[2])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[2])?$mtext:$campo[2]);
                
        imagettftext($img,10,0,0,210,$text_color,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        imagettftext($img,8,0,puntoCentrado('$'.$campo[6],13,0),225,empty($campo[6])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[6])?$mtext:'$');
        imagettftext($img,13,0,puntoCentrado($campo[6],13,0),230,empty($campo[6])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[6])?$mtext:' '.sinSigno($campo[6]));
        
        imagettftext($img,12,0,puntoCentrado('$'.$campo[6],23,0),290,empty($campo[6])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[6])?$mtext:'$');
        imagettftext($img,25,0,puntoCentrado($campo[6],25,0),300,empty($campo[6])?$m_text_color:$text_color,$tradeGotBolConTwe,empty($campo[6])?$mtext:' '.sinSigno($campo[6]));
        
        
        // Generamos el barcode
        $totaly = 165;
        $bartop = 105;
        $barbottom = 0;
        $barleft = 18;
        $barrigth = 2;
        $ancho = 0;
        $dientes = 5;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1;
        $textLeft = 1;
        $textTop = 5;
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
