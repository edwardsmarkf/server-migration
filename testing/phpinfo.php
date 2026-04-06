<?php
        echo    '<br />'
        .       'Server User: '
        .       $_SERVER['USER']
        .       '<br />'
        .       'Current script owner: '
        .       get_current_user()
        .       '<br />'
        .       'The current date and time is: '
        .       date('Y-m-d H:i:s')
        .       '<br />'
        .       '<br />'
        ;
        phpinfo();
?>
