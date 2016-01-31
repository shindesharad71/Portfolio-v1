<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "shindesharad71@gmail.com";
$subject = "sharadshinde.in Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>


    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        <title>Thank You!</title>
        <script src="js/pace.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h4 class="headingh3"><center>Thank You! I Will Contact You Shortly!</center></h4>

            <script type="text/javascript">
                function Redirect() {
                    window.location = "http://sharadshinde.in/contact.html";
                }
                setTimeout('Redirect()', 5000);

            </script>
        </div>
        <!-- ====================== CODE END! ======================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>
