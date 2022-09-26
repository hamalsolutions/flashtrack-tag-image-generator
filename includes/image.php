<?php
    if ($_GET['csvfile'])
    {
        $csvfile = $_GET['csvfile'];
        $row = 1;
        $handle = fopen('../cvs/'.$csvfile, "r");

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
        {
            $num = count($data);
            
            /*if ($data[0]<>NULL)
            {
                echo "<p> $num fields in line $row: <br /></p>\n";
            } */
              
            for ($c=0; $c < $num; $c++) 
            {
                if ($row == 1)
                {
                    switch ($data[$c])
                    {
                        case 'DEPT': $ind_dept = $c;
                                     break;
                        case 'DEPT. #': $ind_dept = $c;
                                     break;
                        case 'SEASON': $ind_season = $c;
                                     break;
                        case 'SEASON ': $ind_season = $c;
                                     break;
                        case 'COLOR': $ind_color = $c;
                                     break;
                        case 'SIZE': $ind_size = $c;
                                     break;
                        case 'DESCRIPTION': $ind_description = $c;
                                            break;
                        case 'STYLE': $ind_description = $c;
                                            break;
                        case 'UPC': $ind_upc = $c;
                                     break;
                        case 'UPC NUMBER': $ind_upc = $c;
                                     break;
                        case 'RETAIL': $ind_retail = $c;
                                     break;
                        case 'PRICE': $ind_retail = $c;
                                     break;
                        default:     break;
                    }
                }
            }
            
            if ($row == 1)
            {
                if (empty($ind_dept) || empty($ind_season) || empty($ind_color) || empty($ind_size) || empty($ind_description) || empty($ind_upc) || empty($ind_retail))
                            echo '<h1>Sorry, you must to check your csv file. The following fields don\'t match...</h1>';
                if (empty($ind_dept))
                            echo 'DEPT<br />';
                if (empty($ind_season))
                            echo 'SEASON<br />';
                if (empty($ind_color))
                            echo 'COLOR<br />';
                if (empty($ind_size))
                            echo 'SIZE<br />';
                if (empty($ind_description))
                            echo 'DESCRIPTION<br />';
                if (empty($ind_upc))
                            echo 'UPC<br />';
                if (empty($ind_retail))
                            echo 'RETAIL<br />';
                            echo '<p></p>';
            }
            
                if  ($data[0] <> NULL && $row <> 1)
                {
                    
                     echo '&nbsp;'.
                          '<img src="'.$_SERVER['PHP_SELF'].'?code='. $data[$ind_upc] .'&'.
                                                      'dept='. $data[$ind_dept] .'&'.
                                                      'season='. $data[$ind_season] .'&'.
                                                      'color='. $data[$ind_color] .'&'.
                                                      'size='. $data[$ind_size] .'&'.
                                                      'description='.$data[$ind_description].'&'.
                                                      'price='. $data[$ind_retail] .'" alt="Sorry, you must to check your csv file. The following fields don\'t match..." />';
                }
               $row++;
            
        }
        if (empty($ind_dept) || empty($ind_season) || empty($ind_color) || empty($ind_size) || empty($ind_description) || empty($ind_upc) || empty($ind_retail))
                    echo '<h1>Sorry, you must to check your csv file. The following fields don\'t match...</h1>';
        if (empty($ind_dept))
                    echo 'DEPT<br />';
        if (empty($ind_season))
                    echo 'SEASON<br />';
        if (empty($ind_color))
                    echo 'COLOR<br />';
        if (empty($ind_size))
                    echo 'SIZE<br />';
        if (empty($ind_description))
                    echo 'DESCRIPTION<br />';
        if (empty($ind_upc))
                    echo 'UPC<br />';
        if (empty($ind_retail))
                    echo 'RETAIL<br />';

        fclose($handle);

        echo '<h2 align="center"> Go <----- <a href="../../ocart.php">BACK</a> </h2>';
    }
    else
    {
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',150);
        define('FORMAT_HEIGHT',250);
        
        function getvar($name)
        {
        global $_GET, $_POST;
        if (isset($_GET[$name])) return $_GET[$name];
        else if (isset($_POST[$name])) return $_POST[$name];
        else return false;
        }
        
        // Valores obtenidos por Get para generar los samples desde un CSV
        if (get_magic_quotes_gpc())
        {
            $code=stripslashes(getvar('code'));
        } else {
            $code=getvar('code');
        }
        
        $dept = getvar('dept');
        $season = getvar('season');
        $color = getvar('color');
        $size = getvar('size');
        $price = getvar('price');
        $description = getvar('description');
        
        // Valores por default para presentar una imagen
        if ($code == false)
            $code = '884411855196';
        if ($dept == false)
            $dept = '23';
        if ($season == false)
            $season = '03-09';
        if ($color == false)
            $color = 'WHITE';
        if ($size == false)
            $size = 'XXL';
        if ($price == false)
            $price = '8.00';
        if ($description == false)
            $description = '2FFMMA080/X';
        
        // Creamos la imagen
        $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Configuramos un fondo blanco con texto negro y graficos grises
        $bg_color = imagecolorallocate($img, 255, 255, 255);
        $logo_color = imagecolorallocate($img, 0, 0, 255);
        $text_color = imagecolorallocate($img, 0, 0, 0);
        $graphic_color = imagecolorallocate($img, 64, 64, 64);
        
        // Llenamos el fondo
        imagefilledrectangle($img, 0, 0, FORMAT_WIDTH, FORMAT_HEIGHT, $bg_color);
        
        // Introducimos datos
        imagerectangle($img,0,0,149,249,$graphic_color);
        
        $font = '/var/www/us/admin/formats/fonts/arial.ttf';
        $logo_font = '/var/www/us/admin/formats/fonts/WalMart_Logo.ttf';
                
        imagettftext($img,9,0,30,55,$text_color,$font,$dept);
        imagettftext($img,9,0,20,70,$text_color,$font,$season);
        imagettftext($img,9,0,100,70,$text_color,$font,$color);
        
        imagerectangle($img,10,80,140,100,$logo_color);
        imagettftext($img,9,0,20,95,$logo_color,$font,"SIZE");
        imagettftext($img,10,0,60,96,$text_color,$font,$size);
        
        imagettftext($img,30,0,15,30,$logo_color,$logo_font,"w");
        imagettftext($img,9,0,35,125,$text_color,$font,$description);
        
        imagettftext($img,8,0,40,143,$text_color,$font,$code);
        
        imagettftext($img,20,0,37,220,$text_color,$font,"\$".$price);
        
        imagettftext($img,8,0,15,240,$logo_color,$font,"EVERY DAY LOW PRICE");                                                                     

        // Generamos el barcode
        $totaly = 200;
        $bartop = 150;
        $barbottom = 10;
        $barleft = 10;
        $barrigth = 2;
        $ancho = 0.5;
        $dientes = 10;
        
        require("php-barcode.php");
           barcode_print($code,'UPC',1,'png');
        
        // Desplegamos la imagen como una PNG usando un header
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
    }
?>