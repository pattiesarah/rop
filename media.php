<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Media Center</title>

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
                    <h2><a href="home.php"><span>Home</span></a> > <a href="media.php">Media Center</a></h2>
                </div>
                <div class="col-md-12">
                    <h1>Media <span>Center</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="innercontent">
      <div class="row marginTop50">
      <!-- <div class="col-md-12 text-center media-center">
        <h1>
            <span class="fa-stack">
            <i class="fa fa-file-image-o"></i>
            </span><span class="border_bottom">Media</span>
        </h1>
      </div>   -->
      <div class="container media-gate">
        <div class="col-md-4 col-sm-4 col-xs-6 marginB20">
          <div class="box text-center">
            <a href="media_video.php">
                <i class="fa fa-play"></i>
                <p>Video</p>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 marginB20">
          <div class="box text-center">
            <a href="media_audio.php">
                <i class="fa fa-headphones"></i>
                <p>Audio</p>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 marginB20">
          <div class="box text-center">
            <a href="media_image.php">
                <i class="fa fa-file-image-o"></i>
                <p>Images</p>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 marginB20">
          <div class="box text-center">
            <a href="media_pdf.php">
                <i class="fa fa-file-pdf-o"></i>
                <p>PDF</p>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 marginB20">
          <div class="box text-center">
            <a href="media_social.php">
                <i class="fa fa-share-square-o"></i>
                <p>Social Media</p>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 marginB20">
          <div class="box text-center">
            <a href="news.php">
                <i class="fa fa-book"></i>
                <p>Articles</p>
            </a>
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
