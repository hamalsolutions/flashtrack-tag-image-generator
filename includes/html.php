<?php
    $ind = array();
    $originales = array();
    $cantidadCorrectos = count($correctos);
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
        if (is_file('../../csv/'.$_GET['csvfile']) || is_file('../../csv/'.$_POST['csvfile']))
        {
            if (isset($_POST['selection']))
            {
                $csvfile = $_POST['csvfile'];
                $order = $_POST['order']; 
            }
            else
            {  
                $csvfile = $_GET['csvfile'];
                $order = $_GET['order'];
            }
            
            require_once ('../includes/functions.php');
            //require_once ('../../includes/connectvars.php');
            $handle = fopen('../../csv/'.$csvfile, "r+");
            $row = 1;
            $flag = 1;
            
            echo '<script type="text/javascript" src="../../js/breakdown.js"></script>';
            
            // Se recorrera todo el archivo csv por linea
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
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
                     
                    // Aqui se checara cual de todos los campos por default no se encuantra en el archivo del cliente 
                    if (in_array('|',$ind,true))
                    {
                       $flag = 0;
                       echo '<h1>Sorry, you must to check your csv file. The following fields don\'t match...</h1><h1 align="center">(DON\'T CLICK ON BACK BOTTON)</h1>';
                       echo '<form action="'. $_SERVER['PHP_SELF'] .'" method="post">';
                       
                       // Se desplegara la opcion de relacionar cada campo contenido en el archivo con los que se requieren por default
                       /* * *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   */ 
                       for ($i=0;$i<$cantidadCorrectos;$i++)
                            selecciones($originales[$i],$correctos[$i],$ind[$i]);
                       
                       echo '<input type="hidden" name="csvfile" value="'. $csvfile .'" />';         
                       echo '<input type="hidden" name="order" value="'. $order .'" />';         
                       echo '<input type="hidden" name="viewP" value="'. $_GET['view'] .'" />';         
                       echo '<input type="submit" value="Apply" name="selection" />';
                       echo '</form>';             
                      // echo '<p></p>';
                    }
                    
                }// Dejamos de trabajar con el encabezado
                
                    // Deplegamos el formato por la linea del archivo, descartandolo si tiene valores vacios o se es el encabezado
                    if  ($data[0] <> NULL && $row <> 1)
                    {
                        if ($flag == 1 || ($flag==0 && $row==2))
                        { 
                            echo '&nbsp;<img src="'.$_SERVER['PHP_SELF'].'?';
                            for ($i=0;$i<$cantidadCorrectos;$i++)
                            {
                                $data[$ind[$i]] = str_replace('"',"''",$data[$ind[$i]]);
                                $data[$ind[$i]] = str_replace('&',"%26",$data[$ind[$i]]);
                                $data[$ind[$i]] = str_replace('  '," ",$data[$ind[$i]]);
                                if (substr($data[$ind[$i]],-1)==' ')
                                  $data[$ind[$i]] = substr($data[$ind[$i]],0,-1);
                                echo $originales[$i].'='.$data[$ind[$i]].'&';
                            }
                            echo 'rgb=244&sample=1" alt="Sorry, you must to check your csv file. The following fields don\'t match..." />';
                        }
                    }
                   
                   // aumentamos el contador para continuar con la siguiente linea 
                   $row++;
                
            }
            fclose($handle);
            
            echo '<h2 align="center"><form><input type="button" value=" Print this page " onclick="window.print();return false;" /></form>';
            if ($flag == 1)
            {
            /*
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $query = "UPDATE orders SET samples_ok='1' WHERE order_ind='$order'";
            mysqli_query($dbc,$query) or die ('Error samples');
            mysqli_close($dbc);
            */
            
            
            if ($_GET['view']==1 || $_POST['viewP']==1)
                echo '<a href="../../home.php">NEXT-----></a> </h2>';
            else
                echo '<a href="javascript:window.close();">Close Window</a>';
        }
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
        
        if ($sample == false)
            $sample = 2;
    }
?>
