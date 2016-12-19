<?php
    $last_file = file_get_contents('../rearcam/last_number.txt');
    $path_to_image = '../rearcam/images/' . $last_file . '_image.jpg';
    
    header('Content-Type: image/jpeg');
    readfile($path_to_image);
?>