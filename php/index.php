<html>
<body>
<center>
<h1>Server Migration Testing</h1>
<hr />
<h4>Php Testing</h4>

<a href='/imageMagickTest.php' target='_blank' >/imageMagickTest.php</a>
<br />
<br />
<hr />
<h4>Perl Testing</h4>
<a href='/cgi-bin/cgiBinTest.sh' target='_blank' >/cgi-bin/cgiBinTest.sh</a>
<br />
<a href='/cgi-bin/perlCgiTestScript.pl' target='_blank' >/cgi-bin/perlCgiTestScript.pl</a>
<br />
<a href='/cgi-bin/perlCgiWhoIsUser.pl' target='_blank' >/cgi-bin/perlCgiWhoIsUser.pl</a>
<hr />
<hr />
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
</center>
</body>
</html>
