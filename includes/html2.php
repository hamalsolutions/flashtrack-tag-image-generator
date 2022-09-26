<?php
    $ind = array();
    $originales = array();
    $cantidadCorrectos = count($correctos);
    $modoDepurado = false;
    for ($i=0;$i<$cantidadCorrectos;$i++)
    {
        $ind[$i]='|';
        $modificado = str_replace(' ','',$correctos[$i]);
        $modificado = str_replace('/','',$modificado);
        $modificado = str_replace('#','N',$modificado);
        $originales[$i]='s'.strtolower($modificado);
    }
    
    
    if (isset($_GET['csvfile']) || isset($_POST['selection']))
    {
        $filePath = '../../csv/';
        $title = '';
        
        if (isset($_GET['placed'])) {
            $title = '<h3>Flashtrak #: '.substr($_GET['csvfile'], 0, -4) .'</h3>';
            
            switch (substr($_GET['csvfile'], 0, 1)) {
                case 'U'    :   $filePath .= 'USA/';
                                      $parametro2 = strpos($_GET['csvfile'], 'S');
                                        break;
                case 'M'    :   
                    if (  strpos($_GET['csvfile'], 'P')) {
                        $filePath .= 'MPS/';
                        $parametro2 = strpos($_GET['csvfile'], 'P');
                    } else {
                        $filePath .= 'MEXICO/';
                        $parametro2 = strpos($_GET['csvfile'], 'E');
                    }
                                        break;
                case 'C'    :   $filePath .= 'CHINA/';
                                      $parametro2 = strpos($_GET['csvfile'], 'H');
                                        break;
                case 'S'    :
                    if (strpos($_GET['csvfile'], 'U'))
                            $filePath .= 'USA/';
                    if (strpos($_GET['csvfile'], 'M'))
                            $filePath .= 'MEXICO/';
                    if (strpos($_GET['csvfile'], 'C'))
                            $filePath .= 'CHINA/';
                    $parametro2 = strpos($_GET['csvfile'], 'B');
                    break;
            }
            
            if ($_GET['placed'] <> '1')
                $filePath .= substr($_GET['csvfile'], 1,($parametro2-1)).'/';
            else
                $filePath .= substr($_GET['csvfile'], 1,($parametro2-1)).'/recycle/';
        } 
        
        if (is_file($filePath.$_GET['csvfile']) || is_file($filePath.$_POST['csvfile']))
        {
            if (isset($_POST['selection']))
            {
                $csvfile = $_POST['csvfile'];
                //$order = $_POST['order']; 
            }
            else
            {  
                $csvfile = $_GET['csvfile'];
                //$order = $_GET['order'];
            }
            
            require_once ('../includes/functions.php');
            $handle = fopen($filePath.$csvfile, "r+");
            $row = 1;
            $flag = 1;
            
            echo '<!DOCTYPE html>
                        <html>
                        <body>
                        <style type="text/css" media="screen">
                        #samplesPanel {
                            height:300px;
                            overflow:auto;
                            border:medium double #0c435f;
                        }
                        </style>
                        <style type="text/css" media="print">
                        #samplesPanel {
                            height:auto;
                            overflow:auto;
                        }
                        #accions {
                            display:none;
                        }
                        </style>';

            $imagesHtml = array();
            // Se recorrera todo el archivo csv por linea
            while (($data = fgetcsv($handle, 10000, ",",'"')) !== FALSE) 
            {
                // Se obtiene el numero de campos contenidos en el archivo
                $num = count($data);
                
                // Se realizaran cambios en el encabezado que es la row = 1
                if ($row == 1)
                {
                    // Creamos un arreglo para contener los campos del nuevo encabezado
                    $new_headers = array();
                    
                    
                    //  Sustituimos de manera temporal los valores contenidos en el 
                    //  archivo CSV del cliente por los que necesitamos. Esto se realiza por POST
                    /* * *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   */
                    for ($i=0;$i<$cantidadCorrectos;$i++)
                        primerCambio($originales[$i],$correctos[$i]);
                    
                    // Despues de haber realizado el POST, se intoducen los valores al nuevo encabezado.
                    for ($f=0; $f < $num; $f++)
                    {
                        $new_headers[$f] = $data [$f];
                    }
                    
                    // Aqui se puede estableces los campos por default que se requieren, a la misma vez que obtiene
                    // la posicion de cada uno de ellos en el archivo del cliente en caso de que existan.
                    for ($c=0; $c < $num; $c++)
                    {
                        for ($i=0;$i<$cantidadCorrectos;$i++)
                            if ($data[$c] == $correctos[$i])
                                $ind[$i] = $c;
                    }
                    
                    $bgColor ='#FFFFFF';
                    switch ($_COOKIE['FLTiden']) {
                        case 'zaq12wsxcde34rfvbgt5': echo '<div text-align:center;><img src="../../../../../images/PLFlashtrak.png" /></div>'; $bgColor='#DDDDDD';  break;
                        case 'cdwmk86hklf487': echo '<div text-align:center;><img src="../../../../../images/CDW/cdw-2.png" /></div>'; $bgColor='#FAE7D2'; break;
                    }
                    
                    // Aqui se checara cual de todos los campos por default no se encuantra en el archivo del cliente 
                    if (in_array('|',$ind,true))
                    {
                       $flag = 0;
                       echo '<h1>Sorry, you must to check your csv file. The following fields don\'t match...</h1><div style="text-align:center;">';
                       
                       // Se desplegara la opcion de relacionar cada campo contenido en el archivo con los que se requieren por default
                       /* * *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   */ 
                       for ($i=0;$i<$cantidadCorrectos;$i++)
                            selecciones($originales[$i],$correctos[$i],$ind[$i]);
                    } else
                        echo '<div style="text-align:center;"><div id="samplesPanel" style="text-align:left;background-color:'.$bgColor.';margin:auto;width:90%;padding:2%;">'.$title;
                    
                }// Dejamos de trabajar con el encabezado
                
                    // Deplegamos el formato por la linea del archivo, descartandolo si tiene valores vacios o se es el encabezado
                    if  ($data[0] <> NULL && $row <> 1)
                    {
                        if ($flag == 1 || ($flag==0 && $row==2))
                        {
                            $imageHtml = '<img style="margin:1px;" src="' . $_SERVER['PHP_SELF'] . '?';
                            for ($i=0;$i<$cantidadCorrectos;$i++)
                            {
                                $data[$ind[$i]] = str_replace('"',"''",$data[$ind[$i]]);
                                $data[$ind[$i]] = str_replace("\xA0","\x20",$data[$ind[$i]]);
                                $data[$ind[$i]] = str_replace('#',"%23",$data[$ind[$i]]);
                                $data[$ind[$i]] = str_replace('&',"%26",$data[$ind[$i]]);
                                $data[$ind[$i]] = str_replace('+',"%2B",$data[$ind[$i]]);
                                $data[$ind[$i]] = str_replace('  '," ",$data[$ind[$i]]);
                                if (substr($data[$ind[$i]],-1)==' ')
                                  $data[$ind[$i]] = substr($data[$ind[$i]],0,-1);
                                if ($originales[$i] <> 'sepc') {
                                    $imageHtml .= $originales[$i] . '=' . $data[$ind[$i]] . '&';
                                }
                            }
                            $imageHtml .= 'rgb=244&sample=1" alt="Sample" />';
                            if (!in_array($imageHtml, $imagesHtml)) {
                                array_push($imagesHtml, $imageHtml);
                            }
                        }
                    }
                   
                   // aumentamos el contador para continuar con la siguiente linea 
                   $row++;

            }

            foreach ($imagesHtml as $imagenHtml) {
                echo $imagenHtml;
            }

            fclose($handle);
            echo '</div>';            
            if ($flag == 1) {
                    echo '<h2 id="accions" align="center"><input type="button" value=" Print this page " onclick="window.print();return false;" /><br /><br />';
                    echo '<a href="javascript:window.close();">Close Window</a></h2>';
            }
            echo '</div></body></html>';            
       }   
    }
    else
    {
        require_once ('../includes/functions.php');
        
        $campo = $ind;
        
                // Valores obtenidos por Get para generar los samples desde un CSV
        for ($i=0;$i<$cantidadCorrectos;$i++)
                  $campo[$i] = getvar($originales[$i]);
        
        $sample = getvar('sample');
        $mtext = 'N/A';
        
        $img = '';
        $m_text_color = '';
        $upcValue = '';
        $conBarcode = FALSE;
        $conRoundCorners = FALSE;
        $radioForCorners = 1;
        $withText = FALSE;
        $barcodeSize = 1;
        $tipoBarcode = 'UPC';
        $anguloDeRotacion = 0;
        
        if ($sample == false)
            $sample = 2;
    }
?>
