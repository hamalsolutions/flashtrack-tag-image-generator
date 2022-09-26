<?php        
    $img = rotar($img,$anguloDeRotacion);
        
    if ($conRoundCorners) {
       $img = imageCreateCorners($img, FORMAT_WIDTH, FORMAT_HEIGHT, $radioForCorners);
    }
    
    header("Content-type: image/png");
    
    imagepng($img);

    // Limpiamos Todo
    imagedestroy($img);
?>
