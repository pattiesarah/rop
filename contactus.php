<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact Us</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel='stylesheet' id='Roboto-css' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
  <link rel='stylesheet' id='Patua+One-css' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
<?php
    include('header.php');
  ?>


<div class="container-fluid contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><a href="home.php">Home</a> > <a href="contactus.php">Contact Us</a></h2>
            </div>
            <div class="col-md-12">
                <h1>Contact <span>Us</span></h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid contactusmap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117009.9018939686!2d58.3646958!3d23.5842615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ffa8879aafc9%3A0xdb53876d0d79a72c!2z0JzQsNGB0LrQsNGCLCDQntC80LDQvQ!5e0!3m2!1sru!2sby!4v1493156983054" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container-fluid contactusicons">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><span><img src="images/contactsicon1.png" alt=""></span>Have any questions?<br><span>support@customs.gov.om</span></h1>
            </div>
            <div class="col-md-4">
                <h1><span><img src="images/contactsicon2.png" alt=""></span>Call us<br><span>+968 - 24349000</span></h1>
            </div>
            <div class="col-md-4">
                <h1><span><img src="images/contactsicon3.png" alt=""></span>Fax<br><span>+968 - 24349000</span></h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid writeamessage">
    <div class="container">
        <div class="row">
            <h1>Write a <span>message</span></h1>
            <p>If you got any questions, please do not hesitate to send us a message. We reply within 24 hours!</p>
            <div class="col-md-6 col-md-offset-3 inputs">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Your Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Your email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="sub" placeholder="Subject">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <select id="type" class="form-control">
                            <option>Select Enquiry Type</option>
                            <option value="1">General Enquiry</option>
                            <option value="2">Enquiry about laws and executive regulations.</option>
                            <option value="3">Enquiry about customs agreements with other countries.</option>
                            <option value="4">Enquiry about customs procedures.</option>
                            <option value="5">Enquiry about customs tariff, HS code.</option>
                            <option value="6">Restricted and prohibited goods.</option>
                            <option value="7">Customs service fees and protection taxes.</option>
                            <option value="8">Customs taxes for vehicles.</option>
                            <option value="9">Enquiry about customs fines.</option>
                            <option value="10">Custom exemptions.</option>
                            <option value="11">About pre-clearing.</option>
                            <option value="12">Enquiry about customs statistics.</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <div class="g-recaptcha" data-sitekey="6LeY4C0UAAAAACjRofNx9_DWD0R1nado_oXEcY0i"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="messagebtn">SEND MESSAGE</p>
                </div>
                <p>Our profiles in social media:</p>
                <div class="socialicons msgicons">
                    <a href="https://www.facebook.com/ropomancustoms/" class="icon_bar icon_bar_facebook icon_bar_large"><span class="t"><i class="fa fa-facebook"></i></span><span class="b"><i class="fa fa-facebook"></i></span></a>
                 <a href="https://twitter.com/omancustoms" class="icon_bar icon_bar_twitter icon_bar_large"><span class="t"><i class="fa fa-twitter"></i></span><span class="b"><i class="fa fa-twitter"></i></span></a>
                 <a href="http://instagram.com/royal_oman_police" class="icon_bar icon_bar_instagram icon_bar_large"><span class="t"><i class="fa fa-instagram"></i></span><span class="b"><i class="fa fa-instagram"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('footer.php');
  ?>


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/headhesive.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
