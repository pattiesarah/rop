<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Social Media</title>

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
                    <h2><a href="home.php"><span>Home</span></a> > <a href="media_social.php">Social Media</a></h2>
                </div>
                <div class="col-md-12">
                    <h1>Social <span>Media</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center socials media-center">
          <h1>
            <span class="fa-stack">
              <i class="fa fa-share-square-o fa-stack-1x" style="font-size: inherit;"></i>
            </span>
            <span class="border_bottom">Social Media</span>
          </h1>
          <div class="col-md-4 col-sm-4">
            <div class="twitter-div">
               <div class="text-center">
                  <p><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p>
               </div>
               <a class="twitter-timeline" data-width="370" data-height="450" href="https://twitter.com/omancustoms">Tweets by omancustoms</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>   
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="insta-div">
               <div class="text-center">
               <p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p>
               </div>
               <iframe src="http://auen.ru/instablock.php?u=royal_oman_police&count=12&w=100&fw=370&fh=450&il=0&tb=Royal Oman Police&cb=2&st=1&tl=View&cl=1" style="width:100%;height:450px;border: 0px;"></iframe>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="fb-div">
               <div class="text-center">
                  <p><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</p>
               </div>
               <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fropomancustoms%2F&tabs=timeline&width=370&height=450&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="100%" height="452" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
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
