<?php
    namespace includes;
    
    $headerSent = FALSE;
    if ($conBarcode)
    {
        require "php-barcode.php";
               barcode_print($upcValue,$tipoBarcode,$barcodeSize,'png');
               $headerSent = TRUE;
    }
    
    $img = rotar($img,$anguloDeRotacion);
        
    if ($conRoundCorners) {
       $img = imageCreateCorners($img, FORMAT_WIDTH, FORMAT_HEIGHT, $radioForCorners);
    }
        // Desplegamos la imagen como una PNG usando un header
    if ($headerSent == FALSE && $modoDepurado == FALSE) {
        header("Content-type: image/png");
    }
    
    imagepng($img);

    // Limpiamos Todo
    imagedestroy($img);
?>
