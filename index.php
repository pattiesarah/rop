<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Home</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-select.min.css" rel="stylesheet">
   <link href="css/main.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel='stylesheet' id='Roboto-css' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
   <link rel='stylesheet' id='Patua+One-css' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
   <link rel="icon" type="image/png" href="images/favicon/favicon.jpg" sizes="32x32">
   <!-- CSS -->
   <!-- <link rel="stylesheet" href="css/global.css">
   <link rel="stylesheet" href="css/structure.css">
   <link rel="stylesheet" href="css/be_style.css">
   <link rel="stylesheet" href="css/custom.css"> -->

</head>
<body>
  <?php
    include('header.php');
  ?>




  <div class="container-fluid" style="background: #EDEEEE; padding-top: 15px;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 hidden-sm hidden-xs" style="padding-right:0px;">
          <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">
              <div class="carousel-inner" role="listbox">
                 <div class="item slide1 active">
                    <div class="bs-slider-overlay">
                    </div>


                    <div class="container-fluid banner slide1">
                             <div class="col-md-12 text-center">
                                <h1>R<span>oyal </span>O<span>man </span>P<span>olice</span></h1>
                                <h2>To provide professional customs administration.</h2>
                                <!-- <a class="learn" href="http://rop.gov.om/english/index.php">More Details</a> -->
                             </div>
                    </div>
                 </div>

                 <div class="item slide2">
                    <div class="bs-slider-overlay"></div>
                    <div class="container-fluid banner slide2">
                             <div class="col-md-12 text-center">
                                <h1>Our Vision</h1>
                                <h2>To provide professional customs administration, supporting security and the national economy.</h2>
                                <!-- <a class="learn" href="about.php">More Details</a> -->
                             </div>
                    </div>
                 </div>
                 <div class="item slide3">
                    <div class="bs-slider-overlay"></div>
                    <div class="container-fluid banner slide3">
                             <div class="col-md-12 text-center">
                                <h1>Our Mission</h1>
                                <h2>To provide professional customs administration.</h2>
                                <!-- <a class="learn" href="about.php">More Details</a> -->
                             </div>
                    </div>
                 </div>
              </div>

              <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                 <span class="fa fa-angle-left" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                 <span class="fa fa-angle-right" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
              </a>
          </div>          
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="bayan-div col-md-12 text-center">
             <h1>BAYAN</h1>
             <h2>Flexible, Accurate & Fast clearance of goods</h2>
             <p>The online single window/one-stop service offering from Royal Oman Police (ROP) - Directorate General of Customs</p>
             <a href="login.php">Login to Bayan</a>
          </div>         
        </div>
      </div>   
      <div class="news-scroller">
        <marquee scrollamount="3"><p><span>Dear Bayan User: The Directorate General of Customs intends to stop using name and password method to access  Bayan System, instead to access the system through ID/resident Card (TAM service. The system will not accept access via user name and password starting from 31/7/2017.</span><span style="margin-left: 80px">The Directorate General of Customs intends to stop using name and password method to access  Bayan System, instead to access the system through ID/resident Card (TAM service. The system will not accept access via user name and password starting from 31/7/2017.</span></p></marquee>
      </div>
    </div>
  </div>

<!-- 
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="news-scroller">
               <h3>News</h3>
               <marquee><p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</p></marquee>
            </div>
         </div>
      </div>
   </div> 
 -->

  <div class="service-div">
    <div class="container">
       <div class="row">
          <div class="header-service-block">
            <div class="col-md-2 col-sm-2 col-xs-4"><a class="content_link " href="business_service_1.php"><p><i class="fa fa-briefcase" aria-hidden="true"></i></p><p>Business Services</p></a></div>
            <div class="col-md-2 col-sm-2 col-xs-4"><a class="content_link " href="individual_service_1.php"><p><i class="fa fa-user-circle-o" aria-hidden="true"></i></p><p>Individual Services</p></a></div>
            <div class="col-md-2 col-sm-2 col-xs-4"><a class="content_link " href="business_service_1.php"><p><i class="fa fa-laptop" aria-hidden="true"></i></p><p>Government Services</p></a></div>
            <div class="col-md-2 col-sm-2 col-xs-4"><a class="content_link " href="traveller.php"><p><i class="fa fa-plane" aria-hidden="true"></i></p><p>Traveller Services</p></a></div>
            <div class="col-md-2 col-sm-2 col-xs-4"><a class="content_link " href="circular.php"><p><i class="fa fa-file-text-o" aria-hidden="true"></i></p><p class="circular">Circulars</p></a></div>
            <div class="col-md-2 col-sm-2 col-xs-4"><a class="content_link " href="reports.php"><p><i class="fa fa-line-chart" aria-hidden="true"></i></p><p class="statistics">Statistics</p></a></div>
          </div>
       </div>      
    </div>
  </div>
  <hr> 
  <div class="articles">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1><span class="border_bottom">Recent News</span></h1>
            <div class="col-md-3 col-sm-6">
               <img src="images/registration_trade.png" alt="">
               <div class="article-card">
                 <h2>New Customs Fees</h2>
                 <h3>Decision #38/2017</h3>
                 <p>To amend the fees for services provided by Directorate General of Customs.</p>
                 <a class="more" href="news-detail.php">Read..</a>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/extention_of_temporary.png" alt="">
               <div class="article-card">
                 <h2>New Broker Fees</h2>
                 <h3>Decision #37/2017</h3>
                 <p>Amending some of the provisions of the executive decree organizing the brokering activity</p>
                 <a class="more" href="news-detail.php">Read..</a>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/transfer_consignment.png" alt="">
               <div class="article-card">
                 <h2>Transfer consignment</h2>
                 <h3>Services provided</h3>
                 <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
                 <a class="more" href="news-detail.php">Read..</a>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/temporary_import.png" alt="">
               <div class="article-card">
                 <h2>Temporary import</h2>
                 <h3>Services provided</h3>
                 <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
                 <a class="more" href="news-detail.php">Read..</a>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>

  <div class="container-fluid md-socials">
    <div class="container">
       <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="https://twitter.com/omancustoms" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p></a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="http://instagram.com/royal_oman_police" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p></a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="https://www.facebook.com/ropomancustoms/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="readandmap">
    <div class="text-center marginB40">
      <h1><span class="border_bottom">Customs Offices</span></h1>
    </div>
    <div class="mapsearch">  
      <div class="office_search">
        <div class="pull-left" style="padding: 3px">
          <label>
           <select name="category" id="category"></select>
         </label>
        </div>
        <div class="pull-left" style="padding: 3px">
           <div aria-labelledby="dropdownMenuButton">
              <script type="text/javascript" language="JavaScript">
                 document.write('<label><select name="subcategory" id="subcategory"><option value="">Office</option></select></label>')
              </script>
           </div>
        </div>
      </div>            
      <div id="map"></div>
    </div>
  </div>
   
   <?php
    include('footer.php');
   ?>
   <script type="text/javascript" src="js/map.js"></script>
   <script>

      var neighborhoods = [
      // {lat: 23.584480, lng: 58.289138},
      // {lat: 17.021769, lng: 54.089239},
      // {lat: 17.068712, lng: 54.142662},
      // {lat: 23.624106, lng: 58.266611},//Muscat 1_1
      // {lat: 23.557038, lng: 58.354178},//Muscat 1_2
      // {lat: 17.037646, lng: 54.177997},//Salalah 2_1
      // {lat: 17.051761, lng: 54.019725},//Salalah 2_2
      // {lat: 17.092702, lng: 54.084694}//Dhofar 3_1
      ];

/*      var marker1;
      var marker2;
      var marker3;
      var marker4;
      var marker5;
      var marker6;
      var marker7;
      var marker8;*/
      var map;

      var styles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e1a837"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#005b85"
            }
        ]
    }
];

  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz-yeDSbEEuS2PZiWn_6xQhPMVzTwDPgE"></script>
  <script src="js/headhesive.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript">
    (function() {
      function addMarkerWithTimeout(newlat, newlng, timeout, location, address, phone, email) {
        window.setTimeout(function() {
        var marker1 = new google.maps.Marker({
           position: {lat: newlat, lng: newlng},
           map: map,
           title: "Location: "+location+", Phone:"+phone+", Adress: ---",
           animation: google.maps.Animation.DROP
        });

        var contentString = '<div id="content" style="">'+
         '<div id="siteNotice">'+
         '</div>'+
         '<h1 id="firstHeading" class="firstHeading" style="color:black; font-size: 20px;">'+location+'</h1>'+
         '<div id="bodyContent">'+
         '<p style="color:black; font-size: 10x;">' +
         'Adress: '+address+',<br>'+
         'Phone: '+phone+',<br>'+
         'Email: '+email+'</p>'+
         '<p><a href="https://www.google.com/maps?daddr='+newlat+','+newlng+'">Direction</a></p>'+
         '</div>'+
         '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 500
        });

        marker1.addListener('click', function() {
           infowindow.open(map, marker1);
        });

        }, timeout);
      }

      $('#category').on('change', function(){
        var loc_lat = parseFloat($('option:selected', this).attr('data-lat'));
        var loc_lng = parseFloat($('option:selected', this).attr('data-lng'));
        var loc_name = this.options[this.selectedIndex].value;
        var classname = loc_name+'_office';            
        $('.suboptions').hide();
        $('#subcategory').prop('selectedIndex',0)
        $('.'+classname).show();      

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: loc_lat, lng: loc_lng},
          styles: styles
        });
        $('.'+classname).each(function(index){
          var ofc_lat = parseFloat($(this).attr('data-lat'));
          var ofc_lng = parseFloat($(this).attr('data-lng'));
          var ofc_address = $(this).attr('data-address');
          var ofc_phone = $(this).attr('data-phone');
          var ofc_email = $(this).attr('data-email');
          var ofc_name = $(this).attr('value');
          // clearMarkers();
          addMarkerWithTimeout(ofc_lat, ofc_lng, index * 200, ofc_name, ofc_address, ofc_phone, ofc_email);
        })
      });

      $('#subcategory').on('change', function(){
        var loc_lat = parseFloat($('option:selected', this).attr('data-lat'));
        var loc_lng = parseFloat($('option:selected', this).attr('data-lng'));
        var loc_name = this.options[this.selectedIndex].value;
        var ofc_address = $('option:selected', this).attr('data-address');
        var ofc_phone = $('option:selected', this).attr('data-phone');
        var ofc_email = $('option:selected', this).attr('data-email');
        var ofc_loc = $('option:selected', this).attr('data-loc');
        var classname = ofc_loc+'_office';
        $('.'+classname).show();      
        // clearMarkers();
        addMarkerWithTimeout(loc_lat, loc_lng, 0 * 200, loc_name, ofc_address, ofc_phone, ofc_email);
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: {lat: loc_lat, lng: loc_lng},
          styles: styles
        });
      });

      $('select#category').html('');
      $('select#category').append('<option data-icon="glyphicon-home" value="">Location</option>');
      $('select#subcategory').html('');
      $('select#subcategory').append('<option value="">Select Office</option>');


      var map_json = "map.json";
      $.getJSON( map_json, {
        format: "json"
      }).done(function( data ) {
        var inc = 0;
        $.each( data, function( loc, item ) {
          var lat = parseFloat(item[0].lat);
          var lng = parseFloat(item[0].lng);              
          if(loc=="location0"){
            var name = item[0].name;
            map = new google.maps.Map(document.getElementById('map'), {
               zoom: 5,
               center: {lat: lat, lng: lng},
               styles: styles
            });
          }
          else{
            var name = item[0].name;
            $('#category').append($('<option data-lat="'+lat+'" data-lng="'+lng+'" value="'+name+'">'+name+'</option>' ));
            for (var i = 0; i < item.length; i++) {
              var office_name = item[i].office_name;
              var office_address = item[i].office_address;
              var office_phone = item[i].office_phone;
              var office_email = item[i].office_email;
              var office_lat = item[i].lat;
              var office_lng = item[i].lng;
              $('#subcategory').append($('<option class="'+name+'_office suboptions" data-loc="'+name+'" data-lat="'+office_lat+'" data-lng="'+office_lng+'" data-address="'+office_address+'" data-phone="'+office_phone+'" data-email="'+office_email+'" value="'+office_name+'">'+office_name+'</option>'));
              // if(loc=="location1"){
                // console.log(name+'_office')
                $('.'+name+'_office').hide();            
              // }
            }
            addMarkerWithTimeout(lat, lng, inc * 200, name, office_address, office_phone, office_email);
            inc++;
          }
        });
      });
    })();
  </script>
</body>
</html>