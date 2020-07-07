<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <title>Maine Village Weaver | Contact Form</title>
    <meta name="description" content="Contact Maine Village Weaver.">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">

    <link href="../css/contact1.css" media="screen" rel="stylesheet" type="text/css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            pretty();
            document.getElementById("contact-form").submit();
        }
    </script>
</head>

<body>

    <!--<div id="banner" class="home"></div>-->
    <!--<div id="main-menu" class="home"></div>-->
    <div id="header-id">
        <div class="banner">
            <span class="text1">Maine Village Weaver</span><span class="text2">Contact</span>
        </div>
        <div id="main-menu" class="home"></div>
        <?php
        require "../includes/main-menu.php";
        ?>

    </div>
    <div id="header-image">
        <!--Hand woven with love-->
    </div>
    <main class="main">

        <div class="statement-parent">
            <div class="statement">
                <i>Contact me for custom orders.</i><br>
                <i>Let's discuss what you can have created just for you!</i><br><br>
                <i>I am always happy to answer questions about my work.</i>
            </div>
            <div class="signature">Phyllis Leck</div>
        </div> <!-- end statement-parent -->


        <div class="contact-container">

            <!-- <div class="contact-image"> -->
            <img src="../images/contact_phyllis_small.jpg" alt="picture">
            <!-- </div> -->
            <?php
            // generate a new token for the $_SESSION superglobal and put them in a hidden field
            $newToken = generateFormToken('form1');
            ?>

            <div class="box form-container">
                <!-- <form action="send-form-email.php" class="contactform" method="post" name="contactform"> -->
                <form id="contact-form" action="thankyou.html" class="contactform" method="post" name="contactform">
                    <label for="name">Your Name *</label>
                    <input maxlength="50" name="name" size="30" type="text">
                    <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                    <label for="email">Email Address *</label>
                    <input maxlength="80" name="email" size="30" type="text">
                    <label for="message">Comments *</label>
                    <textarea cols="30" maxlength="1000" name="message" rows="5"></textarea> * = required<br>
                    <!-- <input class="submit" type="submit" value="Submit »"> -->
                    <button class="g-recaptcha submit" data-sitekey="6Ld82v0UAAAAAIUG_P-YM0zTf9eoRCGEC3WTcf8N" data-callback='onSubmit'>Submit</button><br>
                </form>

            </div>

        </div>
        <br><br>
    </main>
    <div id="footer"></div>1
    <?php
    require '../includes/footer1.php';    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function pretty() {
            $("#contact-form").attr("action", "misc.php");
        }
    </script>
</body>

</html>