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
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <!--<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>-->
  <!-- end loader -->
  <!-- header -->
  <header>

    <!-- Modal -->
    <div class="modal fade row" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  col-xl-2" id="sii" role="document">
        <div class="modal-content " id="modalcontent" style="height:700px;">


          <div class=" ">
            <div class="column " id="main">

                <h1 id="textm">Sign Up </h1>
               <h3 id="textm">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
              <form method="post" >
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" id="nome" oninput="va_login('nome','enome','nome')" name="nome" class="form-control"  placeholder="Name">
                  <p style="color: red;" id="enome"></p>
                </div>
                <div class="form-group">

                <label for="exampleInputEmail1">E-mail </label>
                  <input type="email" id="ema" oninput="va_login('ema','eemail','email')" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="E-mail">
                  <p style="color: red;" id="eemail"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" id="pass" oninput="va_login('pass','epass','password')" name="password" class="form-control"  placeholder="Password">
                  <p style="color: red;" id="epass"></p>
                </div>
                <div class="">
                  <label for="check" style="font-size:15px;">Check Password</label>
                  <input type="checkbox"  id="cont" onclick="see('cont','pass')"  >
                </div>
                <button type="submit" id="sign"  name="signin" class="btn btn-primary">Sign in</button>
                <a href="sign-up.php">Sign up</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php
          if ($_SERVER["REQUEST_METHOD"]=="POST") {
              if (isset($_POST['signin'])) {
               $nome=$_POST['nome'];
               $email=$_POST['email'];
               $password=$_POST['password'];

                if (login($nome,$email,$password)) {
                  $_SESSION["utente"]=SQL("Select Cod_fc from utente where nome='".$nome."' and email='".$email."'",'Cod_fc');
                }
                else
                {
                  echo "no esist";
                }
              }
             }

    ?>
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
                    <ul class="menu-area-main" >
                      <li class="active"> <a href="index.php">Home</a> </li>
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="#testimonial">Testomonial</a> </li>
                      <li> <a href="#contact">Contact Us</a> </li>
                      <?php if (isset($_SESSION["utente"])): ?>
                      <li> <a href="Profilo.php">Profile</a> </li>
                      <?php endif; ?>
                     <?php if (!isset($_SESSION["utente"])): ?>
                     <li><a href="#"data-toggle="modal" data-target="#exampleModal">Sign in </a> </li>
                     <?php endif; ?>
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

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Welcome To Sicilypost</span>
                      <h1>Delivery Company</h1>
                      <p>Scilypost is a home delivery company with cheap and very honest prices. discover also our super subscriptions made to your measure </p>
                      <form class="Vegetable">

              </form>
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="https://image.flaticon.com/icons/png/512/123/123919.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To Sicilypost</span>
                       <h1>We deliver for you</h1>
                       <p>With more than 1000 destinations and 500 operational offices, we will do everything for you,</p>
                       <form class="Vegetable">

               </form>
                      <a href="#">Contact Us</a>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="https://image.flaticon.com/icons/png/512/123/123919.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To Sicilypost</span>
                       <h1>Your money, Our commitment</h1>
                       <p>Our workers take care of collections and deliveries to facilitate your experience of our service.
And we ensure the safety and respect of your package</p>
                       <form class="Vegetable">

               </form>
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                    <figure><img src="https://image.flaticon.com/icons/png/512/123/123919.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About us</h2>
          <p></p>
          <a href="Javascript:void(0)">Read more</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="images/posta.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- vegetable -->
<div id="vegetable" class="vegetable">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div  class="titlepage">
          <h2> Pick up  <strong class="llow">at home</strong> </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>Best service</h3>
          <p></p>
        </div>
      </div>
       <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="https://store.webgriffe.com/media/catalog/product/cache/1/image/500x/9df78eab33525d08d6e5fb8d27136e95/e/x/extension_ritiro.png" alt="#"/></figure>
         <span>01</span>
        </div>
      </div>
       <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
        <div class="vegetable_img margin_top">
         <figure><img src="https://cdn2.hubspot.net/hubfs/4052981/ritiro%20e%20consegna%20pacchi%20a%20domicilio%20cop%20ok.jpg" alt="#"/></figure>
         <span>02</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end vegetable -->




   <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>testimonial</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-profile-line-black-icon-png-image_691051.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Pino il bello<br><strong class="ornage_color">review</strong></h3>
                                            <p>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-profile-line-black-icon-png-image_691051.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Pino il bello<br><strong class="ornage_color">review</strong></h3>
                                            <p>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div id="testomonial" class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-profile-line-black-icon-png-image_691051.jpg" alt="#"/></figure>
                                            <i><img src="images/test_con.png" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <h3>Pino il bello<br><strong class="ornage_color">review</strong></h3>
                                            <p>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- end clients -->




<!-- contact -->


    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="#" class="logo_footer"> <h1 style="color: #fff;">SicilyPost</h1></a>
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

          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="js/func.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



<script>
 document.getElementById("sign").disabled = false;
</script>
<!-- google map js -->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>-->
<!-- end google map js -->



</body>

</html>
