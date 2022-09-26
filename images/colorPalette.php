<?php                       //   1       2      3        4
    $correctos = array('QTY','PAGINA');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $PAGINA = asignar(1,1);
        
        // Creacion del formato
        $pageWidth = 1900;
        $pageHeight = 1300;
        formato($pageWidth,$pageHeight,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        $pageDone = false;
        
        $rowsPerPage = 17;
        $columsPerPage = 30;
        $boxesPerPage = $rowsPerPage * $columsPerPage;
        
        $boxHeight = 70;
        $boxWidth = 60;
        
        $original_x = ($pageWidth-($columsPerPage*$boxWidth))/2;
        $original_y = ($pageHeight-($rowsPerPage * $boxHeight))/2;
        
        $totalPages = round(16777216 / $boxesPerPage, 0) ; //32897
        $wantedPage = $PAGINA>$totalPages?1:$PAGINA;
        
        $currentPage = 1;
        
        $x=$original_x;        $y= $original_y;
        $boxByRow=0;        $totalOfBoxes = 0;
        
        texto('Page '.$wantedPage.'  of  '.$totalPages,0,$y-10,1,0,$arialBold,$black,15,0,0);
        
        for ($r=0;$r<=255;$r++) {
            for ($g=0;$g<=255;$g++) {
                for ($b=0;$b<=255;$b++) {
                    $totalOfBoxes++;
                    if ($currentPage==$wantedPage) {
                        $R = $r;        $G = $g;        $B = $b;
                        cajaVacia($x, $y, $boxWidth, $boxHeight, $black);
                        cajaRellena($x+1, $y+1, $boxWidth-2, $boxHeight-20, color($R,$G,$B), color($R,$G,$B));
                        texto($R.','.$G.','.$B,$x+3,$y+66,0,0,$arial,$black,9,0,0);
                        $x += $boxWidth;
                        $boxByRow++;
                        if ($boxByRow==$columsPerPage) {
                            $boxByRow = 0;
                            $x = $original_x;
                            $y += $boxHeight;
                        }
                        if ($totalOfBoxes==$boxesPerPage && $currentPage==$wantedPage)
                            $pageDone=true;
                    }
                    if ($totalOfBoxes==$boxesPerPage) {
                        $totalOfBoxes=0;
                        $currentPage++;
                        $boxByRow = 0;
                        $y=$original_y;
                    }
                    if ($pageDone)
                        break;
                }
                if ($totalOfBoxes==$boxesPerPage) {
                    $totalOfBoxes=0;
                    $currentPage++;
                    $boxByRow = 0;
                    $y=$original_y;
                }
                if ($pageDone)
                    break;
            }
            if ($totalOfBoxes==$boxesPerPage) {
                $totalOfBoxes=0;
                $currentPage++;
                $boxByRow = 0;
                $y=$original_y;
            }
            if ($pageDone)
                break;
        }
        require_once('../includes/footer.php');
    }
?>
