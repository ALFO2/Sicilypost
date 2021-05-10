<link rel="stylesheet" href="SITI_WEB/GENERALE.css">
<?php
 //session_start();
//require 'Bariables/VGeneral.php';
//require 'Function/sql.php';
$f = isset($_REQUEST['f'])? (string) $_REQUEST['f'] : "Home";
switch( $f ){
	case 'Home': HOME();break;
	case 'Sign_in': SIGN_IN(); break;
	default: Home();
}



function HOME()
{
   require 'SITI_WEB/HOME.php';
}
function SIGN_IN()
{
   require 'SITI_WEB/SIGN_IN.php';
}

  ?>
