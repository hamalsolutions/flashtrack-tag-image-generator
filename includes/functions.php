<?php
require '../vendor/autoload.php';
define("FONT_PATH", $_ENV["FONT_PATH"]);

function cutline($filename,$cabeza,$line_no=-1){
    $strip_return = FALSE;
    
    $data = file($filename);
    $pipe = fopen($filename,'w'); 
    $size = count($data);

    $skip = ($line_no == -1)?($size-1):($line_no-1);
        
    fputs($pipe,$cabeza);
    for($line=0; $line<$size; $line++)
        if($line != $skip){
            $textoLimpio = str_replace(chr(150),"-",$data[$line]);
            $textoLimpio = str_replace(chr(160),"",$textoLimpio);
            if ($textoLimpio <> "\r\n")
                if (substr($textoLimpio,0,1) <> ',')
                    fputs($pipe,"\r\n".$textoLimpio);
        } else
            $strip_return=TRUE;

    return $strip_return;
}

function quitarColumnasVacias($cadena,$posiciones) {
    $newArray = array();
    $valores = explode(",",$cadena);
    $valoresInd = 0;
    $i = 0;
    foreach ($valores as $valor) {
        if ($valoresInd <> $posiciones[$i])
            array_push($newArray,$valor);
        else
            $i++;
        
        $valoresInd++;
    }
    
    $newCadena = implode(",",$newArray);
    return $newCadena;
}

function cutline2($filename,$cabeza,$apuntadores,$line_no=-1) {
    $strip_return = FALSE;
    
    $data = file($filename);
    $pipe = fopen($filename,'w');
    $size = count($data);
    
    $skip = ($line_no == -1)?($size-1):($line_no-1);

    fputs($pipe,$cabeza);
    for($line=0; $line<$size; $line++)
        if($line != $skip) {
            $textoLimpio = str_replace(chr(150),"-",$data[$line]);
            $textoLimpio = str_replace(chr(160),"",$textoLimpio);
            fputs($pipe,"\r\n".quitarColumnasVacias($textoLimpio,$apuntadores));
        }
        else
            $strip_return = TRUE;

    return $strip_return;
}

function primerCambio($bad, $good) {
    global $data, $flag, $num;
        if (isset($_POST[$bad])) {
            for ($f=0; $f < $num; $f++) {
                if ($data[$f] == $_POST[$bad])
                    $data[$f] = $good;
                $flag = 1;
            }
        }
    return $flag;
}

function seleciones($bad, $good, $indexVar) {
    global $num, $data;
    if (empty($indexVar)) {
        echo $good .': ';
        echo '<select name="'. $bad .'">';
        echo '<option value=""> </option>';
        
        for ($i=0; $i<$num; $i++)
            echo '<option value="'. $data[$i] .'">'. $data[$i] .'</option>';
        
        echo '</select>';
        echo '<p></p>';
    }
}

function selecciones($bad, $good, $indexVar) {
    global $num, $data;
    if($indexVar<>'0')
        if ($indexVar == '|') {
            echo $good .': ';
            echo '<select name="'. $bad .'">';
            echo '<option value=""> </option>';
            
            for ($i=0; $i<$num; $i++)
                echo '<option value="'. $data[$i] .'">'. $data[$i] .'</option>';
            
            echo '</select>';
            echo '<p></p>';
        }
}

function segundoCambio() {
    global $flag, $csvfile, $new_headers;
    if ($flag == 1) {
            $columnasVacias = array();
            $borrarColumnasVacias = FALSE; 
            $encabezado = '';
            for ($i=0;$i<count($new_headers);$i++) {
                if($new_headers[$i]<>'') {
                    $encabezado.=$new_headers[$i];
                    if ($i<>(count($new_headers)-1))
                    $encabezado.=','; 
                } else {
                    array_push($columnasVacias,$i);
                    $borrarColumnasVacias = TRUE;
                }
            }
            
            if ($borrarColumnasVacias)
                cutline2('../../csv/'.$csvfile,$encabezado,$columnasVacias,1);
            else
                cutline('../../csv/'.$csvfile,$encabezado,1);
            
            $flag == 0;
        }
}

function getvar($name) {
    global $_GET, $_POST;
    
    if (isset($_GET[$name])) 
        return $_GET[$name];
    else if (isset($_POST[$name])) 
        return $_POST[$name];
    else 
        return false;
}


// Good
function sinSigno($number) {
    $length = strlen($number);
    $number = substr($number,0,1) == '$'?substr($number,1,$length-1):$number;
    return $number;
}

// Good
function dollarSign($number) {
    $number = str_replace('$','',$number);
    if (!empty($number))
        $number = '$'.$number;
    
    return $number;
}

function suffix($text, $value) {
    $text = str_replace(strtolower($value), '', trim(strtolower($text)));
    if (!empty($text)) {
        $text .= $value;
    }
    return $text;
}

// Flashtrak format tool creator text validator
function adjustTextHorizontally($fontSize, $angle, $font, $value, $xPoint, $yPoint, $width) {
    $maxWidth = $width - (abs($xPoint) * 2); // Maximum width available for the text
    
    do {
        $fontSize--;
        
        // Calculate the text size using the updated font size
        $valueSize = imagettfbbox($fontSize, $angle, $font, stripslashes($value));
        
        $textWidth = $valueSize[2] - $valueSize[0]; // Width of the text

        // Check if the text fits within the bounds
        if ($textWidth <= $maxWidth ) {
            // Calculate the new x and y positions to center the text
            $x = $xPoint + ($maxWidth - $textWidth) / 2;
            
            return $fontSize;
        }
    } while ($fontSize > 0);
    
    // If the font size reaches 0 and the text still doesn't fit, return an error or handle it accordingly
    return false;
}

function puntoCentrado_2($text,$font,$fontSize,$angle=0,$xPoint) {
    $tb = imagettfbbox($fontSize,0,$font,$text);
    $x = 0;
    $overflowW = (($xPoint + $tb[2]) > FORMAT_WIDTH);
    $overflowH = (($xPoint + $tb[2]) > FORMAT_HEIGHT);

    switch ($angle) {
        case '0':   if ($overflowW) {
                        $x = ceil((FORMAT_WIDTH - $tb[2]));
                    }else{
                        $x = $xPoint;
                    }
                    break;
        case '90':  if ($overflowH) {
                        $x = ceil((FORMAT_HEIGHT - $tb[2]));
                    }else{
                        $x = $xPoint;
                    }
                    break;
        case '270': if ($overflowH) {
                        $x = ceil((FORMAT_HEIGHT - $tb[2]));
                    }else{
                        $x = $xPoint;
                    }
                    break;
    }
    return $x;
}

// Flashtrak format tool creator text validator
function textoAjustado($value,$xPoint,$yPoint,$width,$height,$font,$color,$fontSize,$angle,$dollarSign,$showEmptyOnRed=TRUE) {
    global $img,$m_text_color,$mtext;
    
    if ($dollarSign == 1)
        $value = dollarSign($value);
    if ($dollarSign == -1)
        $value = sinSigno($value);
    
    if ( (is_int($value) && empty($value)) || (is_string($value) && $value=='') ) {
        if ($showEmptyOnRed) {
            $value = $mtext;
        } else {
            $value = '';
        }
        $color = $m_text_color;
    }


    if ($angle == 90 || $angle == 270) {
        //$fontSize = $fontSize * 0.69;
    } else {
        //$fontSize = $fontSize * 0.78;
        $fontSizeAdjusted = adjustTextHorizontally($fontSize, $angle, $font, $value, $xPoint, $yPoint, FORMAT_WIDTH);
        if ($fontSizeAdjusted !== false) {
            $fontSize = $fontSizeAdjusted;
        }
    }
    
    switch ($angle) {
        case '0':   imagettftext($img,$fontSize,$angle,puntoCentrado_2($value,$font,$fontSize,0,$xPoint),$yPoint,$color,$font,stripslashes($value));
                    break;
        case '90':  imagettftext($img,$fontSize,$angle,puntoCentrado_2($value,$font,$fontSize,90,$xPoint),$yPoint-$height,$color,$font,stripslashes($value));
                    break;
        case '270': imagettftext($img,$fontSize,$angle,puntoCentrado_2($value,$font,$fontSize,270,$xPoint),$yPoint-$height,$color,$font,stripslashes($value));
                    break;
        default:    imagettftext($img,$fontSize,$angle,puntoCentrado_2($value,$font,$fontSize,0,$xPoint),$yPoint,$color,$font,stripslashes($value));
                    break;
    }
}

