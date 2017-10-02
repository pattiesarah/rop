   <div class="container-fluid contacts">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="col-md-5 col-sm-12 col-xs-12 top-box-left">
                  <i class="fa fa-phone" aria-hidden="true"><a href="tel:+61383766284">+968-24349000</a></i>
                  <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:info@customs.goc.om">info@customs.goc.om</a></i>
               </div>
               <div class="col-md-7 col-sm-12 col-xs-12 top-box-right">
                  <a href="https://www.facebook.com/ropomancustoms/"><i title="Facebook" class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="https://twitter.com/omancustoms"><i title="Twitter" class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="http://instagram.com/royal_oman_police"><i title="Instagram" class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a title="Decrease font size" class="small-font" href="#">A-</a>
                  <a title="Normal font size" class="normal-font" href="#">A</a>
                  <a title="Increase font size" class="large-font" href="#">A+</a>
                  <i title="Black & White" class="grayscale fa fa-circle-o" aria-hidden="true"></i>
                  <span class="pipe">|</span>
                  <a class="mini-menu language" href="#">Arabic</a>
                  <a class="mini-menu" href="news.php">News</a>
                  <a class="mini-menu" href="about.php">About</a>
                  <a class="mini-menu" href="contactus.php">Contact</a>
                  <a class="mini-menu" href="login.php">Login & Registration</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid menu">
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.php"><img class="scale-with-grid" src="images/logo.jpg" /></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li>
                     <a class="active" href="index.php">Home</a>
                  </li>
                  <li>
                     <a href="media.php">Media Center</a>
                  </li>
                  <li>
                     <a href="reports.php">Downloads</a>
                  </li>
                  <li>
                     <a href="customs_procedures.php">Custom Procedures</a>
                  </li>
                  <li>
                     <a href="inner.php">Laws & Regulations</a>
                  </li>                  
               </ul>
               <form class="navbar-form searchone" role="search">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search">
                     <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                           <span class="glyphicon glyphicon-search">
                              <span class="sr-only">Search</span>
                           </span>
                        </button>
                     </span>
                  </div>
               </form>
               <div class="input-group bayan">
                  <a href="index.php" class="text-center"><img src="images/bayan.png" width="80px" alt="Bayan"/></a>
               </div>
               <div class="col-xs-12">
                  <div class="input-group searchtwo">
                     <input type="text" class="form-control" placeholder="Search" />
                     <span class="input-group-btn"><button class="btn btn-secondary" type="button">Go!</button></span>
                  </div>
               </div>
            </div>
         </div>
      </nav>
   </div>

   <script>

         $('.language').on('click',function(){
            if( $(this).php() == 'English' ){
               $(this).php('Arabic');
            }else{
               $(this).php('English');
            }
         });
         $('.grayscale').on('click',function(){
            if($('body').hasClass('grayscale_body')){
               $('body').removeClass('grayscale_body');
            }else{
               $('body').addClass('grayscale_body');
            }
         });
         $('.small-font').on('click',function(){
            $('body').removeClass('zoom-xl');
            $('body').removeClass('zoom-l');
            if(!$('body').hasClass('zoom-xs')){
               if($('body').hasClass('zoom-s')){
                  $('body').addClass('zoom');
                  $('body').removeClass('zoom');
                  $('body').removeClass('zoom-s');
                  $('body').addClass('zoom-xs');
               }else{
                  $('body').addClass('zoom');
                  $('body').removeClass('zoom');
                  $('body').addClass('zoom-s');
               }
            }
         });
         $('.normal-font').on('click',function(){
            $('body').removeClass('zoom-xs');
            $('body').removeClass('zoom-s');
            $('body').removeClass('zoom-xl');
            $('body').removeClass('zoom-l');
            $('body').addClass('zoom');
         });
         $('.large-font').on('click',function(){
            $('body').removeClass('zoom-xs');
            $('body').removeClass('zoom-s');
            if(!$('body').hasClass('zoom-xl')){
               if($('body').hasClass('zoom-l')){
                  $('body').addClass('zoom');
                  $('body').removeClass('zoom');
                  $('body').removeClass('zoom-l');
                  $('body').addClass('zoom-xl');
               }else{
                  $('body').addClass('zoom');
                  $('body').removeClass('zoom');
                  $('body').addClass('zoom-l');
               }
            }
         });

      </script>