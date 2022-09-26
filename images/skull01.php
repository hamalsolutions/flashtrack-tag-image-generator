<?php                       //  1     2     3       4          5
    $correctos = array('QTY','MODEL','UPC','SIZE','COLOR','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $MODEL = asignar(1,'S8T-D024-XL');
        $UPC = asignar(2,'878615023369');
        $SIZE = asignar(3,'XL');
        $COLOR = asignar(4,'WHITE');
        $DESCRIPTION = asignar(5,'MEP V-NECK');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('Skullcandy_Logo.ttf');
        
            // Introducimos los datos
        
        texto('S',5,27,0,0,$logo,$black,30,0,0);
        
        texto('Model #',100,15,0,0,$arial,$black,7,0,0);
        
        if (strlen($MODEL) > 15)
            $fontS = 6.5;
        else
            $fontS = 7;
        texto($MODEL,105,25,0,0,$arial,$black,$fontS,0,0);
        
        $sizeImg = '';
        switch($SIZE)
        {
            case 'XS': $sizeImg = '1';
                      Break;
            case 'S': $sizeImg = '2';
                      Break;
            case 'M': $sizeImg = '3';
                      Break;
            case 'L': $sizeImg = '4';
                      Break;
            case 'XL': $sizeImg = '5';
                      Break;
            case 'XXL': $sizeImg = '6';
                      Break;
        }
        
        if (strlen($DESCRIPTION)>13)
        {
            if (strlen($COLOR)>13)
            {
                if (strlen($DESCRIPTION) < 26)
                {
                    texto($sizeImg,0,50,3,100,$logo,$black,30,0,0);
                    texto('Color:',5,55,0,0,$arial,$black,7,0,0);
                    textoParrafo2($DESCRIPTION,5,65,$arial,$black,7,0,13,10);
                    textoParrafo2($COLOR,5,85,$arial,$black,7,0,13,10);
                }
                else
                {
                    texto($sizeImg,0,45,3,100,$logo,$black,30,0,0);
                    texto('Color:',5,50,0,0,$arial,$black,7,0,0);
                    textoParrafo2($DESCRIPTION,5,60,$arial,$black,7,0,13,10);
                    textoParrafo2($COLOR,5,85,$arial,$black,7,0,13,10);
                }
            }
            else
            {
                if (strlen($DESCRIPTION) < 26)
                {
                    texto($sizeImg,0,55,3,100,$logo,$black,30,0,0);
                    texto('Color:',5,60,0,0,$arial,$black,7,0,0);
                    textoParrafo2($DESCRIPTION,5,70,$arial,$black,7,0,13,10);
                    texto($COLOR,5,90,0,0,$arial,$black,7,0,0);
                }
                else
                {
                    texto($sizeImg,0,50,3,100,$logo,$black,30,0,0);
                    texto('Color:',5,55,0,0,$arial,$black,7,0,0);
                    textoParrafo2($DESCRIPTION,5,65,$arial,$black,7,0,13,10);
                    texto($COLOR,5,95,0,0,$arial,$black,7,0,0);
                }
            }
        }
        else
        {
            if (strlen($COLOR)>13)
            {
                texto($sizeImg,0,55,3,100,$logo,$black,30,0,0);
                texto('Color:',5,60,0,0,$arial,$black,7,0,0);
                texto($DESCRIPTION,5,70,0,0,$arial,$black,7,0,0);
                textoParrafo2($COLOR,5,80,$arial,$black,7,0,13,10);
            }
            else
            {
                texto($sizeImg,0,55,3,100,$logo,$black,30,0,0);
                texto('Color:',5,70,0,0,$arial,$black,7,0,0);
                texto($DESCRIPTION,5,80,0,0,$arial,$black,7,0,0);
                texto($COLOR,5,90,0,0,$arial,$black,7,0,0);
            }
        }
        
        
        // Creacion del Barcode
        barcode($UPC,80,30,1,50,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>