// Good
function texto($value,$xPoint,$yPoint,$align,$leftMargin,$font,$color,$fontSize,$angle,$dollarSign,$showEmptyOnRed=TRUE) {
    global $img,$m_text_color,$mtext;
    
    if ($dollarSign == 1)
        $value = dollarSign($value);
    if ($dollarSign == -1)
        $value = sinSigno($value);
    
    if ( (is_int($value) && empty($value)) || (is_string($value) && $value=='') ) {
        if ($showEmptyOnRed) {
            $value = $mtext;
        } else {
            $value = '';
        }
        $color = $m_text_color;
    }
    
    switch($align) {
        case '0': switch ($angle) {
                        case '0':   imagettftext($img,$fontSize,$angle,$xPoint,$yPoint,$color,$font,stripslashes($value));
                                    break;
                        case '90':  imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-$xPoint,$color,$font,stripslashes($value));
                                    break;
                        case '270': imagettftext($img,$fontSize,$angle+0.5,FORMAT_WIDTH-$yPoint,$xPoint,$color,$font,stripslashes($value));
                                    break;
                        default:    imagettftext($img,$fontSize,$angle,$xPoint,$yPoint,$color,$font,stripslashes($value));
                    }
                    return (strlen($value)*9)+$xPoint;
                    break;
        case '1': switch ($angle) {
                        case '0':   imagettftext($img,$fontSize,$angle,puntoCentrado($value,$font,$fontSize),$yPoint,$color,$font,stripslashes($value));
                                    break;
                        case '90':  imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-puntoCentrado($value,$font,$fontSize,$angle),$color,$font,stripslashes($value));
                                    break;
                        case '270': imagettftext($img,$fontSize,$angle+0.3,FORMAT_WIDTH-$yPoint,puntoCentrado($value,$font,$fontSize,$angle),$color,$font,stripslashes($value));
                                    break;
                        default:    imagettftext($img,$fontSize,$angle,puntoCentrado($value,$font,$fontSize),$yPoint,$color,$font,stripslashes($value));
                    }
                    return puntoCentrado($value,$font,$fontSize);
                    break;
        case '2': switch ($angle) {
                        case '0':   imagettfJustifytext($img,$fontSize,$yPoint,$color,$font,FORMAT_WIDTH-$leftMargin,FORMAT_HEIGHT,stripslashes($value));
                                    break;
                        case '90':  imagettfJustifytext($img,$fontSize,$yPoint,$color,$font,$leftMargin,FORMAT_WIDTH,stripslashes($value),$angle);
                                    break;
                        case '270': imagettfJustifytext($img,$fontSize,FORMAT_WIDTH-$yPoint,$color,$font,FORMAT_HEIGHT-$leftMargin,FORMAT_WIDTH,stripslashes($value),$angle);
                                    break;
                    }
                    break;
        case '3': switch ($angle) {
                        case '0':   imagettftext($img,$fontSize,$angle,puntoCentradoEnSeccion($value,$font,$fontSize,FORMAT_WIDTH-$leftMargin),$yPoint,$color,$font,stripslashes($value));
                                    break;
                        case '90':  imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-puntoCentradoEnSeccion($value,$font,$fontSize,FORMAT_HEIGHT-$leftMargin),$color,$font,stripslashes($value));
                                    break;
                        case '270': imagettftext($img,$fontSize,$angle+0.5,FORMAT_WIDTH-$yPoint,puntoCentradoEnSeccion($value,$font,$fontSize,FORMAT_HEIGHT-$leftMargin),$color,$font,stripslashes($value));
                                    break;
                    }
                    break;
    }
}

