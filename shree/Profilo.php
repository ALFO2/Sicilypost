<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Sicilypost</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/mycss.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>




    <!-- header inner -->
<div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.php"> <h1>Sicilypost</h1> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">

               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main" style="height: 30px;">
                      <li class="active"> <a href="index.php">Home</a> </li>
                     <li> <a href="index.php"><img src="icon/icon_b.png" alt="#" /></a></li>
                     </ul>
                   </nav>
                 </div>
               </div>
              </div>
           </div>
         </div>
       </div>
</div>
     <!-- end header inner -->







     <!-- Navbar on small screens -->
     <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
       <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
       <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
       <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
       <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
     </div>

     <!-- Page Container -->
     <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
       <!-- The Grid -->
       <div class="w3-row">
         <!-- Left Column -->
         <div class="w3-col m3">
           <!-- Profile -->
           <div class="w3-card w3-round w3-white">
             <div class="w3-container">
              <h4 class="w3-center">Paul Alarcon</h4>
              <p class="w3-center"><img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-profile-line-black-icon-png-image_691051.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
              <hr>
              <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Student, UI</p>
              <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Milano, MI</p>
              <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> August 15, 2002</p>
              <p><i class="fa fa-address-card fa-fw w3-margin-right w3-text-theme"></i> Codice fiscale</p>
              <hr>
             </div>
           </div>
           <br>

           <!-- Accordion -->
           <div class="w3-card w3-round">
             <div class="w3-white">
               <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
               <div id="Demo1" class="w3-hide w3-container">
                 <p>Some text..</p>
               </div>
               <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
               <div id="Demo2" class="w3-hide w3-container">
                 <p>Some other text..</p>
               </div>
               <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
               <div id="Demo3" class="w3-hide w3-container">
              <div class="w3-row-padding">
              <br>
                <div class="w3-half">
                  <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
                <div class="w3-half">
                  <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
                </div>
              </div>
               </div>
             </div>
           </div>
           <br>

           <!-- Interests -->

           <br>

           <!-- Alert Box
           <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
             <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
               <i class="fa fa-remove"></i>
             </span>
             <p><strong>Hey!</strong></p>
             <p>People are looking at your profile. Find out who.</p>
           </div>

           End Left Column -->
         </div>

         <!-- Middle Column -->
         <div class="w3-col m7">



           <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
             <img src="https://png.pngtree.com/png-vector/20190721/ourlarge/pngtree-packed-box-icon-for-your-project-png-image_1561639.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
             <span class="w3-right w3-opacity">1 min</span>
             <h4>John Doe</h4><br>
             <hr class="w3-clear">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               <div class="w3-row-padding" style="margin:0 -16px">
                 <div class="w3-half">
                   <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                 </div>
                 <div class="w3-half">
                   <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
               </div>
             </div>
             <hr>
             <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-circle-o-notch"></i>  Like</button>
             <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
           </div>

           <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
             <img src="https://png.pngtree.com/png-vector/20190721/ourlarge/pngtree-packed-box-icon-for-your-project-png-image_1561639.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
             <span class="w3-right w3-opacity">16 min</span>
             <h4>Jane Doe</h4><br>
             <hr class="w3-clear">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               <hr>
             <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom" ><i class="fa fa-circle-o-notch" ></i>Valuta</button>
             <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
           </div>
          <style media="screen">
            .w3-theme-d1
            {
              color: #fff !important;
              background-color:#428713 !important;
            }
            .w3-text-theme {
               color: #428713 !important;
               }
            .w3-card, .w3-card-2 {
            box-shadow: #ddd 0px 0px 13px 5px;
            }
            h1, h2, h3, h4, h5, h6 {
    letter-spacing: 0;
    font-weight: normal;
    position: relative;
    padding: 0 0 10px 0;
    font-weight: normal;
    line-height: normal;
    color: #111111;
    margin: 0;
}
          </style>


         <!-- End Middle Column -->
         </div>

         <!-- Right Column -->
           <!-- <div class="w3-col m2">
           <div class="w3-card w3-round w3-white w3-center">
             <div class="w3-container">
               <p>Upcoming Events:</p>
               <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
               <p><strong>Holiday</strong></p>
               <p>Friday 15:00</p>
               <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
             </div>
           </div>
           <br>

            <div class="w3-card w3-round w3-white w3-center">
             <div class="w3-container">
               <p>Friend Request</p>
               <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
               <span>Jane Doe</span>
               <div class="w3-row w3-opacity">
                 <div class="w3-half">
                   <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                 </div>
                 <div class="w3-half">
                   <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                 </div>
               </div>
             </div>
           </div>
           <br>

           <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
             <p>ADS</p>
           </div>
           <br>

           <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
             <p><i class="fa fa-bug w3-xxlarge"></i></p>
           </div>

          End Right Column
         </div>-->

       <!-- End Grid -->
       </div>

     <!-- End Page Container -->
     </div>
     <br>

     <!-- Footer -->


     <script>
     // Accordion
     function sewpass() {
       var x = document.getElementById("pass");
       if (x.type === "password") {
         x.type = "text";
       } else {
         x.type = "password";
       }
     }
     function myFunction(id) {
       var x = document.getElementById(id);
       if (x.className.indexOf("w3-show") == -1) {
         x.className += " w3-show";
         x.previousElementSibling.className += " w3-theme-d1";
       } else {
         x.className = x.className.replace("w3-show", "");
         x.previousElementSibling.className =
         x.previousElementSibling.className.replace(" w3-theme-d1", "");
       }
     }

     // Used to toggle the menu on smaller screens when clicking on the menu button
     function openNav() {
       var x = document.getElementById("navDemo");
       if (x.className.indexOf("w3-show") == -1) {
         x.className += " w3-show";
       } else {
         x.className = x.className.replace(" w3-show", "");
       }
     }
     </script>





    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="#" class="logo_footer">
              <h1 style="color: #fff;">SicilyPost</h1> </a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>It is a long established fact
                        <br>that a reader will be  </li>
                        <li>
                          <a href="#"></a>(+71 1234567890) </li>
                          <li>
                            <a href="#"></a>demo@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>


                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">

                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2021<a href="">Paul Alarcon</a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>