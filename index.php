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

   <script language="javascript" type="text/javascript">
      function dynamicdropdown(listindex)
      {
       document.getElementById("subcategory").length = 0;
       switch (listindex)
       {
        case "Muscat" :
        document.getElementById("subcategory").options[0]=new Option("Select Office","");
        document.getElementById("subcategory").options[1]=new Option("Office 1","Office 1");
        document.getElementById("subcategory").options[2]=new Option("Office 1_1","Office 1_1");
        document.getElementById("subcategory").options[3]=new Option("Office 1_2","Office 1_2");
        break;

        case "Salalah" :
        document.getElementById("subcategory").options[0]=new Option("Select Office","");
        document.getElementById("subcategory").options[1]=new Option("Office 2","Office 2");
        document.getElementById("subcategory").options[2]=new Option("Office 2_1","Office 2_1");
        document.getElementById("subcategory").options[3]=new Option("Office 2_2","Office 2_2");
        break;
        case "Dhofar" :
        document.getElementById("subcategory").options[0]=new Option("Select Office","");
        document.getElementById("subcategory").options[1]=new Option("Office 3","Office 3");
        document.getElementById("subcategory").options[2]=new Option("Office 3_1","Office 3_1");
        break;
     }
     return true;
  }
</script>
</head>
<body>
  <?php
  include('header.php');
  ?>
   <div class="container-fluid" style="background: #EDEEEE; padding-top: 15px;">
   <div class="container">
   <div class="row">
      <div class="col-md-8 col-sm-12 hidden-sm hidden-xs" style="padding-right:5px;">
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
         <div class="header-service-block">
            <div class="col-md-4 col-sm-2 col-xs-4"><a class="content_link " href="business_service_1.php"><p><i class="fa fa-briefcase" aria-hidden="true"></i></p><p class="title">Business Services</p></a></div>
            <div class="col-md-4 col-sm-2 col-xs-4"><a class="content_link " href="individual_service_1.php"><p><i class="fa fa-user-circle-o" aria-hidden="true"></i></p><p class="title">Individual Services</p></a></div>
            <div class="col-md-4 col-sm-2 col-xs-4"><a class="content_link " href="business_service_1.php"><p><i class="fa fa-laptop" aria-hidden="true"></i></p><p class="title">Government Services</p></a></div>
            <div class="col-md-4 col-sm-2 col-xs-4"><a class="content_link " href="individual_service_1.php"><p><i class="fa fa-plane" aria-hidden="true"></i></p><p class="title">Traveller Services</p></a></div>
            <div class="col-md-4 col-sm-2 col-xs-4"><a class="content_link " href="circular.php"><p><i class="fa fa-file-text-o" aria-hidden="true"></i></p><p class="title circular">Circulars</p></a></div>
            <div class="col-md-4 col-sm-2 col-xs-4"><a class="content_link " href="reports.php"><p><i class="fa fa-line-chart" aria-hidden="true"></i></p><p class="title statistics">Statistics</p></a></div>
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
   </div> -->

   <div class="bayan-div">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1>BAYAN</h1>
               <h2>Seamless, Convenient & Fast clearance of goods</h2>
               <p>The online single window/one-stop service offering from Royal Oman Police (ROP) - Directorate General of Customs</p>
               <a href="login.php">Login to Bayan</a>
            </div>
         </div>      
      </div>
   </div>
   <div class="eservices">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1><span class="border_bottom">e-Services</span></h1>
               <div class="col-md-3 col-sm-6">
                  <span class="fa-stack fa-2x">
                    <!-- <i class="fa fa-square-o fa-stack-2x"></i> -->
                    <i class="fa fa-paper-plane-o fa-stack-1x"></i>
                  </span>
                  <h3>Declaration Processing</h3>
                  <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
                  <a class="learn" href="declaration.php">More Details</a>
               </div>
               <div class="col-md-3 col-sm-6">
                  <span class="fa-stack fa-2x">
                    <!-- <i class="fa fa-square-o fa-stack-2x"></i> -->
                    <i class="fa fa-ship fa-stack-1x"></i>
                  </span>
                  <h3>Manifest Processing</h3>
                  <p>Registration of manifest for Shipping Agents and Freight Forwarders / Consolidators.</p>
                  <a class="learn" href="manifest.php">More Details</a>
               </div>
               <div class="col-md-3 col-sm-6">
                  <span class="fa-stack fa-2x">
                    <!-- <i class="fa fa-square-o fa-stack-2x"></i> -->
                    <i class="fa fa-money fa-stack-1x"></i>
                  </span>
                  <h3>Payment & Refund</h3>
                  <p>Online payment & refund of customs fees, duties and penalties.</p>
                  <a class="learn" href="payment.php">More Details</a>
               </div>
               <div class="col-md-3 col-sm-6">
                  <span class="fa-stack fa-2x">
                    <!-- <i class="fa fa-square-o fa-stack-2x"></i> -->
                    <i class="fa fa-id-card-o fa-stack-1x"></i>
                  </span>
                  <h3>Permits & Exemptions</h3>
                  <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
                  <a class="learn" href="permit.php">More Details</a>
               </div>
            </div>
         </div>
      </div>    
   </div>
   <div class="articles">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1><span class="border_bottom">Recent Articles</span></h1>
            <div class="col-md-3 col-sm-6">
               <img src="images/registration_trade.png" alt="">
               <h2>New Customs Fees</h2>
               <h3>Decision #38/2017</h3>
               <hr>
               <p>To amend the fees for services provided by Directorate General of Customs.</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/extention_of_temporary.png" alt="">
               <h2>New Broker Fees</h2>
               <h3>Decision #37/2017</h3>
               <hr>
               <p>Amending some of the provisions of the executive decree organizing the brokering activity</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/transfer_consignment.png" alt="">
               <h2>Transfer consignment</h2>
               <h3>Services provided</h3>
               <hr>
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
            <div class="col-md-3 col-sm-6">
               <img src="images/temporary_import.png" alt="">
               <h2>Temporary import</h2>
               <h3>Services provided</h3>
               <hr>
               <p>Declaration processing e-Service enables the Importer/Exporter (or their authorized goods)</p>
               <a class="more" href="news-detail.php">Read..</a>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div class="container-fluid socials">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1><span class="border_bottom">Social Media Activity</span></h1>
               <div class="col-md-4 hidden-sm hidden-xs">
                  <div class="twitter-div">
                     <div class="text-center">
                        <p><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p>
                     </div>
                     <a class="twitter-timeline" data-width="370" data-height="450" href="https://twitter.com/omancustoms">Tweets by omancustoms</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </div>   
               </div>
               <div class="col-md-4 hidden-sm hidden-xs">
                  <div class="insta-div">
                     <div class="text-center">
                     <p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p>
                     </div>
                     <iframe src="http://auen.ru/instablock.php?u=royal_oman_police&count=12&w=100&fw=370&fh=450&il=0&tb=Royal Oman Police&cb=2&st=1&tl=View&cl=1" style="width:100%;height:450px;border: 0px;"></iframe>
                  </div>
               </div>
               <div class="col-md-4 hidden-sm hidden-xs">
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
   </div>    
   <div class="container-fluid md-socials">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
              <a href="https://twitter.com/omancustoms" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <a href="http://instagram.com/royal_oman_police" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <a href="https://www.facebook.com/ropomancustoms/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</p>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="readandmap">
      <div class="mapsearch">  
        <div class="office_search">
          <div class="pull-left" style="padding: 3px">
            <label>
             <select name="category" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value); loadTown();">
                <option data-icon="glyphicon-home" value="">Location</option>
                <option  value="Muscat">Muscat</option>
                <option  value="Salalah">Salalah</option>
                <option  value="Dhofar">Dhofar</option>
             </select>
           </label>
          </div>
          <div class="pull-left" style="padding: 3px">
             <div aria-labelledby="dropdownMenuButton">
                <script type="text/javascript" language="JavaScript">
                   document.write('<label><select onchange="loadOffice();" name="subcategory" id="subcategory"><option value="">Office</option></select> </label>')
                </script>
             </div>
          </div>
        </div>            
        <div id="map"></div>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117009.9018939686!2d58.3646958!3d23.5842615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ffa8879aafc9%3A0xdb53876d0d79a72c!2z0JzQsNGB0LrQsNGCLCDQntC80LDQvQ!5e0!3m2!1sru!2sby!4v1493156983054" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
      </div>
    </div>
   
   <?php
    include('footer.php');
   ?>
   <script type="text/javascript" src="js/map.js"></script>
   <script>

      var neighborhoods = [
      {lat: 23.584480, lng: 58.289138},
      {lat: 17.021769, lng: 54.089239},
      {lat: 17.068712, lng: 54.142662},
      {lat: 23.624106, lng: 58.266611},//Muscat 1_1
      {lat: 23.557038, lng: 58.354178},//Muscat 1_2
      {lat: 17.037646, lng: 54.177997},//Salalah 2_1
      {lat: 17.051761, lng: 54.019725},//Salalah 2_2
      {lat: 17.092702, lng: 54.084694}//Dhofar 3_1
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
]
;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
           zoom: 5,
           center: {lat: 21.125149, lng: 56.478045},
           styles: styles
        });
      }

    
    function init(){
       clearMarkers();
       addMarkerWithTimeout(neighborhoods[0], 0 * 200);
       clearMarkers();
       addMarkerWithTimeout2(neighborhoods[1], 1 * 200);
       clearMarkers();
       addMarkerWithTimeout3(neighborhoods[2], 2 * 200);
       clearMarkers();
       addMarkerWithTimeout1_1(neighborhoods[3], 3 * 200);
       clearMarkers();
       addMarkerWithTimeout1_2(neighborhoods[4], 4 * 200);
       clearMarkers();
       addMarkerWithTimeout2_1(neighborhoods[5], 5 * 200);
       clearMarkers();
       addMarkerWithTimeout2_2(neighborhoods[6], 6 * 200);
       clearMarkers();
       addMarkerWithTimeout3_1(neighborhoods[7], 7 * 200);

    }

         /*    function loadTown(){
             var selectBox = document.getElementById("category").value;
             var selectedValue = selectBox.options[selectBox.selectedIndex].value;
             alert(selectBox);
          }*/

          function loadTown(){
             var selectBox = document.getElementById("category");
             var selectedValue = selectBox.options[selectBox.selectedIndex].value;
             switch(selectedValue){
              case "Muscat":
              map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: {lat: 23.584480, lng: 58.289138},
                styles: styles
            });
              clearMarkers();
              addMarkerWithTimeout(neighborhoods[0], 0 * 200);
              clearMarkers();
              addMarkerWithTimeout1_1(neighborhoods[3], 3 * 200);
              clearMarkers();
              addMarkerWithTimeout1_2(neighborhoods[4], 4 * 200);
              break;
              case "Salalah":
              map = new google.maps.Map(document.getElementById('map'), {
              zoom: 12,
              center: {lat: 17.021769, lng: 54.089239},
              styles: styles
            });
              clearMarkers();
              addMarkerWithTimeout2(neighborhoods[1], 1 * 200);
              clearMarkers();
              addMarkerWithTimeout2_1(neighborhoods[5], 5 * 200);
              clearMarkers();
              addMarkerWithTimeout2_2(neighborhoods[6], 6 * 200);
              break;
              case "Dhofar":
              map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: {lat: 17.068712, lng: 54.142662},
                styles: styles
            });
              clearMarkers();
              addMarkerWithTimeout3(neighborhoods[2], 2 * 200);
              clearMarkers();
              addMarkerWithTimeout3_1(neighborhoods[7], 7 * 200);
              break;

           }
        }

        function loadOffice(){
          var office = document.getElementById("subcategory").value;
          console.log(office);
          switch(office){
           case "Office 1":

           drop1();
           break;
           case "Office 1_1":
           drop1_1();
           break;
           case "Office 1_2":
           drop1_2();
           break;
           case "Office 2":
           drop2();
           break;
           case "Office 2_1":
           drop2_1();
           break;
           case "Office 2_2":
           drop2_2();
           break;
           case "Office 3":
           drop3();
           break;
           case "Office 3_1":
           drop3_1();
           break;
        }
         /*        if(office = "Office 1"){
                 alert("first");
                 drop1();
             }else{
                 console.log("Не верный город");
             };
             if(office = "Office 2"){
                 alert("second");
                 drop2();
             }else{
                 console.log("Не верный город");
             };
             if(office = "Office 3"){
                 alert("third");
                 drop3();
             }else{
                 console.log("Не верный город");
              };*/
           };

           function drop1() {
             clearMarkers();
             addMarkerWithTimeout(neighborhoods[0], 0 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: {lat: 23.584480, lng: 58.289138},
              styles: styles
            });
          }

          function drop1_1() {
             clearMarkers();
             addMarkerWithTimeout1_1(neighborhoods[3], 3 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
               zoom: 17,
               center: {lat: 23.624106, lng: 58.266611},
           styles: styles
            });
          }

          function drop1_2() {
             clearMarkers();
             addMarkerWithTimeout1_2(neighborhoods[4], 4 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
               zoom: 17,
               center: {lat: 23.557038, lng: 58.354178},
           styles: styles
            });
          }

          function drop2() {
             clearMarkers();
             addMarkerWithTimeout2(neighborhoods[1], 1 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
               zoom: 17,
               center: {lat: 17.021769, lng: 54.089239},
           styles: styles
            });
          }

          function drop2_1() {
             clearMarkers();
             addMarkerWithTimeout2_1(neighborhoods[5], 5 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
               zoom: 17,
               center: {lat: 17.037646, lng: 54.177997},
           styles: styles
            });
          }

          function drop2_2() {
             clearMarkers();
             addMarkerWithTimeout2_2(neighborhoods[6], 6 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
               zoom: 17,
               center: {lat: 17.051761, lng: 54.019725},
           styles: styles
            });
          }

          function drop3() {
             clearMarkers();
             addMarkerWithTimeout3(neighborhoods[2], 2 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
               zoom: 17,
               center: {lat: 17.068712, lng: 54.142662},
           styles: styles
            });
          }

          function drop3_1() {
             clearMarkers();
             addMarkerWithTimeout3_1(neighborhoods[7], 7 * 200);
             map = new google.maps.Map(document.getElementById('map'), {
               zoom: 17,
               center: {lat: 17.092702, lng: 54.084694},
           styles: styles
            });
          }

          function addMarkerWithTimeout(position, timeout) {

             window.setTimeout(function() {
               var marker1 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Muscat, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              });

               var contentString = '<div id="content" style="">'+
               '<div id="siteNotice">'+
               '</div>'+
               '<h1 id="firstHeading" class="firstHeading" style="color:black; font-size: 20px;">Muscat</h1>'+
               '<div id="bodyContent">'+
               '<p style="color:black; font-size: 10x;">Office Name: Muscat;<br>' +
               'Office Adress: Adress1234;<br>'+
               'Office Number: 1234567;<br>'+
               'Email: support@customs.gov.om;</p>'+
               '<p><a href="https://www.google.com/maps?daddr=23.584480,58.289138">Direction</a></p>'+
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

          function addMarkerWithTimeout1_1(position, timeout) {
             window.setTimeout(function() {
               var marker2 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Muscat1_1, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              }
              );

               var contentString = '<div id="content">'+
               '<div id="siteNotice">'+
               '</div>'+
               '<h1 id="firstHeading" class="firstHeading" style="color:black;">Muscat 1_1</h1>'+
               '<div id="bodyContent">'+
               '<p style="color:black;">Office Name: Muscat 1_1;<br>' +
               'Office Adress: Adress1234;<br>'+
               'Office Number: 1234567;<br>'+
               'Email: support@customs.gov.om;</p>'+
               '<p><a href="https://www.google.com/maps?daddr=23.624106,58.266611">Direction</a></p>'+
               '</div>'+
               '</div>';

               var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400,
                maxHeight: 40
             });

               marker2.addListener('click', function() {
                 infowindow.open(map, marker2);
              });
               /*markers[0].addListener('click', function() {
                infowindow.open(map, markers[0]);
             });*/


          }, timeout);

          }

          function addMarkerWithTimeout1_2(position, timeout) {
             window.setTimeout(function() {
               var marker3 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Muscat1_2, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              });

               var contentString = '<div id="content">'+
               '<div id="siteNotice">'+
               '</div>'+
               '<h1 id="firstHeading" class="firstHeading" style="color:black;">Muscat 1_2</h1>'+
               '<div id="bodyContent">'+
               '<p style="color:black;">Office Name: Muscat 1_2;<br>' +
               'Office Adress: Adress1234;<br>'+
               'Office Number: 1234567;<br>'+
               'Email: support@customs.gov.om;</p>'+
               '<p><a href="https://www.google.com/maps?daddr=23.557038,58.354178">Direction</a></p>'+
               '</div>'+
               '</div>';

               var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400,
                maxHeight: 40
             });

               marker3.addListener('click', function() {
                 infowindow.open(map, marker3);
              });

            }, timeout);
          }

          function addMarkerWithTimeout2(position, timeout) {

             window.setTimeout(function() {
               var marker4 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Salalah, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              });

               var contentString = '<div id="content">'+
               '<div id="siteNotice">'+
               '</div>'+
               '<h1 id="firstHeading" class="firstHeading" style="color:black;">Salalah</h1>'+
               '<div id="bodyContent">'+
               '<p style="color:black;">Office Name: Salalah;<br>' +
               'Office Adress: Adress1234;<br>'+
               'Office Number: 1234567;<br>'+
               'Email: support@customs.gov.om;</p>'+
               '<p><a href="https://www.google.com/maps?daddr=17.021769,54.089239">Direction</a></p>'+
               '</div>'+
               '</div>';

               var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400,
                maxHeight: 40
             });

               marker4.addListener('click', function() {
                 infowindow.open(map, marker4);
              });


            }, timeout);
          }

          function addMarkerWithTimeout2_1(position, timeout) {
             window.setTimeout(function() {
               var marker5 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Salalah, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              });

               var contentString = '<div id="content">'+
               '<div id="siteNotice">'+
               '</div>'+
               '<h1 id="firstHeading" class="firstHeading" style="color:black;">Salalah 2_1</h1>'+
               '<div id="bodyContent">'+
               '<p style="color:black;">Office Name: Salalah 2_1;<br>' +
               'Office Adress: Adress1234;<br>'+
               'Office Number: 1234567;<br>'+
               'Email: support@customs.gov.om;</p>'+
               '<p><a href="https://www.google.com/maps?daddr=17.037646,54.177997">Direction</a></p>'+
               '</div>'+
               '</div>';

               var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400,
                maxHeight: 40
             });

               marker5.addListener('click', function() {
                 infowindow.open(map, marker5);
              });


            }, timeout);
          }

          function addMarkerWithTimeout2_2(position, timeout) {
             window.setTimeout(function() {
               var marker6 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Salalah, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              });

               var contentString = '<div id="content">'+
               '<div id="siteNotice">'+
               '</div>'+
               '<h1 id="firstHeading" class="firstHeading" style="color:black;">Salalah 2_2</h1>'+
               '<div id="bodyContent">'+
               '<p style="color:black;">Office Name: Salalah 2_2;<br>' +
               'Office Adress: Adress1234;<br>'+
               'Office Number: 1234567;<br>'+
               'Email: support@customs.gov.om;</p>'+
               '<p><a href="https://www.google.com/maps?daddr=17.051761,54.019725">Direction</a></p>'+
               '</div>'+
               '</div>';

               var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400,
                maxHeight: 40
             });

               marker6.addListener('click', function() {
                 infowindow.open(map, marker6);
              });

            }, timeout);
          }

          function addMarkerWithTimeout3(position, timeout) {
             window.setTimeout(function() {
              var marker7 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Dhofar, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              });

              var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h1 id="firstHeading" class="firstHeading" style="color:black;">Dhofar</h1>'+
              '<div id="bodyContent">'+
              '<p style="color:black;">Office Name: Dhofar;<br>' +
              'Office Adress: Adress1234;<br>'+
              'Office Number: 1234567;<br>'+
               'Email: support@customs.gov.om;</p>'+
              '<p><a href="https://www.google.com/maps?daddr=17.068712,54.142662">Direction</a></p>'+
              '</div>'+
              '</div>';

              var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400,
                maxHeight: 40
             });

              marker7.addListener('click', function() {
                 infowindow.open(map, marker7);
              });

           }, timeout);
          }

          function addMarkerWithTimeout3_1(position, timeout) {
             window.setTimeout(function() {
              var marker8 = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: "Office name: Dhofar, number:12345678, Adress: ---",
                 animation: google.maps.Animation.DROP
              });

              var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h1 id="firstHeading" class="firstHeading" style="color:black;">Dhofar 3_1</h1>'+
              '<div id="bodyContent">'+
              '<p style="color:black;">Office Name: Dhofar 3_1;<br>' +
              'Office Adress: Adress1234;<br>'+
              'Office Number: 1234567;<br>'+
              'Email: support@customs.gov.om;</p>'+
              '<p><a href="https://www.google.com/maps?daddr=17.092702,54.084694">Direction</a></p>'+
              '</div>'+
              '</div>';

              var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400,
                maxHeight: 40
             });

              marker8.addListener('click', function() {
                 infowindow.open(map, marker8);
              });

           }, timeout);
          }

          function clearMarkers() {
/*           var marker1.setMap(null);
            marker2.setMap(null);
            marker3.setMap(null);
            marker4.setMap(null);
            marker5.setMap(null);
            marker6.setMap(null);
            marker7.setMap(null);
            marker8.setMap(null);*/
         }
         init();

      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz-yeDSbEEuS2PZiWn_6xQhPMVzTwDPgE&callback=initMap"></script>
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
      <script src="js/headhesive.min.js"></script>
      <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      
   </body>
   </html>