// Good
function parrafo($value,$xPoint,$yPoint,$align,$leftMargin,$font,$color,$fontSize,$angle,$maxChars,$lineSpacing,$addSpaceToSimbols=true) {
    global $img,$m_text_color,$mtext;
    
    if ( (is_int($value) && empty($value)) || (is_string($value) && $value=='') ) {
        $value = $mtext;
        $color = $m_text_color;
    }
    if ($addSpaceToSimbols) {
        $value = str_replace('/', ' / ', $value);
        $value = str_replace('-', ' - ', $value);
        $value = str_replace(',', ', ', $value);
        $value = str_replace('(', ' (', $value);
        $value = str_replace(')', ') ', $value);
    }
    if (strpos($value, ' ')==FALSE || strpos($value, ' ') > $maxChars-1) {
        $value = substr_replace($value, ' ', $maxChars-2, 0);
    }
    switch($align) {
        case '0': switch ($angle) {
                case '0':   while (strlen($value)>$maxChars) {
                    if ( substr($value,$maxChars+1,0)==' ' && substr($value,$maxChars+1,0)<>'%') {
                        texto(stripslashes(substr($value,0,$maxChars)),$xPoint,$yPoint,0,0,$font,$color,$fontSize,$angle,0);
                        $value = substr($value,$maxChars+1,strlen($value));
                        $yPoint+=$lineSpacing;
                    } else {
                        $newMaxLengthInTheLine = $maxChars;
                        while ((substr($value,$newMaxLengthInTheLine,1)==' ' && substr($value,$newMaxLengthInTheLine-1,1)=='%') || (substr($value,$newMaxLengthInTheLine,1)<>' ')) {
                            $newMaxLengthInTheLine -= 1;
                        }
                        texto(stripslashes(substr($value,0,$newMaxLengthInTheLine)),$xPoint,$yPoint,0,0,$font,$color,$fontSize,$angle,0);
                        $value = substr($value,$newMaxLengthInTheLine+1,strlen($value));
                        $yPoint+=$lineSpacing;
                    }
                    }
                    texto(stripslashes($value),$xPoint,$yPoint,0,0,$font,$color,$fontSize,$angle,0);
                    break;
                case '90':  imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-$xPoint,$color,$font,stripslashes($value));
                    break;
                case '270': imagettftext($img,$fontSize,$angle+0.5,FORMAT_WIDTH-$yPoint,$xPoint,$color,$font,stripslashes($value));
                    break;
            }
            break;
        case '1': switch ($angle) {
                case '0':   while (strlen($value)>$maxChars) {
                        if ( substr($value,$maxChars+1,0)==' ') {
                            imagettftext($img,$fontSize,$angle,puntoCentrado(substr($value,0,$maxChars),$font,$fontSize,$angle),$yPoint,$color,$font,stripslashes(substr($value,0,$maxChars)));
                            $value = substr($value,$maxChars+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        } else {
                            $newMaxLengthInTheLine = $maxChars;
                            while (substr($value,$newMaxLengthInTheLine,1)<>' ')
                            $newMaxLengthInTheLine -= 1;
                            imagettftext($img,$fontSize,$angle,puntoCentrado(substr($value,0,$newMaxLengthInTheLine),$font,$fontSize,$angle),$yPoint,$color,$font,stripslashes(substr($value,0,$newMaxLengthInTheLine)));
                            $value = substr($value,$newMaxLengthInTheLine+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        }
                    }
                    imagettftext($img,$fontSize,$angle,puntoCentrado($value,$font,$fontSize,$angle),$yPoint,$color,$font,stripslashes($value));
                    break;
                case '90':  while (strlen($value)>$maxChars) {
                        if ( substr($value,$maxChars+1,0)==' ') {
                            imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-puntoCentrado(substr($value,0,$maxChars),$font,$fontSize,$angle),$color,$font,stripslashes(substr($value,0,$maxChars)));
                            $value = substr($value,$maxChars+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        } else {
                            $newMaxLengthInTheLine = $maxChars;
                            while (substr($value,$newMaxLengthInTheLine,1)<>' ')
                            $newMaxLengthInTheLine -= 1;
                            imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-puntoCentrado(substr($value,0,$newMaxLengthInTheLine),$font,$fontSize,$angle),$color,$font,stripslashes(substr($value,0,$newMaxLengthInTheLine)));
                            $value = substr($value,$newMaxLengthInTheLine+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        }
                    }
                    imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-puntoCentrado($value,$font,$fontSize,$angle),$color,$font,stripslashes($value));
                    break;
                case '270': while (strlen($value)>$maxChars) {
                        $angle = 270.5;
                        if ( substr($value,$maxChars+1,0)==' ') {
                            imagettftext($img,$fontSize,$angle,FORMAT_WIDTH-$yPoint,puntoCentrado(substr($value,0,$maxChars),$font,$fontSize,270),$color,$font,stripslashes(substr($value,0,$maxChars)));
                            $value = substr($value,$maxChars+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        } else {
                            $newMaxLengthInTheLine = $maxChars;
                            while (substr($value,$newMaxLengthInTheLine,1)<>' ')
                            $newMaxLengthInTheLine -= 1;
                            imagettftext($img,$fontSize,$angle,FORMAT_WIDTH-$yPoint,puntoCentrado(substr($value,0,$newMaxLengthInTheLine),$font,$fontSize,270),$color,$font,stripslashes(substr($value,0,$newMaxLengthInTheLine)));
                            $value = substr($value,$newMaxLengthInTheLine+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        }
                    }
                    imagettftext($img,$fontSize,$angle,FORMAT_WIDTH-$yPoint,puntoCentrado($value,$font,$fontSize,270),$color,$font,stripslashes($value));
                    //imagettftext($img,$fontSize,$angle+0.5,FORMAT_WIDTH-$yPoint,puntoCentrado($value,$font,$fontSize,$angle),$color,$font,stripslashes($value));
                    break;
            }
            break;
        case '2': switch ($angle) {
                case '0':   while (strlen($value)>$maxChars) {
                        if ( substr($value,$maxChars+1,0)==' ') {
                            imagettfJustifytext($img,$fontSize,$yPoint,$color,$font,FORMAT_WIDTH-$leftMargin,FORMAT_HEIGHT,stripslashes(substr($value,0,$maxChars)));
                            $value = substr($value,$maxChars+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        } else {
                            $newMaxLengthInTheLine = $maxChars;
                            while (substr($value,$newMaxLengthInTheLine,1)<>' ')
                            $newMaxLengthInTheLine -= 1;
                            imagettfJustifytext($img,$fontSize,$yPoint,$color,$font,FORMAT_WIDTH-$leftMargin,FORMAT_HEIGHT,stripslashes(substr($value,0,$newMaxLengthInTheLine)));
                            $value = substr($value,$newMaxLengthInTheLine+1,strlen($value));
                            $yPoint+=$lineSpacing;
                        }
                    }
                    imagettfJustifytext($img,$fontSize,$yPoint,$color,$font,FORMAT_WIDTH-$leftMargin,FORMAT_HEIGHT,stripslashes($value));
                    break;
                case '90':  imagettfJustifytext($img,$fontSize,$yPoint,$color,$font,$leftMargin,FORMAT_WIDTH,stripslashes($value),$angle);
                    break;
                case '270': imagettfJustifytext($img,$fontSize,FORMAT_WIDTH-$yPoint,$color,$font,FORMAT_HEIGHT-$leftMargin,FORMAT_WIDTH,stripslashes($value),$angle);
                    break;
            }
            break;
        case '3': switch ($angle) {
                case '0':   imagettftext($img,$fontSize,$angle,puntoCentradoEnSeccion($value,$font,$fontSize,FORMAT_WIDTH-$leftMargin),$yPoint,$color,$font,stripslashes($value));
                    break;
                case '90':  imagettftext($img,$fontSize,$angle,$yPoint,FORMAT_HEIGHT-puntoCentradoEnSeccion($value,$font,$fontSize,FORMAT_HEIGHT-$leftMargin),$color,$font,stripslashes($value));
                    break;
                case '270': imagettftext($img,$fontSize,$angle+0.5,FORMAT_WIDTH-$yPoint,puntoCentradoEnSeccion($value,$font,$fontSize,FORMAT_HEIGHT-$leftMargin),$color,$font,stripslashes($value));
                    break;
            }
            break;
    }
    return puntoCentrado($value,$font,$fontSize);
}

// Good
function cajaVacia($xPoint,$yPoint,$width,$height,$colorBorder,$angle=0) {
    global $img;
    if ($angle==0)
        imagerectangle($img,$xPoint,$yPoint,$width+$xPoint,$height+$yPoint,$colorBorder);
    else
        imagerectangle($img,FORMAT_WIDTH-$yPoint,$xPoint,(FORMAT_WIDTH-$yPoint)-$height,$xPoint+$width,$colorBorder);
}

// Good
function cajaRellena($xPoint,$yPoint,$width,$height,$colorBackground,$colorBorder,$angle=0) {
    global $img;
    if ($angle==0){
        imagerectangle($img,$xPoint,$yPoint,$width+$xPoint,$height+$yPoint,$colorBorder);
        imagefilledrectangle($img, $xPoint+1, $yPoint+1, $width+$xPoint-1, $height+$yPoint-1, $colorBackground);
    } else {
        imagerectangle($img,FORMAT_WIDTH-$yPoint,$xPoint,(FORMAT_WIDTH-$yPoint)-$height,$xPoint+$width,$colorBorder);
        imagefilledrectangle($img, FORMAT_WIDTH-$yPoint-1, $xPoint+1, (FORMAT_WIDTH-$yPoint)-$height+1, $xPoint+$width-1, $colorBackground);
    }
}

function agujero($x,$y) {
    global $img;
    $gray = color(200, 200, 200);
    $transparent = transparente();
    imagefilledellipse($img,$x,$y,13,13,$transparent);
    imageellipse($img,$x,$y,13,13,$gray);
}

function lineaHorizontal($xPoint,$yPoint,$length,$color=null, $thickness=1) {
    global $img;
    if (!$color)
        $color = color(0,0,0);
    for ($i=1;$i<=$thickness;$i++) {
        imageline($img,$xPoint,$yPoint,$xPoint+$length,$yPoint,$color);
        $yPoint++;
    }
}

function lineaVertical($xPoint,$yPoint,$length,$color,$thickness=1) {
    global $img;
    for ($i=1;$i<=$thickness;$i++) {
        imageline($img,$xPoint,$yPoint,$xPoint,$yPoint+$length,$color);
        $xPoint++;
    }
}

function perforacion($fWidth=169,$fHeight=300,$yPosition=248) {
    $gray = color(200, 200, 200);
    $transparent = transparente();
    
    if ($fWidth==169 && $fHeight==300) {
        $xPoint = 1;
        for($i=0;$i<=20;$i++) {
            cajaRellena($xPoint, $yPosition, 6, 1, $transparent, $gray);
            $xPoint +=8;
        }
    } else {
        $xPoint = 1;
        $numLines = round( ($fWidth*20) / 169);
        for($i=0;$i<=$numLines;$i++) {
            cajaRellena($xPoint, $yPosition, 6, 1, $transparent, $gray);
            $xPoint +=8;
        }
    }
}

// Good
function formato($width,$length,$bg_R,$bg_G,$bg_B,$angulo=0) {
    global $img, $m_text_color;
    
    define('FORMAT_WIDTH',$width);
    define('FORMAT_HEIGHT',$length);
        
        // Creamos la imagen
    $img = imagecreatetruecolor(FORMAT_WIDTH, FORMAT_HEIGHT);
        
        // Configuramos un fondo blanco con texto negro y graficos grises
    $bg_color = color($bg_R, $bg_G, $bg_B);
    $black = color(200, 200, 200);
    $m_text_color = color(255, 0, 0);
    
    switch ($angulo){
        case 0    :  cajaRellena(0,0,FORMAT_WIDTH-1, FORMAT_HEIGHT-1,$bg_color,$black);
                    break;
        case 90  :  cajaRellena(0,0,FORMAT_WIDTH-1, FORMAT_HEIGHT-1,$bg_color,$black);
                    break;
        case 270  :  cajaRellena(1,0,FORMAT_WIDTH, FORMAT_HEIGHT-1,$bg_color,$black);
                    break;
    }
}   

function setAsSticker($radioCorners) {
    global $conRoundCorners, $radioForCorners;
    $conRoundCorners = TRUE;
    $radioForCorners = $radioCorners;
}

// tested once not implemented
function getimg($url) {         
    $headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';              
    $headers[] = 'Connection: Keep-Alive';         
    $headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';         
    $user_agent = 'php';         
    $process = curl_init($url);         
    curl_setopt($process, CURLOPT_HTTPHEADER, $headers);         
    curl_setopt($process, CURLOPT_HEADER, 0);         
    curl_setopt($process, CURLOPT_USERAGENT, $user_agent); //check here         
    curl_setopt($process, CURLOPT_TIMEOUT, 30);         
    curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);         
    curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);         
    $return = curl_exec($process);         
    curl_close($process);         
    return $return;     
}

function setImageWithUrl($iconPath) {
    global $img;
    
    // to do

    // $url = $iconPath; 
    // $save_directory = "C:\Users\pedro\AppData\Local\Temp";
    // $save_name = "\duck.jpg";

    // $content = file_get_contents($url);
    // $fp = fopen($save_directory.$save_name, "w");
    // fwrite($fp, $content);
    // fclose($fp);

    // $icon = imagecreatefromjpeg("C:\Users\pedro\AppData\Local\Temp\duck.jpg");
        
    // imagecopy($img, $icon, 0, 0, 0, 0, 100, 75);
}

// flashtrak format tool creator image creator (its meant to be for barcodes but i guess it can be used for images aswell)
function setImageWithString($insertImg, $x, $y, $width, $height, $angle=0, $displayValue=1, $value=null) {
    global $img;

    $cpImage = imagecreatefromstring($insertImg);

    if ($width != 0 && $height != 0) {
        $cpImage = imagescale($cpImage, $width, $height);
    }

    // adds text to the image if display value is set to true
    if ($displayValue == 1 && $value != null) {
        $imgWidth  = imagesx($cpImage);
        $imgHeight = imagesy($cpImage);
        
        $font = fuente('arial.ttf');
        $color = imagecolorallocate($cpImage, 0,0,0);

        $fontSize = 16;
        // calculates the new height of the image and defines the text position
        $newHeight = $imgHeight + $fontSize + 10;
        $textX = 0;
        $textY = $imgHeight + $fontSize + 10;

        // adjusts the text size to fit the image
        $fontSize = adjustTextHorizontally($fontSize, 0, $font, $value, $textX, $textY, $imgWidth);

        // Calculate the position to center the text
        $textWidth = imagettfbbox($fontSize, 0, $font, $value)[2] - imagettfbbox($fontSize, 0, $font, $value)[0];
        $textX = ($imgWidth - $textWidth) / 2; // Center horizontally
    
        // creates a new image with the new height and a white bg and adds the text
        $cpImageWithText = imagecreatetruecolor($imgWidth, $newHeight);
        $bg = imagecolorallocate ($cpImageWithText, 255, 255, 255);
        imagefilledrectangle($cpImageWithText, 0, 0, $imgWidth, $newHeight, $bg);
        imagecopyresized($cpImageWithText, $cpImage, 0, 0, 0, 0, $imgWidth, $imgHeight, $imgWidth, $imgHeight);
        imagettftext($cpImageWithText, $fontSize, 0, $textX, $textY, $color, $font, $value);
        
        $cpImage = $cpImageWithText;
    }

    if ($angle != 0) {
        $cpImage = imagerotate($cpImage, $angle, 0);
    }

    $imgWidth  = imagesx($cpImage);
    $imgHeight = imagesy($cpImage);

    switch ($angle) {
        case '0':
            imagecopy($img, $cpImage, $x, $y, 0, 0, $imgWidth, $imgHeight);   
            break;
        case '90':
            imagecopy($img, $cpImage, $x, $y-$imgHeight, 0, 0, $imgWidth, $imgHeight);  
            break;
        case '270': 
            imagecopy($img, $cpImage, $x-$imgWidth, $y, 0, 0, $imgWidth, $imgHeight);  
            break;
        case '180': 
            imagecopy($img, $cpImage, $x-$imgWidth, $y-$imgHeight, 0, 0, $imgWidth, $imgHeight);  
            break;
        default:    
            imagecopy($img, $cpImage, $x, $y, 0, 0, $imgWidth, $imgHeight);   
    }
}

// define dd function
function dd($var, $die = true) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($die) die();
}

