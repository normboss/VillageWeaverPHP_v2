<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";

if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "norm.bosse0@gmail.com";
    // $email_to = "leck@midcoast.com";
    $email_subject = "Maine Village Weaver contact form message";


    function died($error)
    {
        // your error code can go here
        echo "I am very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    // $string_exp = "/^[A-Za-z .'-]+$/";
    // if (!preg_match($string_exp, $first_name)) {
    //     $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    // }
    // if (!preg_match($string_exp, $last_name)) {
    //     $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    // }
    if (strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid.<br />';
    }
    if (strlen($error_message) > 0) {
        died($error_message);
    }
    $email_message = "Contact form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";


    // create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n";
    // . 'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your own success html here -->

    <script type="text/javascript">
        window.location = "thankyou.html";
    </script>

<?php
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

            <div class="box form-container">
                <!-- <form action="send-form-email.php" class="contactform" method="post" name="contactform"> -->
                <form action="contact.php" class="contactform" method="post" name="contactform">
                    <label for="name">Your Name *</label>
                    <input maxlength="50" name="name" size="30" type="text">
                    <label for="email">Email Address *</label>
                    <input maxlength="80" name="email" size="30" type="text">
                    <label for="message">Comments *</label>
                    <textarea cols="30" maxlength="1000" name="message" rows="5"></textarea> * = required<br>
                    <input class="submit" type="submit" value="Submit »">
                </form>

            </div>

        </div>
        <br><br>
    </main>
    <div id="footer"></div>
    <?php
    require '../includes/footer1.php';    ?>
</body>

</html>