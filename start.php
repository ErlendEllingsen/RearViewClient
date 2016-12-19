<?php
    
    $res = shell_exec('forever start /home/pi/work/nodescript/RearViewController/app.js');
    var_dump($res);
?>