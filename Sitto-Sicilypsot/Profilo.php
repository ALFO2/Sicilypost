<?php session_start();
require 'funtion/function.php';
require 'funtion/DATABASE_FUNCTION.php';


?>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


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



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade"   id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" style="max-width:1400px;" >
        <div class="modal-content" >
          <div class="modal-header">
            <h5 class="modal-title" style="color:black;" id="staticBackdropLabel">SEGLIERE UN PACCHO PER PIU INFORMAZIONI</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="modal-body">
                <div class="card">
                 <div class="card-header">
                  Featured
                 </div>
                 <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
                </div>
              </div>
            </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="modal-body">
              <div class="card">
               <div class="card-header">
                Featured
               </div>
               <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="modal-body">
              <div class="card">
               <div class="card-header">
                Featured
               </div>
               <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="modal-body">
              <div class="card">
               <div class="card-header">
                Featured
               </div>
               <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="modal-body">
              <div class="card">
               <div class="card-header">
                Featured
               </div>
               <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
              </div>
            </div>
          </div>
          </div>



          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

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
                      <li class=""> <a href="index.php">Home</a> </li>
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

<div class="offcanvas offcanvas-bottom" style="height:700px; background-color:#ececf0; "data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
<div class="offcanvas-header">
<h1 class="offcanvas-title" id="offcanvasScrollingLabel" >PRENOTA RITIRO PACCO</h1>
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

</div>
<hr style="border-color:#43960f; height:10px; background-color:green;">
<div class="offcanvas-body">
  <p>Crea il tuo invio prenotazndo l'invio o la consegna in una SO</p>
<div class="row" style=" background-color:#fff; ">
<div class="col-xl-6 col-md-6 col-sm-9" >

  <div class="row">

  <div class="col-xl-6 col-md-6 col-sm-9" >
    <div class="form-group">
     <h1>Data Rititro</h1>
     <input type="Date"  class="form-control"  >
   </div>
  </div>

  <div class="col-xl-6 col-md-6 col-sm-9" >
    <div class="form-group">
     <h1>Lunghezza pacco</h1>
     <input type="number" id="lung" oninput="solonumeri('lung',8)" name="nome" min="0" max="95"class="form-control"  placeholder="0">
    <p style="color: red;" id="enome"></p>
   </div>
  </div>

  <div class="col-xl-6 col-md-6 col-sm-9" >
    <div class="form-group">
     <h1>Altezza</h1>
     <input type="number" id="alte" oninput="solonumeri('alte',8)" name="nome" min="0" max="95"class="form-control"  placeholder="o">
    <p style="color: red;" id="enome"></p>
   </div>
  </div>
  <div class="col-xl-6 col-md-6 col-sm-9" >
    <div class="form-group">
     <h1>Peso</h1>
     <input type="number" id="peso" oninput="solonumeri('peso',8)" name="nome" min="0" max="95" class="form-control"  placeholder="0">
    <p style="color: red;" id="enome"></p>
   </div>
  </div>

  <div class="col-xl-6 col-md-6 col-sm-9" >
    <div class="form-group">
     <input type="submit" name="" value="Crea">
   </div>
  </div>

  </div>
</div>
<div class="col-xl-6 col-md-6 col-sm-9" >
    <img src="https://image.flaticon.com/icons/png/512/123/123919.png" id="car" width="40%">
    <hr style="top:-10px; border-color:#43960f; height:10px; background-color:black;">
</div>

</div>
<style media="screen">
#car
{
    transition: transform 4s;
}

#car:hover {
  transform: translate(100%);
}
</style>

</div>
</div>




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
               <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Crea Prenotazione</button>
               <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"onclick="" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Traccia il mio pacco</button>
               <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"onclick="" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Le mie prenotazioni</button>
               <!--<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Invii</button>
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
            </div>-->
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
            <script src="js/validazione.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


<script>

</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<script src="js/validazione.js"></script>
<!-- end google map js -->



</body>

</html>
