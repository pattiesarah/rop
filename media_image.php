<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Media Images</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet' id='Roboto-css' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Patua+One-css' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link href="css/lightslider.min.css" rel="stylesheet">

</head>

<body>

<?php
    include('header.php');
  ?>

    <div class="container-fluid inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><a href="home.php"><span>Home</span></a> > <a href="media_image.php">Media Images</a></h2>
                </div>
                <div class="col-md-12">
                    <h1>Media <span>Images</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="innercontent" style="background: #f7f7f7">
        <div class="row" dir="rtl">
          <div class="col-md-12 text-center media-center">
            <h1>
                <span class="fa-stack">
                <i class="fa fa-file-image-o fa-stack-1x"></i>
                </span><span class="border_bottom">Images</span>
            </h1>
            <div class="container">
              <div id="image-section" class="thumbnail_img">
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 1</h5></a></div>
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 2</h5></a></div>
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 3</h5></a></div>
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 4</h5></a></div>
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 5</h5></a></div>
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 6</h5></a></div>
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 7</h5></a></div>
                <div class="col-md-3"><a href="album1.php"><img src="images/registration_trade.png" alt=""><h5>Album 8</h5></a></div>
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
<script type="text/javascript" src="js/lightslider.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#multi-video-carousel').lightSlider({
            item:3,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
        ]
        });
        $('#multi-audio-carousel').lightSlider({
            item:4,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
        ]
        });
        $('#multi-img-carousel').lightSlider({
            item:4,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
        ]
        });
    });
</script>

</body>

</html>