// flashtrak format tool creator barcode creator
function barcodeAjustado($value,$x,$y,$width=2,$height=100,$barcodeType,$angle=0,$defaultValue,$displayValue=1) {
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    $type = $generator::TYPE_CODE_128;

    // mode codes could be added check https://github.com/picqer/php-barcode-generator for more info
    // The frontend tool must add the extra cases if more are added here
    switch ($barcodeType) {
        case 'UPC':
            $type = $generator::TYPE_UPC_A;
            break;
        case 'EAN13':
            $type = $generator::TYPE_EAN_13;
            break;
        case 'EAN8':
            $type = $generator::TYPE_EAN_8;
            break;
        case 'CODE128':
            $type = $generator::TYPE_CODE_128;
            break;
        case 'CODE39':
            $type = $generator::TYPE_CODE_39;
            break;
        case 'MSI':
            $type = $generator::TYPE_MSI;
            break;
        default:
            break;
    }

    try {
        $png = $generator->getBarcode($value, $type, $width, $height);
        setImageWithString($png, $x, $y, 0, 0, $angle, $displayValue, $value);
    } catch (Exception $e) {
        $png = $generator->getBarcode($defaultValue, $type, $width, $height, array(255,0,0));
        setImageWithString($png, $x, $y, 0, 0, $angle, $displayValue, $defaultValue);
    }

}

// Good
function barcode($value,$x,$y,$scale,$length,$barcodeType,$angle=0) {
    global $upcValue,$conBarcode,$tipoBarcode,$barcodeSize,$totaly,$bartop,$barbottom,$barleft,$barrigth,$ancho,$dientes,$withText,$textSize,$textLeft,$textTop,$numbersFont;
    
    $upcValue = $value;
    $conBarcode = TRUE;
    $tipoBarcode = $barcodeType;
    $barcodeSize = $scale;
    $barbottom = 0;
    switch ($angle) {
        case '0':   $totaly = $length+$y;
            $bartop = $y;
            $barleft = $x;
            break;
        case '90':  $totaly = (FORMAT_HEIGHT-$x)+$length;
            $bartop = FORMAT_HEIGHT-$x;
            $barleft = $y;
            break;
        case '270': $totaly = $length+$x;
            $bartop = $x;
            $barleft = FORMAT_WIDTH-$y;
            break;
    }
    
    $barrigth = 0;
    $ancho = 0;
}

