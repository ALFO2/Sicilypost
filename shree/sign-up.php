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

</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/imabella.jpeg" alt="#" style="width: 100%;" /> </div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>

    <!-- Modal -->

    <div class="modal fade row" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  col-xl-2" id="sii" role="document">
        <div class="modal-content " style="height:700px;">
          <div class=" ">
            <div class="column " id="main">
              <h1 id="textm">Sign Up </h1>
              <h3 id="textm">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
              <form method="post" >
                <div class="form-group">
                  <label for="exampleInputName">Name</label>


                  <input type="text" id="nome" oninput="myF()" name="nome" class="form-control"  placeholder="Name">


                  <p style="color: red;" id="enome"></p>
                </div>
                <div class="form-group">

                <label for="exampleInputEmail1">E-mail </label>



                  <input type="email" id="ema" oninput="myF()" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="E-mail">


                  <p style="color: red;" id="eemail"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" id="pass" oninput="myF()" name="password" class="form-control"  placeholder="Password">
                  <p style="color: red;" id="epass"></p>
                </div>
                <button type="submit" id="sign"  name="signin" class="btn btn-primary">Sign in</button>
                <a href="sign-up.php">Sign up</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
    

    document.getElementById("sign").disabled = true;


    
    function myF() {

      var x =validazione(document.getElementById("nome"),'nome');
      var y =validazione(document.getElementById("ema"),'email');
      var g =validazione(document.getElementById("pass"),'password');
      
      var l=0;
      var o=0;
      var p=0;
    if (x==1) {
    document.getElementById("enome").innerHTML = null  ;
    l=1
    }else {
    document.getElementById("enome").innerHTML = "nome non valido"  ;
    document.getElementById("sign").disabled = true;
    l=0;
    }
    if (y==1) {
      document.getElementById("eemail").innerHTML = null  ;
    o=1;
    }else {
    document.getElementById("eemail").innerHTML = "email non valida"  ;
    document.getElementById("sign").disabled = true;
    o=0;
    }
    if (g==1) {
      document.getElementById("epass").innerHTML = null ;
      p=1;
    }else {
    document.getElementById("epass").innerHTML = "password non valido"  ;
    document.getElementById("sign").disabled = true;
     p=0;
    }
     f=p+o+l;
     if (f==3) {
         document.getElementById("sign").disabled = false;
     }
    }
    </script>

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
              <script type="text/javascript"></script>
              <h3 id="textm">Welcome to SicilyPost ; ) we're here for you</h3>
              <?php

              if (!isset($_POST['nex'])) {
                echo "<script > </script>";
              ?>
              <form method="post">
                  <hr>
                <div class="form-group">
                  <label for="exampleInputName">Name</label>

                  <input type="text" id="perosna" oninput="myFunction()" class="form-control" placeholder="Name">
                  <p style="color: red;" id="nom"></p>

                </div>
                <div class="form-group">
                  <label for="exampleInputName">Lastname</label>

                  <input type="text" id="lasname" oninput="myFunction()" class="form-control" placeholder="Lastname">
                  <p style="color: red;" id="laname"></p>

                </div>
                <div class="form-group">
                  <label for="exampleInputName">Fiscal Code</label>

                  <input type="text" id="cfi" oninput="myFunction()" class="form-control"  placeholder="Fiscal Code">
                  <p style="color: red;" id="fc"></p>

                </div>
                <div class="form-group ">
                  <label for="exampleInputName">Age</label>

                  <input style="width:20%;"  oninput="age()" type="number" id="numero" value="0" min="0" max="95" class="form-control num"  placeholder="0">
                  <p style="color: red;" id="ag"></p>

                </div>
                <script type="text/javascript">
                  function age()
                  {
                     if (document.getElementById("numero").value>95) {
                      document.getElementById("numero").value=0;
                     }
                     if (document.getElementById("numero").value.length>3) {
                          document.getElementById("numero").value=0;
                     }
                  }
                  

                </script>
                <div class="form-group">
                  <label for="exampleInputName">sex</label><br>
              <input type="radio" name="radiogroup1" value="male"id="rd1">
              <label for="rd1" >Male</label>
               <input type="radio" name="radiogroup1" value="female" id="rd2">
                <label for="rd2">Female</label>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">E-mail </label>

                  <input type="email" id="ema" oninput="myFunction()" class="form-control" aria-describedby="emailHelp" placeholder="E-mail">
                  <p style="color: red;" id="em"></p>

                </div>

                <div class="form-group">

                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" id="pass" oninput="myFunction()" class="form-control"   placeholder="Password">
                  <p style="color: red;"  id="pas"></p>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirmation Password</label>

                  <input type="password" id="pass1" oninput="myFunction()" class="form-control"    placeholder="Confirmation Password">
                  <p style="color: red;" id="pas1"></p>

                </div>
                <div class="">
                <div class="round">

                <input type="checkbox" id="checkbox" onclick="sewpass()"/> &nbsp; Show Password
                <label for="checkbox"></label>
                </div>
                </div>

                <button type="submit" id="next" name="nex" class="btn btn-primary">Next </button>
              </form>
                 <?php }

                 else {
                   // code...
                   echo "<script type='text/javascript'>document.getElementById('sup').disabled = true;</script>";
                 ?>

                    <hr>
              <form class="" method="post">
                <div class="form-group">
                  <label for="exampleInputName">city</label>
                  <input type="text" oninput="myFunc()" class="form-control" value="sdhsdsd" id="citt" placeholder="city">
                  <p id="cittn"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">address</label>
                  <input type="text" oninput="myFunc()" class="form-control" id="indir" placeholder="address">
                  <p id="indirn"></p>
                </div>
                <div class="form-group ">
                  <label for="exampleInputName">House number</label>
                  <input style="width:20%;" oninput="myFunc()" type="number"  value="0" min="0" class="form-control num" id="nume" placeholder="0">
                  <p id="numen"></p>
                </div>
                <div class="form-group">
                  <div class="form-group ">
                    <label for="exampleInputName">CAP</label>
                    <input style="width:20%;" oninput="myFunc()" type="number"  value="0" min="0" class="form-control num" id="ca" placeholder="2..">
                    <p id="can"></p>
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Region</label>
                  <input type="text" oninput="myFunc()" class="form-control" id="rego" aria-describedby="emailHelp" placeholder="Region">
                  <p id="regon"></p>
                </div>

                <button type="submit" id="sup" class="btn btn-primary">Sign Up</button>
              <?php } ?>
                  <a href="sign-in.phph" data-toggle="modal" data-target="#exampleModal">Sign Up </a>
              </form>
            </div>


         </div>

              <script>
                if (document.getElementById('next')){
                 document.getElementById('next').disabled = true;
                }
                 if (document.getElementById('sup')){
                 document.getElementById('sup').disabled = true;
                }
                
    function validazione(inputtxt,tipo)
    {
     switch (tipo) {
       
       case "password":
       var passw=  /^[A-Za-z]\w{7,20}$/;
             if(inputtxt.value == "") {
           return 0;
        }
         
 //minimum password length validation
        if(inputtxt.value.length < 8) {
           return 0;
        }
        
        if(inputtxt.value.match(passw))
       {
       return 1;
       }
       else
       {
       return 0;
       }
         break;

       case "nome":
       if(inputtxt.value == null) {
       return 0;
       }

       //minimum password length validation
       if(inputtxt.value.length < 2) {
       return 0;
       }
       if(inputtxt.value.match(/[1-9]/g))
      {
      return 0;
      }
      else
      {
      return 1;
      }
           break;
       case "email":
       if(inputtxt.value == "") {
       return 0;
       }
       else {
         return 1;
       }

       //minimum password length validation

         break;

         case "cod_fiscale":
          if(inputtxt.value.length < 16) {
       return 0;
       }else
       {
        return 1;
       }
         break;
      case "numero":
        if(inputtxt.value.match(/[1-9]/g))
      {
      return 1;
      }
      else
      {
      return 0;
      }
        break;
        return 0;
       default:

     }
    }
    function myFunc()
    {
       var citta=validazione(document.getElementById('citt'),'nome');
      var indirizzo=validazione(document.getElementById("indir"),'nome');
      var numberciv=validazione(document.getElementById("nume"),'numero');
      var CAP=validazione(document.getElementById("ca"),'numero');
      var Region=validazione(document.getElementById("rego"),'nome');
      var ci1=0;
      var ind1=0;
      var numb=0;
      var ca1=0;
      var reg1=0;

    if (Region==1) {
        document.getElementById("regon").innerHTML = "password uguale"  ;
    ci1=1;
    }else {
    document.getElementById("regon").innerHTML = "password non uguale "  ;
    document.getElementById("sup").disabled = true;
    ci1=0;
      }    
    if(CAP==1) {
        document.getElementById("can").innerHTML = "password uguale"  ;
    ca1=1;
    }else {
    document.getElementById("can").innerHTML = "password non uguale "  ;
    document.getElementById("sup").disabled = true;
    ca1=0;
      }
    if(numberciv==1) {
      document.getElementById("numen").innerHTML = "password uguale"  ;
    numb=1;
    }else {
    document.getElementById("numen").innerHTML = "password non uguale "  ;
    document.getElementById("sup").disabled = true;
    numb=0;
    }
    if(indirizzo==1) {
    document.getElementById("indirn").innerHTML = "password uguale"  ;
    ind1=1;
    }else {
    document.getElementById("indirn").innerHTML = "password non uguale "  ;
    document.getElementById("sup").disabled = true;
    ind1=0;
      }
    if(citta==1) {
        document.getElementById("cittn").innerHTML = "password uguale"  ;
    reg1=1;
    }else {
    document.getElementById("cittn").innerHTML = "password non uguale "  ;
    document.getElementById("sup").disabled = true;
    reg1=0;
      }
      f=ci1+ind1+numb+ca1+reg1;
      if (f==5) {
         document.getElementById("sup").disabled = false;
     }
    }
     

    function myFunction() {

      var x =validazione(document.getElementById("perosna"),'nome');
      var y =validazione(document.getElementById("ema"),'email');
      var g =validazione(document.getElementById("pass"),'password');
      var Lastname =validazione(document.getElementById("lasname"),'nome');
      var cf=validazione(document.getElementById("cfi"),'cod_fiscale');
      var passcon=0;
    
      if (document.getElementById("pass").value==document.getElementById("pass1").value) {
       passcon=1;
      }else
      {
        passcon=0;
      }
      
      var l=0;
      var o=0;
      var p=0;
      var l1=0;
      var o1=0;
      var p1=0;    

      if(passcon==1) {
         document.getElementById("pas1").innerHTML = "password uguale"  ;
    p1=1
    }else {
    document.getElementById("pas1").innerHTML = "password non uguale "  ;
    document.getElementById("next").disabled = true;
    p1=0;

      }
      if (cf==1) {
          document.getElementById("fc").innerHTML = null  ;
    o1=1
    }else {
    document.getElementById("fc").innerHTML = "cod_fiscale non valido"  ;
    document.getElementById("next").disabled = true;
    o1=0;
      }
    if (Lastname==1) {
     document.getElementById("laname").innerHTML = null  ;
    l1=1
    }else {
    document.getElementById("laname").innerHTML = "cognome non valido"  ;
    document.getElementById("next").disabled = true;
    l1=0;
    }
    if (x==1) {
    document.getElementById("nom").innerHTML = null  ;
    l=1
    }else {
    document.getElementById("nom").innerHTML = "nome non valido"  ;
    document.getElementById("next").disabled = true;
    l=0;
    }
    if (y==1) {
      document.getElementById("em").innerHTML = null  ;
    o=1;
    }else {
    document.getElementById("em").innerHTML = "email non valida"  ;
    document.getElementById("next").disabled = true;
    o=0;
    }
    if (g==1) {
      document.getElementById("pas").innerHTML = null ;
      p=1;
    }else {
    document.getElementById("pas").innerHTML = "password non valido"  ;
    document.getElementById("next").disabled = true;
     p=0;
    }
     f=p+o+l+l1+p1+o1;
     if (f==5) {
         document.getElementById("next").disabled = false;
     }
    }

    
    </script>

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
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>



          function sewpass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }


          function validate(evt) {
var theEvent = evt || window.event;

// Handle paste
if (theEvent.type === 'paste') {
 key = event.clipboardData.getData('text/plain');
} else {
// Handle key press
 var key = theEvent.keyCode || theEvent.which;
 key = String.fromCharCode(key);
}
var regex = /[0-9]|\./;
if( !regex.test(key) ) {
theEvent.returnValue = false;
if(theEvent.preventDefault) theEvent.preventDefault();
}
}

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




</body>

</html>
