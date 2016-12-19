<?php
    
    $res = shell_exec('sudo forever start /home/pi/work/nodescript/RearViewController/app.js');
    var_dump($res);
?>