// Good
function barcodeTexto($textScale,$marginLeft,$marginTop,$guardBarsMargin,$fontFileName) {
    global $withText,$textSize,$textLeft,$textTop,$numbersFont,$dientes;
    
    if ($textScale <> -1)
        $withText = TRUE;
    $textSize = $textScale;
    $textLeft = $marginLeft + 1;
    $textTop = $marginTop + 12;
    $dientes = $guardBarsMargin;
    $numbersFont = $fontFileName;
}

// Good
function transparente() {
    global $img;
    $color = imagecolorallocate($img, 66, 66, 66);
    imagecolortransparent($img,$color);
    return $color;
}

function transparente2() {
    global $img;
    $color = imagecolorallocatealpha($img, 66, 66, 66,110);
    imagecolortransparent($img,$color);
    return $color;
}

// Good
function color($R,$G,$B) {
    global $img;
    $color = imagecolorallocate($img, $R, $G, $B);
    return $color;
}

function imageCreateCorners($src, $w, $h, $radius) {
    
    $q = 2; # change this if you want
    $radius *= $q;

    # find unique color
    /*do {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        }
    while (imagecolorexact($src, $r, $g, $b) < 0);*/

    $nw = $w*$q;
    $nh = $h*$q;

    $img = imagecreatetruecolor($nw, $nh);
    $alphacolor = imagecolorallocatealpha($img, 66, 66, 66, 127);
    imagealphablending($img, false);
    imagesavealpha($img, true);
    imagefilledrectangle($img, 0, 0, $nw, $nh, $alphacolor);

    imagefill($img, 0, 0, $alphacolor);
    imagecopyresampled($img, $src, 0, 0, 0, 0, $nw, $nh, $w, $h);

    imagearc($img, $radius-1, $radius-1, $radius*2, $radius*2, 180, 270, $alphacolor);
    imagefilltoborder($img, 0, 0, $alphacolor, $alphacolor);
    imagearc($img, $nw-$radius, $radius-1, $radius*2, $radius*2, 270, 0, $alphacolor);
    imagefilltoborder($img, $nw-1, 0, $alphacolor, $alphacolor);
    imagearc($img, $radius-1, $nh-$radius, $radius*2, $radius*2, 90, 180, $alphacolor);
    imagefilltoborder($img, 0, $nh-1, $alphacolor, $alphacolor);
    imagearc($img, $nw-$radius, $nh-$radius, $radius*2, $radius*2, 0, 90, $alphacolor);
    imagefilltoborder($img, $nw-1, $nh-1, $alphacolor, $alphacolor);
    imagealphablending($img, true);
    imagecolortransparent($img, $alphacolor);

    # resize image down
    $dest = imagecreatetruecolor($w, $h);
    imagealphablending($dest, false);
    imagesavealpha($dest, true);
    imagefilledrectangle($dest, 0, 0, $w, $h, $alphacolor);
    imagecopyresampled($dest, $img, 0, 0, 0, 0, $w, $h, $nw, $nh);

    # output image
    $res = $dest;
    imagedestroy($src);
    imagedestroy($img);
    
    return $res;
}

function imageFileCreateCorners($sourceImageFile, $radius) {
    # test source image
    if (file_exists($sourceImageFile)) {
    $res = is_array($info = getimagesize($sourceImageFile));
    } 
    else $res = false;

    # open image
    if ($res) {
        $w = $info[0];
        $h = $info[1];
        switch ($info['mime']) {
            case 'image/jpeg': $src = imagecreatefromjpeg($sourceImageFile);
            break;
            case 'image/gif': $src = imagecreatefromgif($sourceImageFile);
            break;
            case 'image/png': $src = imagecreatefrompng($sourceImageFile);
            break;
            default: 
            $res = false;
        }
    }

    # create corners
    if ($res) {

    $q = 10; # change this if you want
    $radius *= $q;

    # find unique color
    do {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
    }
    while (imagecolorexact($src, $r, $g, $b) < 0);

    $nw = $w*$q;
    $nh = $h*$q;

    $img = imagecreatetruecolor($nw, $nh);
    $alphacolor = imagecolorallocatealpha($img, $r, $g, $b, 127);
    imagealphablending($img, false);
    imagesavealpha($img, true);
    imagefilledrectangle($img, 0, 0, $nw, $nh, $alphacolor);

    imagefill($img, 0, 0, $alphacolor);
    imagecopyresampled($img, $src, 0, 0, 0, 0, $nw, $nh, $w, $h);

    imagearc($img, $radius-1, $radius-1, $radius*2, $radius*2, 180, 270, $alphacolor);
    imagefilltoborder($img, 0, 0, $alphacolor, $alphacolor);
    imagearc($img, $nw-$radius, $radius-1, $radius*2, $radius*2, 270, 0, $alphacolor);
    imagefilltoborder($img, $nw-1, 0, $alphacolor, $alphacolor);
    imagearc($img, $radius-1, $nh-$radius, $radius*2, $radius*2, 90, 180, $alphacolor);
    imagefilltoborder($img, 0, $nh-1, $alphacolor, $alphacolor);
    imagearc($img, $nw-$radius, $nh-$radius, $radius*2, $radius*2, 0, 90, $alphacolor);
    imagefilltoborder($img, $nw-1, $nh-1, $alphacolor, $alphacolor);
    imagealphablending($img, true);
    imagecolortransparent($img, $alphacolor);

    # resize image down
    $dest = imagecreatetruecolor($w, $h);
    imagealphablending($dest, false);
    imagesavealpha($dest, true);
    imagefilledrectangle($dest, 0, 0, $w, $h, $alphacolor);
    imagecopyresampled($dest, $img, 0, 0, 0, 0, $w, $h, $nw, $nh);

    # output image
    $res = $dest;
    imagedestroy($src);
    imagedestroy($img);
    }

    return $res;
}

