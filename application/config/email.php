<?php
$config['protocol']='smtp';                                      // Set mailer to use SMTP
$config['smtp_host'] = 'md-64.webhostbox.net';//'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$config['smtp_user'] = 'javed@weboforce.com';                 // SMTP username
$config['smtp_pass']= 'JAved$100';                           // SMTP password
$config['port']=587;
$config['smtp_timeout']=60;
$config['smtp_crypto']='tls' ;
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;

?>