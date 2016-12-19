<?php
    $arr = [];
    $res = exec('forever start /home/pi/work/nodescript/RearViewController/app.js', $output);
    var_dump($arr);
?>