// Good
function colorVic($field) {
    // this coded added to be able to call the VICS color by calling the PMS Color RGB values
    $colors = [
        '112C' => [254, 25, 48],
        '113C' => [254, 25, 48],
        '114C' => [254, 25, 48],
        '115C' => [254, 25, 48],
        '116C' => [254, 25, 48],
        '117C' => [254, 25, 48],
    ];

    $bar = $colors['112C'];

    $field = str_replace(' ','',$field);
    switch($field) {
        case 'XXSMALL':
        case '2XS':
        case 'XXS': $color = color(227, 126, 179);
                    break;
        case '2T/NP2':
        case 'X-SMALL':
        case 'XSMALL':
        case 'PETITE':
        case 'PP':
        case 'PXS':
        case 'XS':  $color = color(238, 49, 36);
            break;
        case 'XS/XCH(4-5)':
        case 'XS/XCH(4/5)':  $color = color(206, 17, 38);
            break;
        case 'XS(4/5)':  
        case 'XSECH(4/5)':
        case 'XS/XC-4/5':  
        case 'XS/ECH-4/5':  $color = color(227,24,55);
            break;
        case 'SMALL':
        case 'S8':
        case 'S/4':
        case 'S(7/8)':
        case 'S(8-10)':
        case 'S(8)':
        case 'PS':
        case 'S/M':
        case 'S':   $color = color(250, 166, 52);
            break;
        case '3T/NP3':
        case 'S/CH(6-7)':
        case 'S/CH(6/7)':
        case 'S/C-6/7': 
        case 'S/C(6-7)':  $color = color(249, 99, 2);
            break;
        case 'S(6/7)':
        case 'S6/6X':    
        case 'SCH(6/7)':
        case 'S/CH-6/7':  $color = color(245, 132, 38);
            break;
        case 'S(34/36)':  $color = color(232, 17, 45);
            break;
        case '4T/NP4':
        case 'MEDIUM':
        case 'M10/12':
        case 'M/5':
        case 'M(12-14)':
        case 'M(10/12)':
        case 'M(7/8)':
        case 'M(8)':
        case 'MM(8)':
        case 'M/M-8':
        case 'M/M(8)':
        case 'L(42/44)':
        case 'PM':
        case 'M':   $color = color(255, 239, 0);
            break;
        case 'M(38/40)':  $color = color(247, 127, 0);
                    break;
        case 'LARGE':
        case 'L14/16':
        case 'L/6':
        case 'L(16-18)':
        case 'L(14/16)':
        case 'L(14)':
        case 'PL':
        case 'L/XL':
        case 'L':   $color = color(0, 169, 79);
            break;
        case '5T/NP5':
        case 'L/G(10-12)': 
        case 'L/G(10/12)':
        case 'L/G-10/12': 
        case '10/12':  $color = color(0, 158, 73);
            break;
        case 'L(10/12)': 
        case 'LG(10/12)':  $color = color(0, 169, 79);
            break;
        case 'XLARGE':
        case 'X-LARGE':
        case 'XL18/20':
        case 'XL/7':
        case 'XL(20)':
        case 'XL(18/20)':
        case 'PXL':
        case '0X/1X':
        case 'XL':  $color = color(0, 121, 193);
            break;
        case 'XL/XG(14-16)':
        case 'XL/XG(14/16)':
        case 'XL/XG-14/16': 
        case '14/16':  $color = color(119, 150, 178);
            break;
        case 'XL(16)':
        case 'XL(14/16)':
        case 'XLEG(14/16)':
        case 'XL/EG-14/16':  $color = color(147, 151, 203);
                    break;
        case 'XL(46/48)':  $color = color(0, 175, 147);
                    break;
        case '2XLARGE':
        case '2XLT':
        case '2XL':
        case 'XXLARGE':
        case 'XXL(22/24)':
        case '2X/3X':
        case 'XXL': $color = color(125, 65, 153);
                    break;
        case 'XXL/2XG(18-20)':
        case 'XXL/2XG(18/20)':
        case '2XL(18/20)':
        case '2XL(18)':
        case 'XXL/XXG-18/20':
        case 'XXL/2XG(18)':  $color = color(0, 81, 186);
                    break;
        case 'XXL(18/20)': 
        case '2XLEEG(18/20)':
        case 'XXLEEG(18/20)':
        case 'XXL/EEG-18/20':
        case 'XXL/EEG-18':
        case 'XXL/XXG(18)':  $color = color(0, 103, 177);
                    break;
        case '2XL(50/52)':  $color = color(137, 119, 186);
                    break;
        case '3XLARGE':
        case '3XLT':
        case '3XL':
        case 'XXXLARGE':
        case 'XXXL':$color = color(247, 156, 136);
                    break;
        case 'XXXL/3XG(18-20)':
        case 'XXXL/3XG(18/20)':  $color = color(43, 38, 91);
                    break;
        case '3XL(18/20)':  $color = color(17, 23, 94);
                    break;
        case '3XL(54/56)':  $color = color(0, 0, 0);
                    break;
        case '4XLARGE':
        case '4XLT':
        case 'XXXXLARGE':
        case 'XXXXL':$color = color(222, 180, 8);
                    break;
        case '5XLT':  $color = color(127, 186, 0);
                    break;
        case '0':
        case '0L':
        case '1L':
        case '0S':
        case '0P':
        case '1':
        case '1S':
        case '1T':
        case '12W':
        case '27':
        case '0X':
        case '1X':  $color = color(230, 231, 232);
                    break;
        case '2':
        case '2P':
        case '2T':
        case '14W':
        case '28':
        case '2X':  $color = color(251, 199, 189);
                    break;
        case '3':
        case '3S':
        case '3T':
        case '16W':
        case '3/4':
        case '29':
        case '3X':  $color = color(231, 166, 20);
                    break;
        case '4':
        case '4P':
        case '4T':
        case '18W':
        case '3M':
        case '3 MOS':
        case '3M':
        case '30':
        case '4X':  $color = color(231, 239, 187);
                    break;
        case '5':
        case '5L':
        case '5S':
        case '5T':
        case '20W':
        case '5/6':
        case '6M':
        case '6 MOS':
        case '6M':
        case '31':  $color = color(114, 205, 244);
                    break;
        case '6':
        case '6P':
        case '22W':
        case '9M':
        case '9 MOS':
        case '9M':
        case '32':  $color = color(231, 206, 228);
                    break;
        case '7':
        case '7S':
        case '6X':
        case '24W':
        case '7/8':
        case '12M':
        case '12 MOS':
        case '12M':
        case '33':  $color = color(253, 194, 129);
                    break;
        case '8':
        case '8P':
        case '26W':
        case '7X':
        case '18M':
        case '18 MOS':
        case '18M':
        case '34':  $color = color(143, 226, 175);
                    break;
        case '9':
        case '9L':
        case '9S':
        case '28W':
        case '9/10':
        case '24M':
        case '24 MOS':
        case '24M':
        case '36':  $color = color(0, 165, 217);
                    break;
        case '10':
        case '10P':
        case '13':
        case '13S':
        case '32W':
        case '13/14':
        case '48M':
        case '48 MOS':
        case '48M':
        case '40':  $color = color(250, 200, 203);
                    break;
        case '11':
        case '11L':
        case '11S':
        case '30W':
        case '11/12':
        case '36M':
        case '36 MOS':
        case '36M':
        case '38':  $color = color(179, 162, 206);
                    break;
        case '12':
        case '12P':
        case '15':
        case '15S':
        case '15L':
        case '34W':
        case '15/16':
        case '21':
        case '42':  $color = color(218, 180, 163);
                    break;
        case '14':
        case '14P':
        case '36W':
        case '17':
        case '17S':
        case '44':  $color = color(184, 179, 8);
                    break;
        case '16':
        case '16P':
        case '19':
        case '25':
        case '46':  $color = color(0, 177, 176);
                    break;
        case '18':
        case '21':
        case '48':
        case '26':  $color = color(118, 134, 194);
                    break;
        case '4XB':  $color = color(201, 151, 0);
            break;
        default:    $color = color(255, 255, 255);
    }
    return $color;
}

// Good
function colorVicGirls($field) {
    $field = str_replace(' ','',$field);
    switch($field) {
        case 'XS/XCH(4-5)': $color = color(237, 0, 145);
                    break;
        case 'S/CH(3/5)':
        case 'S/CH(6-6X)':  $color = color(232, 17, 45);
                    break;
        case 'M(7/9)':
        case 'M(7-8)':  $color = color(247, 127, 0);
                    break;
        case 'L/G(11/13)':
        case 'L/G(10-12)':  $color = color(247,226,20);
                    break;
        case 'XL/XG(15/17)':
        case 'XL/XG(14-16)':   $color = color( 0, 175, 147);
                    break;
        case 'XXL/2XG(19)':
        case 'XXL/2XG(18)':  $color = color(137, 119, 186);
                    break;
        default:    $color = color(255, 255, 255);
    }
    return $color;
}

