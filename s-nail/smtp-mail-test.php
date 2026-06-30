<?php

ini_set('include_path', '/usr/local/lib/php');  // 2016-05-11

require_once('SMTPMailer.php');         // 2016-08-02


//$summaryEmail =       'mark@edwardsmark.com'          ;
$summaryEmail   =       'info@comptonpeslonlnie.com'            ;
$subject        =       'this is a test subject to mark edwards'        ;
$message        =       'this is a summary emaili to mark edwards'      ;

$headers = array                // 2016-08-02
                (       'addAddress'    =>
                                [       'mark@edwardsmark.com'          =>      ''
                                ]
                )
                ;


$replyStatus = SMTPMailer($summaryEmail, $subject, $message, $headers);         // 2016-08-02
echo 'summary email message sent - status: ' . $replyStatus . "\n";     // added 2013-01-26
?>
