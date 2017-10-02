<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News</title>

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
                    <h2><a href="home.php"><span>Home</span></a> > <a href="news.php">News</a></h2>
                </div>
                <div class="col-md-12">
                    <h1>News</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container articles news">
      <div class="row">
          <div class="col-md-12 text-center">
            <h1><span class="border_bottom">Articles</span></h1>
          </div> 

          <div class="col-md-12 news-search">
            <div class="form-group pull-right" style="margin-right: 20px;">
              <select class="form-control">
                <option>Search by Year</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
              </select>
            </div>
            <div class="form-group pull-right" style="margin-right: 20px;">
              <select class="form-control">
                <option>Search by Month</option>
                <option>Jan</option>
                <option>Feb</option>
                <option>Mar</option>
              </select>
            </div>
          </div>  

          <div class="col-md-12">
            <div class="col-md-3 col-sm-6">
               <img src="images/registration_trade.png" alt="">
               <h2>New Customs Fees</h2>
               <h3>Decision #38/2017</h3>
               <hr align="right">
               <p>To amend the fees for services provided by Directorate General of Customs.</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/extention_of_temporary.png" alt="">
               <h2>New Broker Fees</h2>
               <h3>Decision #37/2017</h3>
               <hr align="right">
               <p>Amending some of the provisions of the executive decree organizing the brokering activity</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/transfer_consignment.png" alt="">
               <h2>Transfer consignment</h2>
               <h3>Services provided</h3>
               <hr align="right">
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/temporary_import.png" alt="">
               <h2>Temporary import</h2>
               <h3>Services provided</h3>
               <hr align="right">
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
          </div>

          <div class="col-md-12 marginTop50">
            <div class="col-md-3 col-sm-6">
               <img src="images/registration_trade.png" alt="">
               <h2>Registration trade partner</h2>
               <h3>Services provided</h3>
               <hr align="right">
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/extention_of_temporary.png" alt="">
               <h2>Extension of temporary</h2>
               <h3>Services provided</h3>
               <hr align="right">
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/transfer_consignment.png" alt="">
               <h2>Transfer consignment</h2>
               <h3>Services provided</h3>
               <hr align="right">
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/temporary_import.png" alt="">
               <h2>Temporary import</h2>
               <h3>Services provided</h3>
               <hr align="right">
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
          </div>
      </div>
   </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="pagination">
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
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
            
        });
    </script>

    </body>
</html>