function getSizeTranslations($size)
{
    $size = str_replace(' ', '', trim($size));
    $translations = array(
        'ES/FR/PT' => $size,
        'DE' => $size,
        'UK' => $size
    );
    switch ($size) {
        case 'PP':
        case 'PXS':
            $translations['UK'] = 'XS';
            break;
        case 'PS':
            $translations['UK'] = 'S';
            break;
        case 'PM':
            $translations['UK'] = 'M';
            break;
        case 'PL':
            $translations['UK'] = 'L';
            break;
        case 'PXL':
            $translations['UK'] = 'XL';
            break;
        case '0X':
            $translations['ES/FR/PT'] = 'L';
            $translations['DE'] = 'L';
            $translations['UK'] = '18/20';
            break;
        case '1X':
            $translations['ES/FR/PT'] = 'L';
            $translations['DE'] = 'L';
            $translations['UK'] = '20/22';
            break;
        case '2X':
            $translations['ES/FR/PT'] = 'XL';
            $translations['DE'] = 'XL';
            $translations['UK'] = '22/24';
            break;
        case '3X':
            $translations['ES/FR/PT'] = 'XXL';
            $translations['DE'] = 'XXL';
            $translations['UK'] = '24/26';
            break;
        case '0X/1X':
            $translations['ES/FR/PT'] = 'L';
            $translations['DE'] = 'L';
            $translations['UK'] = '0X/01X';
            break;
        case '2X/3X':
            $translations['ES/FR/PT'] = 'XL/XXL';
            $translations['DE'] = 'XL/XXL';
            break;
        case '1SZ':
            $translations['ES/FR/PT'] = 'Unitalla';
            $translations['DE'] = 'Unitalla';
            $translations['UK'] = 'NOSZ';
            break;
        case '0':
        case '0P':
            $translations['ES/FR/PT'] = '34';
            $translations['DE'] = '30';
            $translations['UK'] = '4';
            break;
        case '2':
        case '2P':
            $translations['ES/FR/PT'] = '36';
            $translations['DE'] = '32';
            $translations['UK'] = '6';
            break;
        case '4':
        case '4P':
            $translations['ES/FR/PT'] = '38';
            $translations['DE'] = '34';
            $translations['UK'] = '8';
            break;
        case '6':
        case '6P':
            $translations['ES/FR/PT'] = '40';
            $translations['DE'] = '36';
            $translations['UK'] = '10';
            break;
        case '8':
        case '8P':
            $translations['ES/FR/PT'] = '42';
            $translations['DE'] = '38';
            $translations['UK'] = '12';
            break;
        case '10':
        case '10P':
            $translations['ES/FR/PT'] = '44';
            $translations['DE'] = '40';
            $translations['UK'] = '14';
            break;
        case '12':
        case '12P':
            $translations['ES/FR/PT'] = '46';
            $translations['DE'] = '42';
            $translations['UK'] = '16';
            break;
        case '14':
        case '14P':
            $translations['ES/FR/PT'] = '48';
            $translations['DE'] = '44';
            $translations['UK'] = '18';
            break;
        case '16':
        case '16P':
            $translations['ES/FR/PT'] = '50';
            $translations['DE'] = '46';
            $translations['UK'] = '20';
            break;
        case '18':
            $translations['ES/FR/PT'] = '52';
            $translations['DE'] = '43';
            $translations['UK'] = '22';
            break;
        case '24':
        case '14W':
        case '14WP':
            $translations['ES/FR/PT'] = '50/52';
            $translations['DE'] = '46/48';
            $translations['UK'] = '18';
            break;
        case '25':
        case '16W':
        case '16WP':
            $translations['ES/FR/PT'] = '52/54';
            $translations['DE'] = '48/50';
            $translations['UK'] = '20';
            break;
        case '26':
        case '18W':
        case '18WP':
            $translations['ES/FR/PT'] = '54/56';
            $translations['DE'] = '50/52';
            $translations['UK'] = '22';
            break;
        case '27':
        case '20W':
        case '20WP':
            $translations['ES/FR/PT'] = '56/58';
            $translations['DE'] = '52/54';
            $translations['UK'] = '24';
            break;
        case '28':
        case '22W':
        case '22WP':
            $translations['ES/FR/PT'] = '58/60';
            $translations['DE'] = '54/56';
            $translations['UK'] = '26';
            break;
        case '29':
        case '31':
        case '24W':
        case '24WP':
            $translations['ES/FR/PT'] = '60/62';
            $translations['DE'] = '56/58';
            $translations['UK'] = '28';
            break;
        case '30':
        case '32':
        case '26W':
        case '26WP':
            $translations['ES/FR/PT'] = '62/64';
            $translations['DE'] = '58/60';
            $translations['UK'] = '30';
            break;
    }
    return $translations;
}

// Good
function fuente($fontFileName) {
    $font = FONT_PATH.$fontFileName;
    return $font;
}

// Good
function asignar($place,$defaultValue) {
    global $campo,$sample;
    if ($sample==2) {
        if (empty($campo[$place]))
            $valor = $defaultValue;
    } else
        $valor = $campo[$place];
    $valor = str_replace('  ', ' ', $valor);
    return $valor;
}
    
// Good
function puntoCentrado($text,$font,$fontSize,$angle=0) {
    $tb = imagettfbbox($fontSize,0,$font,$text);
    switch ($angle) {
        case '0': $x = ceil((FORMAT_WIDTH - $tb[2]) / 2 );
                    break;
        case '90': $x = ceil((FORMAT_HEIGHT - $tb[2]) / 2 );
                    break;
        case '270': $x = ceil((FORMAT_HEIGHT - $tb[2]) / 2 );
                    break;
    }
    return $x;
}

// Good
function puntoCentradoEnSeccion($text, $font, $fontSize, $anchura) {
    $tb = imagettfbbox($fontSize,0,$font,$text);
    $x = ceil(($anchura - $tb[2]) / 2 );
    return $x;
}

// Good 
function imagettfJustifytext($im, $fsize, $Y, $text_color, $font, $W, $H, $text,$angle = 0) {
    $X = 4;
    $_bx = imageTTFBbox($fsize,0,$font,$text);
    //$s = split("[\n]+", $text);
    $s = preg_split("/[\n]+/", $text);
    $__H = $Y;

    foreach($s as $key=>$val) {
        $_b = imageTTFBbox($fsize,0,$font,$val);
        $_W = abs($_b[2]-$_b[0]);
        //Definiendo la coordenada en X.
        if ($angle<>90)
            $_X = $W-$_W;
        else
            $_X = $W+$_W;
        //Definiendo la coordenada en Y.
        $_H = abs($_b[5]-$_b[3]); 
        $__H += $_H;
        switch ($angle) {
            case '0':   imagettftext($im, $fsize, $angle, $_X, $Y, $text_color, $font, $val);
                        break;
            case '90':  imagettftext($im, $fsize, $angle, $Y, $_X, $text_color, $font, $val);
                        break;
            case '270': imagettftext($im, $fsize, $angle+0.5, $Y, $_X, $text_color, $font, $val);
                        break;
        }
        $__H += 6;
    }       
}

// Good
function formatizarTexto($pattern, $text) {
    $textoFormatizado = '';
    $longitud = strlen($pattern);
    $arregloPattern = array();

    for ($i=0;$i<=$longitud;$i++)
    $arregloPattern[$i] = substr($pattern,$i,1);

    $textIndice = 0;

    for ($i=0;$i<=$longitud;$i++) {
        if ($arregloPattern[$i] == ' ')
            $textoFormatizado .= ' ';
        else {
            $textoFormatizado .= substr($text,$textIndice,1);
            $textIndice++;
        }
    }

    return $textoFormatizado;
}

// Good
function formatizarUPC_Texto($pattern, $text) {
    // return Formated Human Readable + Check Digit
    if(strlen($text) <= 11 )
        $text .= generate_upc_checkdigit($text) ;
    
    // $fullUPC = $text.$upcChkDigit;
    $textoFormatizado = '';
    $longitud = strlen($pattern);
    $arregloPattern = array();
    
    for ($i=0;$i<=$longitud;$i++)
    $arregloPattern[$i] = substr($pattern,$i,1);
    
    $textIndice = 0;
    
    for ($i=0;$i<=$longitud;$i++) {
        if ($arregloPattern[$i] == ' ')
            $textoFormatizado .= ' ';
        else {
            $textoFormatizado .= substr($text,$textIndice,1);
            $textIndice++;
        }
    }
    return $textoFormatizado;
}

