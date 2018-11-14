<?php

if(isset($_REQUEST["action"]) &&  $_REQUEST["action"]=="send") {

    $name = $_REQUEST["name"];
    $email= $_REQUEST["email"];
    $message = $_REQUEST["message"];

    $to      = 'public_html@gmail.com';
    $subject = 'laiskas is puslapio';
    $message = $name."\n".$message."\n".$email;

    mail($to, $subject, $message);
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Pageidavimai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
<div class="wrapper">
    <div class="header border">
        <h1>LOGO</h1>
    </div>

    <div class="ads border">
        <h2>Vieta reklamoms</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-3" id="form_container">
                <h2>Susisiektite</h2>
                <form role="form" method="post" action="Pageidavimai1.php?action=send">

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="message">
                                Jusu zinute</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name">
                                Jusu vardas</label>
                            <input type="text" class="form-control" id="name" name="name" required="">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">
                                @Email.lt</label>
                            <input type="email" class="form-control" id="email" name="email" required="">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button type="submit" class="btn btn-primary btn-default pull-right">Siusti →</button>
                        </div>
                    </div>

                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h3>Jusu zinute issiusta sekmingai!</h3>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

                </div>
            </div>
        </div>
    </div>






    <div class="ads2 border">
        <div class="adnr1 border">
            <h2>vieta reklamoms 2</h2>
        </div>
        <div class="adnr2 border">
            <h2>vieta reklamoms 2</h2>
        </div>
    </div>
    <div class="footer border">
        <h4>Vieta footeriui</h4>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"> </script>
</body>
</html>