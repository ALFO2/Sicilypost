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

  <!-- end loader -->
  <!-- header -->
  <header>

    <!-- Modal -->

    <?php
           if ($_SERVER["REQUEST_METHOD"]=="POST") {
               if (isset($_POST['signin'])) {
                $nome=$_POST['nome'];
                $email=$_POST['email'];
                $password=$_POST['password'];

                 if (login($nome,$email,$password)) {
                   $cf=SQL("Select Codice_fiscale from utente where nome='".$nome."' and email='".$email."'",'Codice_fiscale');
                   $_SESSION['utente']=$cf[0];
                   echo "<script>location.assign('Profilo.php');</script>";
                 }
                 else
                 {
                   echo '
                   <div class="alert alert-warning alert-dismissible fade show" style="margin:0px;" role="alert">
                     <strong>Holy guacamole!</strong> Non hai inserito i dati corretti.
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   ';
                 }
               }
              }

     ?>
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
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.php">Home</a> </li>
                     <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li>
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



       <div class="column " id="main">
              <h1 id="textm">Sign Up </h1>
              <h3 id="textm">Welcome to SicilyPost ; ) we're here for you</h3>
<?php


$citta='';
$indirizzo='';
$ncasa='';
$cap='';
$regione='';
$nome='';
$cognome='';
$codice_fiscale='';
$eta='';
$email='';
$password='';
$conpassword='';
if (isset($_POST['sup'])) {
 $citta=$_POST['1citta'];
 $indirizzo=$_POST['1indirizzo'];
 $ncasa=$_POST['1ncasa'];
 $cap=$_POST['1cap'];
 $regione=$_POST['1regione'];

 $nome=$_POST['1nome'];
 $cognome=$_POST['1cognome'];
 $codice_fiscale=$_POST['1cf'];
 $eta=$_POST['1eta'];
 $email=$_POST['1email'];
 $password=$_POST['1password'];
}
?>
              <form method="post">
                  <hr>
                <div class="form-group">
                  <label for="exampleInputName">Name</label>

                  <input type="text" id="perosna" name="1nome" value="<?php echo $nome; ?>" oninput="va_login('perosna','nom','nome')" class="form-control" placeholder="Name">
                  <p style="color: red;" id="nom"></p>

                </div>
                <div class="form-group">
                  <label for="exampleInputName">Lastname</label>

                  <input type="text" id="lasname" name="1cognome" value="<?php echo $cognome; ?>" oninput="va_login('lasname','laname','nome')" class="form-control" placeholder="Lastname">
                  <p style="color: red;" id="laname"></p>

                </div>
                <div class="form-group">
                  <label for="exampleInputName">Fiscal Code</label>

                  <input type="text" id="cfi" name="1cf" oninput="va_login('cfi','fc','cf')" value="<?php echo $codice_fiscale; ?>" class="form-control"  placeholder="Fiscal Code">
                  <p style="color: red;" id="fc"></p>

                </div>
                <div class="form-group ">
                  <label for="exampleInputName">Age</label>

                  <input style="width:20%;"  name="1eta" oninput="solonumeri('numero',3)" value="<?php echo $eta ?>" type="number" id="numero"  min="0" max="95" class="form-control num"  placeholder="0">
                  <p style="color: red;" id="ag"></p>

                </div>


                <div class="form-group">
                  <label for="">E-mail </label>
                  <input type="email" id="email2" name="1email" oninput="va_login('email2','emai','email')" value="<?php echo $email ?>" class="form-control"  placeholder="E-mail">
                  <p style="color: red;" id="emai"></p>

                </div>

                <div class="form-group">

                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" id="Passwo" name="1password"  oninput="va_login('Passwo','passw','password')"  class="form-control"   placeholder="Password">
                  <p style="color: red;"  id="passw"></p>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirmation Password</label>

                  <input type="password" id="pass1" oninput="uguale('pass1','Passwo','pas1')" name="con_pass" class="form-control"    placeholder="Confirmation Password">
                  <p style="color: Green;" id="pas1"></p>

                </div>

                <div class="round">
                <input type="checkbox" id="checkbox" onclick="see('checkbox','Passwo')"/> &nbsp; Show Password
                <label for="checkbox"></label>
                </div>
                    <hr>

                <div class="form-group">
                  <label for="exampleInputName">city</label>
                  <input type="text" name="1citta" oninput="va_login('citt','cittn','nome')" value="<?php echo $citta ?>" class="form-control"  id="citt" placeholder="city">
                  <p style="color: red;" id="cittn"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">address</label>
                  <input type="text" name="1indirizzo" oninput="va_login('indir','indirn','nome')" value="<?php echo $indirizzo ?>" class="form-control" id="indir" placeholder="address">
                  <p style="color: red;" id="indirn"></p>
                </div>
                <div class="form-group ">
                  <label for="exampleInputName">House number</label>
                  <input style="width:20%;" name="1ncasa" oninput="solonumeri('nume',8)" type="number"  value="<?php echo $ncasa ?>"  min="0" class="form-control num" id="nume" placeholder="0">
                  <p style="color: red;" id="numen"></p>
                </div>
                <div class="form-group">
                  <div class="form-group ">
                    <label for="exampleInputName">CAP</label>
                    <input style="width:20%;" name="1cap" oninput="solonumeri('ca',7)" type="number" value="<?php echo $cap ?>" min="0" class="form-control num" id="ca" placeholder="2..">
                    <p style="color: red;" id="can"></p>
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Region</label>
                  <input type="text" name="1regione" oninput="va_login('rego','regon','nome')" class="form-control" id="rego" value="<?php echo $regione ?>" aria-describedby="emailHelp" placeholder="Region">
                  <p style="color: red;" id="regon"></p>
                </div>

                <button type="submit" id="sup" name="sup" class="btn btn-primary">Sign Up</button>

                  </div>
              </form>
              <a href="sign-in.phph" data-toggle="modal" data-target="#exampleModal">Sign in </a>
                 </div>
            <?php

            if (isset($_POST['sup'])) {
             $citta=$_POST['1citta'];
             $indirizzo=$_POST['1indirizzo'];
             $ncasa=$_POST['1ncasa'];
             $cap=$_POST['1cap'];
             $regione=$_POST['1regione'];

             $nome=$_POST['1nome'];
             $cognome=$_POST['1cognome'];
             $codice_fiscale=$_POST['1cf'];
             $eta=$_POST['1eta'];
             $email=$_POST['1email'];
             $password=$_POST['1password'];
             if (isset($_POST['con_pass'])) {
              $conpassword=$_POST['con_pass'];
             }
             else {
               $conpassword=0;
             }
            if(registra($citta,$indirizzo,$ncasa,$cap,$regione,$nome,$cognome,$codice_fiscale,$eta,$email,$password,$conpassword))
            {
              echo 'va bene';
                echo "<script>location.assign('index.php');</script>";
            }
            else{

              echo "non caricato
              ";


            }
              }

            ?>







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
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="js/func.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script>

</script>


</script>
<!-- google map js -->




</body>

</html>