// Good
function generate_upc_checkdigit($upc_code) {
    // return the check digit for an UPC-A Barcode Mod10
    $odd_total  = 0;
    $even_total = 0;

    for($i=0; $i<11; $i++) {
        if((($i+1)%2) == 0) {
            /* Sum even digits */
            $even_total += $upc_code[$i];
        
        } else {
            /* Sum odd digits */
            $odd_total += $upc_code[$i];
        }
    }

    $sum = (3 * $odd_total) + $even_total;

    /* Get the remainder MOD 10*/
    $check_digit = $sum % 10;

    /* If the result is not zero, subtract the result from ten. */
    return ($check_digit > 0) ? 10 - $check_digit : $check_digit;
}

// Good
function rotar($img, $rotation) {
    $width = imagesx($img);
    $height = imagesy($img);
    switch($rotation) {
        case 90: $newimg= @imagecreatetruecolor($height , $width );break;
        case 180: $newimg= @imagecreatetruecolor($width , $height );break;
        case 270: $newimg= @imagecreatetruecolor($height , $width );break;
        case 0: return $img;break;
        case 360: return $img;break;
    }
    if($newimg) {
        for($i = 0;$i < $width ; $i++) {
        for($j = 0;$j < $height ; $j++) {
            $reference = imagecolorat($img,$i,$j);
            //$r = ($reference >> 16) & 0xFF;         // Edited 1/4/2012  Leonel: tratando de aplicat transparencia en rotacion
            //$g = ($reference >> 8) & 0xFF;          //
            //$b = $reference & 0xFF;                 //
            //$transparency = ($reference >> 24) & 0x7F; //
            //$reference2 = imagecolorallocatealpha($img,$r,$g,$b,$transparency); //
            switch($rotation) {
            case 90: if(!@imagesetpixel($newimg, ($height - 1) - $j, $i, $reference )){return false;}break;
            case 180: if(!@imagesetpixel($newimg, $i, ($height - 1) - $j, $reference )){return false;}break;
            case 270: if(!@imagesetpixel($newimg, $j, ($width - 1) - $i, $reference )){return false;}break;
            }
        }
        } return $newimg;
    }
    return false;
}



// Good
function formatoMillares($number) {
    $fNumber = $number;
    if ($number > 999999)
        $fNumber = substr($number,0,-6) .','. substr($number,strlen($number)-6,3) .','.substr($number,strlen($number)-3,3);
    else
        if ($number > 999)
            $fNumber = substr($number,0,-3).','.substr($number,strlen($number)-3,3);
    
    return $fNumber;
}

// Good
function string_to_ascii($string) {
    $ascii = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $ascii .= ord($string[$i]);
        $ascii .='-';
    }
    return($ascii);
}

// Good
function mostrar($csvFile) {
    $sfp = fopen('../../csv/'.$csvFile,'r'); 
    $linea = 1;
    $jlinea = -1;
    $jflag = 0;
    $flag = 0;
    $columnaSize = 0;
    $columnaQty = 0;

    echo '<table class="centrado" border="1">';
    
    while ($row = fgetcsv($sfp,10000,",")) { 
        
        $num = count($row);
        
        if($row[0]<>'' || $flag == 0 || ($flag<>0 && $row[0]<>'')) {
            echo '<tr id="linea'.$jlinea.'">';
            for($i=0; $i<$num; $i++) {
                if ($linea == 1) {
                    if ($row[$i]=='SIZE')
                        $columnaSize = $i;
                    if ($row[$i]=='QTY')
                        $columnaQty = $i;
                    echo '<th onclick="restoreList();">'.$row[$i].'</th>';
                } else
                    if ($row[$i]<>'') {
                        $jflag = 1;
                        if ($i==$columnaSize) {
                            echo '<td id="sizeLinea'.$jlinea.'" class="centrado" onclick="sortBySize(\''.$row[$i].'\');" >'.$row[$i].'</td>';
                            echo '<script language="javascript" type="text/javascript">addSizeValue("'.$row[$i].'");</script>';
                        } else
                            if ($i==$columnaQty) {
                                echo '<td id="qtyLinea'.$jlinea.'" class="centrado">'.$row[$i].'</td>';
                                echo '<script language="javascript" type="text/javascript">addQtyValue('.$row[$i].');</script>';
                            } else
                                echo '<td class="centrado">'.$row[$i].'</td>';
                        $flag = 0;
                    } else {
                        echo '<td class="espaciador">'.$row[$i].'</td>';
                        if ($jflag == 0) {
                            echo '<script language="javascript" type="text/javascript">addSizeValue("'.$row[$i].'");</script>';
                            echo '<script language="javascript" type="text/javascript">addQtyValue(0);</script>';
                        }
                        $flag = 1;
                    }
            }
            echo '</tr>';
            $jlinea++;
            $jflag = 0;
        }
        
        $linea++; 
    }
    echo '<script language="javascript" type="text/javascript">setTotalLines('.$jlinea.');</script>';
    echo '</table>'; 
    fclose($sfp);
}

function textoParrafoEspaciado($area,$fontSize,$angulo,$xPoint,$yPoint,$color,$font,$boldOrNot,$text,$espacioEntreLineas,$maxLengthInTheLine)
{
    if (strlen($text)>$maxLengthInTheLine)
    {
        imagettftext($area,$fontSize,$angulo,$xPoint,$yPoint-5,$color,$font,substr($text,0,$maxLengthInTheLine));
        imagettftext($area,$fontSize,$angulo,$xPoint,$yPoint+$espacioEntreLineas,$color,$font,substr($text,$maxLengthInTheLine,strlen($text)));
    }
    else
    {
        imagettftext($area,$fontSize,$angulo,$xPoint,$yPoint-5,$color,$font,$text);
    }
}

function textoVertical($value,$xPoint,$yPoint,$font,$color,$fontSize,$formatAngle,$space=7) {
    $length = strlen($value);
    for($i=0;$i<=$length;$i++) {
        texto(substr($value, $i, 1),$xPoint-1,$yPoint,0,0,$font,$color,$fontSize,$formatAngle,0);
        $yPoint += $space;
    }
}
    
function quitarDecimales($valor) {
    $tieneDecimal = strpos($valor,'.');
    if(strlen($valor) && $tieneDecimal){
        $arreglo = explode('.', $valor);
        $valor = $arreglo[0];
    }

    return $valor;
}

function parrafoArriba($texto,$x,$yInicial,$fuente,$color,$sizeLetra) {
    $y = $yInicial;
    $len = 0;
    $lenRes = 0;
    $imprimirCompleto = true;
    
    if(strpos($texto,'-') || strpos($texto,' ')) {
        $imprimirCompleto = false;
        $cadenas = explode(' ',$texto);
        for($i = count($cadenas); $i >0; $i--) {
            texto($cadenas[$i-1],$x,$y,0,0,$fuente,$color,$sizeLetra,0,0);
            $y = $y - 10;
        }
    }
    
    if($imprimirCompleto){
        if((strlen($texto)/15) > 0) {
        $imprimirCompleto = false;
        $stop = false;
        $stringTemp = $texto;
        while ($stop ==  false) {
            if(strlen($stringTemp) > 15){
                $stringPrint = substr($stringTemp,-15);
                $lenRes = strlen($stringTemp) -15;
                $stringTemp = substr($stringTemp,0,$lenRes);
            } else {
                $stop = true;
                $len = strlen($stringTemp) * -1;
                $stringPrint = substr($stringTemp,$len);  
            }
            texto($stringPrint,$x,$y,0,0,$fuente,$color,$sizeLetra,0,0);
            $y = $y - 10;              
        }
        } else {
        texto($texto,$x,43,0,0,$fuente,$color,$sizeLetra,0,0);
        }
    }
}

function depurar() {
    global $modoDepurado;
    $modoDepurado = true;
}
