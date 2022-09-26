<?php
       if (!isset($_GET['order']) && !isset($_GET['boxes']) && !isset($_GET['location']))
       { 
        require_once ('../includes/functions.php');
        
        // Definimos las cosntatntes a utilizar
        define('FORMAT_WIDTH',600);
        define('FORMAT_HEIGHT',400);
        
        // Valores obtenidos por Get para generar los samples desde un CSV
        $rname = getvar('rname');
        $raddress = getvar('raddress');
        $city = getvar('rcity');
        $state = getvar('rstate');
        $zip = getvar('rzip');
        
        $dcompany = getvar('dcompany');
        $dattn = getvar('dattn');
        $daddress = getvar('daddress');
        $dcolonia = getvar('dcolonia');
        $dcity = getvar('dcity');
        $dstate = getvar('dstate');
        $dzip = getvar('dzip');
        
        $so = getvar('so');
        $po = getvar('po');
        $via = getvar('via');
        $description = getvar('description');
        $qty = getvar('qty');
        $boxI = getvar('boxI');
        $boxT = getvar('boxT');
        
        
        $sample = getvar('sample');
        $mtext = 'NO VALUE';
        
        if ($rname == false)
            $rname = 'CONSOLIDATED DESIGN, INC.';
        if ($raddress == false)
            $raddress = '1345 S. LEWIS STREET';
        if ($city == false)
            $city = 'ANAHEIM';
        if ($state == false)
            $state = 'CA';
        if ($zip == false)
            $zip = '92805';
        
        if ($sample == false)
            $sample = 2;
        
        if ($sample == 2)
        {
            // Valores por default para presentar una imagen
            if ($dcompany == false)
                $dcompany = 'CONSOLIDATED DESIGN, INC.';
            if ($dattn == false)
                $dattn = 'LEONEL';
            if ($daddress == false)
                $daddress = '1345 S. LEWIS STREET';
            if ($dcolonia == false)
                $dcolonia = '';
            if ($dcity == false)
                $dcity = 'ANAHEIM';
            if ($dstate == false)
                $dstate = 'CA';
            if ($dzip == false)
                $dzip = '92805';
            
            if ($so == false)
                $so = '0235488';
            if ($po == false)
                $po = '40046';
            if ($via == false)
                $via = 'Will Call';
            if ($description == false)
                $description = 'PRNTD CARELABEL P777';
            if ($qty == false)
                $qty = '2,000';
            if ($boxI == false)
                $boxI = '2';
            if ($boxT == false)
                $boxT = '2';
        }
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
        
        // Introducimos los datos
       // imagettftext($img,15,0,430,38,$text_color,$arialBold,'ORDER #:');
        //imagettftext($img,20,0,435,70,empty($so)?$m_text_color:$text_color,$arialBold,empty($so)?$mtext:$so);
        
        imagettftext($img,15,0,0,38,empty($rname)?$m_text_color:$text_color,$arialBold,empty($rname)?$mtext:$rname);        
        imagettftext($img,15,0,0,68,empty($raddress)?$m_text_color:$text_color,$arialBold,empty($raddress)?$mtext:$raddress);
        imagettftext($img,15,0,0,98,empty($city)?$m_text_color:$text_color,$arialBold,empty($city)?$mtext:$city.','.$state.' '.$zip);
        
        imagettftext($img,15,0,380,58,$text_color,$arialBold,"P.O.#:");
        textoParrafoEspaciado($img,strlen($po)>15?13:15,0,400,90,$text_color,$arialBold,1,$po,16,18);
        //textoParrafoEspaciado($img,strlen($po)>15?13:15,0,400,165,$text_color,$arialBold,1,$po,16,18);
        
        imagettftext($img,15,0,450,148,$text_color,$arialBold,"QUANTITY:");
        imagettftext($img,18,0,465,178,empty($qty)?$m_text_color:$text_color,$arialBold,empty($qty)?$mtext:$qty);        
        
        imagettftext($img,15,0,420,300,$text_color,$arialBold,"# OF BOXES:");
        imagettftext($img,29,0,430,350,empty($boxI)?$m_text_color:$text_color,$arialBold,empty($boxI)?$mtext:$boxI);
        imagettftext($img,15,0,475,350,$text_color,$arialBold,'OF');
        imagettftext($img,29,0,510,350,empty($boxI)?$m_text_color:$text_color,$arialBold,empty($boxI)?$mtext:$boxT);
        
        imagettftext($img,15,0,19,135,$text_color,$arialBold,"SHIP TO:");
        
        imagettftext($img,14,0,75,158,$text_color,$arialBold,$dcompany);
        parrafo($daddress, 75, 178, 0, 0, $arialBold, $text_color, strlen($daddress)>15?13:14, 0, 40, 15);
        //textoParrafoEspaciado($img,strlen($daddress)>15?13:14,0,125,178,$text_color,$arialBold,1,$daddress,16,35);
        //imagettftext($img,14,0,125,178,$text_color,$arialBold,$daddress);
        
        if(empty($dcolonia))
        {
            imagettftext($img,14,0,75,198,$text_color,$arialBold,$dcity.','.$dstate.' '.$dzip);
            imagettftext($img,14,0,75,242,$text_color,$arialBold,'ATTN: '.$dattn);
        }
        else
        {
            imagettftext($img,14,0,75,198,$text_color,$arialBold,$dcolonia);
            imagettftext($img,14,0,75,128,$text_color,$arialBold,$dcity.','.$dstate.' '.$dzip);
            imagettftext($img,14,0,75,158,$text_color,$arialBold,'ATTN: '.$dattn);
        }
        
        imagettftext($img,15,0,10,268,$text_color,$arialBold,"SHIP VIA:");
        imagettftext($img,15,0,30,298,empty($via)?$m_text_color:$text_color,$arialBold,empty($via)?$mtext:$via);
        
        imagettftext($img,15,0,10,328,$text_color,$arialBold,"DESCRIPTION:");
        imagettftext($img,15,0,30,358,empty($description)?$m_text_color:$text_color,$arialBold,empty($description)?$mtext:$description);
        
        
        header("Content-type: image/png");
        imagepng($img);
        
        // Limpiamos Todo
        imagedestroy($img);
       }
       else
       {
           require_once('../../../../../includes/classes/classloader.php');
           $location = $_GET['location'];
           $orderind = $_GET['order'];
           $qty = $_GET['boxes'];
           
           $dbOrder = new MySqlConnection('SBOR_Represent');
                $prolabelOrderInfo = $dbOrder->query("SELECT $location.company_ind, $location.link_ind, $location.shipping_method_carrier,$location.shipping_method_carrier_service,$location.shipping_method_carrier_acc FROM `$location` WHERE $location.order_ind=$orderind");
                $resellerOrderInfo = $dbOrder->query("SELECT sub_order FROM `".$prolabelOrderInfo['company_ind']."` WHERE order_ind=".$prolabelOrderInfo['link_ind']);
                $orderDetails = explode(',', $resellerOrderInfo['sub_order']);
                $company = $orderDetails[0];
                $ind = $orderDetails[1];
                $query = "SELECT `$company`.item_name,`$company`.so,`$company`.po,`$company`.ship_address_ind,`$company`.shipping_method_ind,`$company`.shipping_method_carrier,`$company`.shipping_method_carrier_service,`$company`.shipping_method_carrier_acc,`$company`.quantity FROM `$company` WHERE `$company`.order_ind =$ind";
                $orderInfo = $dbOrder->query($query);
           $dbOrder->close();
           
           $dbGeneral = new MySqlConnection('SB_Represent');
                $query = "SELECT * FROM address_book WHERE address_ind=".$orderInfo['ship_address_ind'];
                $addressInfo = $dbGeneral->query($query);
           $dbGeneral->close();
           
           for($i=1;$i<=$qty;$i++)
           {
               if ($orderInfo['shipping_method_ind']<>1)
               {
                   $addressInfo['address'] = str_replace("#","%23",$addressInfo['address']);
                   $orderInfo['po'] = str_replace(" & "," %26 ",$orderInfo['po']);
                    $shippingVia = $orderInfo['shipping_method_carrier'].' '.$orderInfo['shipping_method_carrier_service'] ;
                   if ($orderInfo['shipping_method_carrier_acc']<>'')
                       $shippingVia .= ' Acc: '.$orderInfo['shipping_method_carrier_acc'];
                   
                   if ($addressInfo['international']=='')
                       $address = 'daddress='. $addressInfo['address'] .'&dcity='. $addressInfo['city'] .'&dstate='. $addressInfo['state'] .'&dzip='. $addressInfo['zip'] .'&';
                   else
                       $address = 'daddress='. $addressInfo['international'] .'&';
                   
                   echo '<img src="'.$_SERVER['PHP_SELF'].'?dcompany='. $addressInfo['company'] .'&'.
                                                                          'dattn='. $addressInfo['attn'] .'&'.
                                                                          $address.
                                                                          'so='. $orderInfo['so'] .'&'.
                                                                          'po='. $orderInfo['po'] .'&'.
                                                                          'qty='. formatoMillares($orderInfo['quantity']) .'&'.
                                                                           'via='.$shippingVia.'&'.
                                                                           'boxI='.$i.'&'.
                                                                           'boxT='.$qty.'&'.
                                                                           'sample=1&'.
                                                                           'description='.$orderInfo['item_name'].'" alt="Shipping Label Here" />';
               }
               else
               {
                   $dbGeneral = new MySqlConnection('SB_Represent');
                            $query = "SELECT name FROM companies WHERE company_ind=".$company;
                            $companyInfo = $dbGeneral->query($query);
                   $dbGeneral->close();
                   $orderInfo['po'] = str_replace(" & "," %26 ",$orderInfo['po']);
                   echo '<img src="'.$_SERVER['PHP_SELF'].'?dcompany=--------&'.
                                                                          'dattn=---------&'.
                                                                          'daddress='. $companyInfo['name'] .'&'.
                                                                          'dcity=Will&'.
                                                                          'dstate=Pick&'.
                                                                          'dzip=Up&'.
                                                                          'so='. $orderInfo['so'] .'&'.
                                                                          'po='. $orderInfo['po'] .'&'.
                                                                          'qty='. formatoMillares($orderInfo['quantity']) .'&'.
                                                                           'via='.$orderInfo['shipping_method_carrier'].' '.$orderInfo['shipping_method_carrier_service'] .'&'.
                                                                           'boxI='.$i.'&'.
                                                                           'boxT='.$qty.'&'.
                                                                           'sample=1&'.
                                                                           'description='.$orderInfo['item_name'].'" alt="Shipping Label Here" />';
               }
           }
           
       }
?>