<?php                      //   1      2       3      4     5      6      7       8
$correctos = array('QTY', 'STYLE', 'GROUP NAME', 'SIZE', 'DEPARTMENT', 'CLASS', 'SUB CLASS', 'DESCRIPTION1', 'DESCRIPTION2', 'UPC', 'PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {

        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'35153-06');
        $GROUPNAME = asignar(2, 'CAREER PANT');
        $SIZE = asignar(3,'L');
        $DEPARTMENT = asignar(4,'095');
        $CLASS = asignar(5,'20');
        $SUBCLASS = asignar(6,'24');
        $DESCRIPTION1 = asignar(7,'PURCHASE YOUR REGULAR');
        $DESCRIPTION2 = asignar(8,'PRE-PREGNANCY SIZE');
        $UPC = asignar(9,'887822072633');
        $PRICE = asignar(10,'34.00');
                
        // Creacion del formato
        formato(150,262,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(75, 25);
        
        texto('KOHL\'S',10,30,0,0,$arialBold,$black,10,0,0);
        
        texto($GROUPNAME,0,50,1,0,$arialBold,$black,9,0,0);

        texto($DEPARTMENT,0,65,3,70,$arialBold,$black,9,0,0);        

        texto($CLASS,0,65,1,0,$arialBold,$black,8,0,0);
        
        texto($SUBCLASS,0,65,3,-70,$arialBold,$black,8,0,0);
        
        texto('STYLE',25,77,0,0,$arial,$black,6,0,0);
        texto($STYLE,60,80,0,0,$arialBold,$black,9,0,0);

        texto('SIZE  ',40,97,0,0,$arial,$black,6,0,0); 
        texto($SIZE,65,97,0,0,$arialBold,$black,10,0,0);

        texto(formatizarTexto('123456  789012 ',$UPC),0,155,1,0,$arial,$black,10,0,0);        

        perforacion(150, 262, 165);
        
        texto($DESCRIPTION1,0,180,1,0,$arial,$black,7,0,0);        
        
        texto($DESCRIPTION2,0,190,1,0,$arial,$black,7,0,0);        
        
        texto('SIZE',40,220,0,0,$arial,$black,6,0,0); 
        texto($SIZE,0,220,1,0,$arialBold,$black,10,0,0);
        
        texto($PRICE,0,250,1,0,$arialBold,$black,12,0,1);        

        // Creacion del Barcode
        barcode($UPC,8,95,1.1,45,'UPC');
        
        require_once('../includes/footer.php');

    }
?>
