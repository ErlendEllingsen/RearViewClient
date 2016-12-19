<?php
    $arr = [];
    $res = exec('forever start /home/pi/work/nodescript/RearViewController/app.js 2>&1', $output);
    var_dump($arr);
?>