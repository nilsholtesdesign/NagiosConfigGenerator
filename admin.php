<html>
<head>
    <style>
        body{white-space: pre-line;}
    </style>
</head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$hostname       = $_POST["hostname"];
$alias          = $_POST["alias"];
$ip             = $_POST["ip"];
$weburl         = $_POST["website"];
$webmailurl     = $_POST["website"];
$webword        = $_POST["websiteword"];
$imaphost       = $_POST["imap_host"];
$imapuser       = $_POST["imap_user"];
$imappass       = $_POST["imap_pass"];
$pop3host       = $_POST["imap_host"];
$pop3user       = $_POST["imap_user"];
$pop3pass       = $_POST["imap_pass"];

$section_host = "
;Check om te controleren of de host bereikbaar is over NRPE (nagios remote)
define host {
use                             linux-server
host_name                       ". $hostname ."
alias                           ". $alias ."
address                         ". $ip ."
max_check_attempts              5
check_period                    24x7
notification_interval           30
notification_period             24x7
}
";

$section_ping = "
;Check uptime over ping
define service {
use                             generic-service
host_name                       ". $hostname ."
service_description             PING
check_command                   check_ping!100.0,20%!500.0,60%
}
";

$section_ssh = "
;Check ssh over socket
define service {
use                             generic-service
host_name                       ". $hostname ."
service_description             SSH
check_command                   check_ssh
notifications_enabled           1
contact_groups 			admins
}
";

$section_smtp = "
;Check smtp over socket
define service{
use                             generic-service         ; Name of service template to use
host_name                       ". $hostname ."
service_description             SMTP
check_command                   check_smtp
}
";

$section_website = "
;Check website ARG1: url ARG2: keyword to look for in source
define service {
use                             generic-service
host_name                       ". $hostname ."
service_description             Website
check_command                   check_website_content!". $weburl ."!". $webword ."
notifications_enabled           1
contact_groups                  admins
}
";

$section_webmail = "
;Check webmail client
define service {
use                             generic-service
host_name                       ". $hostname ."
service_description             Roundcube
check_command                   check_website_content!". $hostname ."!Roundcube
notifications_enabled           1
contact_groups                  admins
}
";

$section_imap = "
;Check IMAP login
define service {
use                             generic-service
host_name                       mybrandportal.nl
service_description             IMAP login
check_command                   check_imap_login!". $imapuser ."!". $imappass ."!". $imaphost ."
notifications_enabled           1
contact_groups                  admins
}
";

$section_pop3 = "
;Check POP3 amount
define service {
use                             generic-service
host_name                       mybrandportal.nl
service_description             POP3 flow
check_command                   check_pop3_login!". $imapuser ."!". $imappass ."!2!10!pop3
notifications_enabled           1
contact_groups                  admins
}
";

$section_disk = "
;Check DISK
define service {
use                             generic-service
host_name                       ". $hostname ."
service_description             Check disk
check_command                   check_nrpe!check_disk
notifications_enabled           1
contact_groups                  admins
}
";


$cfg = $section_host.$section_ping.$section_ping.$section_ssh.(!empty($weburl) ? $section_website : "" ).(!empty($webmailurl) ? $section_webmail : "" ).$section_smtp.(!empty($imaphost) ? $section_imap : "" ).(!empty($imaphost) ? $section_pop3 : "" ).$section_disk;

header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=".$hostname.".cfg");
echo $cfg;
?>
</body>
</html>