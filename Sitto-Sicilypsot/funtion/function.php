<?php
function codiceFiscale($cf)
{
   if($cf=='')
   return false;

   if(strlen($cf)!= 16)
   return false;

   $cf=strtoupper($cf);
   if(!preg_match("/[A-Z0-9]+$/", $cf))
   return false;
   $s = 0;
   for($i=1; $i<=13; $i+=2){
   $c=$cf[$i];
   if('0'<=$c and $c<='9')
   $s+=ord($c)-ord('0');
   else
   $s+=ord($c)-ord('A');
   }

   for($i=0; $i<=14; $i+=2){
   $c=$cf[$i];
   switch($c){
       case '0':  $s += 1;  break;
   case '1':  $s += 0;  break;
       case '2':  $s += 5;  break;
   case '3':  $s += 7;  break;
   case '4':  $s += 9;  break;
   case '5':  $s += 13;  break;
   case '6':  $s += 15;  break;
   case '7':  $s += 17;  break;
   case '8':  $s += 19;  break;
   case '9':  $s += 21;  break;
   case 'A':  $s += 1;  break;
   case 'B':  $s += 0;  break;
   case 'C':  $s += 5;  break;
   case 'D':  $s += 7;  break;
   case 'E':  $s += 9;  break;
   case 'F':  $s += 13;  break;
   case 'G':  $s += 15;  break;
   case 'H':  $s += 17;  break;
   case 'I':  $s += 19;  break;
   case 'J':  $s += 21;  break;
   case 'K':  $s += 2;  break;
   case 'L':  $s += 4;  break;
   case 'M':  $s += 18;  break;
   case 'N':  $s += 20;  break;
   case 'O':  $s += 11;  break;
   case 'P':  $s += 3;  break;
       case 'Q':  $s += 6;  break;
   case 'R':  $s += 8;  break;
   case 'S':  $s += 12;  break;
   case 'T':  $s += 14;  break;
   case 'U':  $s += 16;  break;
   case 'V':  $s += 10;  break;
   case 'W':  $s += 22;  break;
   case 'X':  $s += 25;  break;
   case 'Y':  $s += 24;  break;
   case 'Z':  $s += 23;  break;
   }
   }

   if( chr($s%26+ord('A'))!=$cf[15] )
   return false;

   return true;
}

function validation($data,$type)
{
 switch ($type) {
   case 'nome':
     // code...
		 $data= str_replace(' ','',$data);
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     if( $data=="" || preg_match('@[^\w]@',  $data) || preg_match('@[0-9]@',  $data) || strlen( $data) < 2)
     {
       return 0;
     }
        return 1;
     break;
     case 'numero':
     if( $data=="" || preg_match('@[^\w]@',  $data))
     {
       return 0;
     }
        return 1;
       break;
   case 'text':
       // code...
  		 $data= str_replace(' ', '',$data);
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       if( $data=="" || preg_match('@[^\w]@',  $data) || preg_match('@[0-9]@',  $data) || strlen( $data) < 1)
       {
         return 0;
       }
          return 1;
       break;
   case 'password':
       // code...
       if($data=="" || (!preg_match('@[0-9]@',$data)) || (!preg_match('@[^\w]@', $data)) || (strlen($data) < 8))
       {
        return 0;
       }
			 else {
			 	// code...
				return 1;
			 }

     break;
   case 'cod_fiscale':
         // code...
           if (codiceFiscale($data))
             return 1;

           return 0;
     break;
   case 'email':
           // code...
           if($data=="" )
           {
             return 0;
           }
           return 1;
       break;
   case 'cellnumber':
               // code...
      if(  $data=="" || strlen( $data) != 10 || preg_match('@[^\w]@',  $data))
      {
         return 0;
      }
          return 1;
       break;
   case 'residency':
         // code...
				  $data= str_replace(' ', '',$data);
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         if( $data=="" || preg_match('@[^\w]@',$data) )
         {
          return 0;
         }
          return 1;
     break;
   case 'plate':
         // code...
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         if( $data=="" || strlen($data) !== 7)
         {
           return 0;
         }
          return 1;
    break;

   default:
     // code...
     break;
 }
}


function login($nome,$email,$password)
{
  if (validation($nome,'nome') && validation($email,'email') && validation($password,'password')) {
     $sql_nome="Select nome from utente where nome='".$nome."';'";
     $sql_email="Select email from utente where email='".$email."';'";
     $sql_password="Select password from utente where  email='".$email."' and nome='".$nome."';'";
     $hapass=SQL($sql_password,'password');
    if (isset($hapass[0])) {
      $hapass=$hapass[0];
    }

    if (BOOL_SQl($sql_nome) && BOOL_SQl($sql_email) && password_verify($password,$hapass) )
     {
       return 1;
     }
  }

   return 0;
}


function registra($citta,$indirizzo,$ncasa,$cap,$regione,$nome,$cognome,$codice_fiscale,$eta,$email,$password,$con_password)
{
    $v1[1]=validation($citta,'text');
    $v1[2]=validation($indirizzo,'text');
    $v1[3]=validation($ncasa,'numero');
    $v1[4]=validation($cap,'numero');
    $v1[5]=validation($regione,'nome');
    $v1[6]=validation($nome,'nome');
    $v1[7]=validation($cognome,'nome');
    $v1[8]=validation($codice_fiscale,'cod_fiscale');
    $v1[9]=validation($eta,'numero');
    $v1[10]=validation($email,'email');
    $v1[11]=validation($password,'password');
    $citta=trim($citta);
    $indirizzo=trim($indirizzo);
    $ncasa=trim($ncasa);
    $cap=trim($cap);
    $regione=trim($regione);
    $nome=trim($nome);
    $cognome=trim($cognome);
    $codice_fiscale=trim($codice_fiscale);
    $eta=trim($eta);
    $email=trim($email);
    $password=trim($password);
    if ($password==$con_password) {
     if ($password==null) {
        $v1[12]=0;
     }
     else
     {
      $v1[12]=1;
     }
    }
    else
    {
    $v1[12]=0;
    }

     $regione=str_replace(' ','',$regione);
    //echo "SELECT id_regione from regioni where Regione='$regione'";
    $query="SELECT id_regione from regioni where Regione='$regione'";
    if (BOOL_SQL($query) && $v1[5]) {
      $v1[5]=1;
      $regione=SQL($query,'id_regione');
      $regione=$regione[0];
    }
    else
    {
      $v1[5]=0;
    }

    if ($v1[1] && $v1[2] && $v1[3] &&  $v1[4] && $v1[5] && $v1[6] && $v1[7] && $v1[8] &&  $v1[9] && $v1[10] && $v1[11] && $v1[12] ) {
      $query="SELECT id_utente from utente where email='$email' and nome='$nome'";
      //echo $query;
       if (!BOOL_SQL($query)) {
      $hash= password_hash($password, PASSWORD_BCRYPT);
      $query="INSERT INTO utente (Nome, Cognome, Età, COD_regione, Via, Città,N_civ,Cap,Codice_fiscale,Email,Password) VALUES ( '$nome', '$cognome','$eta','$regione','$indirizzo',
          '$citta','$ncasa','$cap', '$codice_fiscale','$email','$hash')";
      BOOL_SQL($query);
      echo '
      <div class="alert alert-success" role="alert">
         <h4 class="alert-heading">Buon lavoro!</h4>';

          for ($i=1; $i <=12 ; $i++) {
            if ($v1[$i]) {
              switch ($i) {
                  case 1:
                    echo '<p>Nome Città .</p>';
                       break;
                  case 2:
                     echo '<p>Nome Via .</p>';
                       break;
                  case 3:
                     echo '<p>Numero Civico .</p>';
                       break;
                  case 4:
                     echo '<p>Cap .</p>';
                        break;
                  case 5:
                     echo '<p>Nome regione .</p>';
                        break;
                  case 6:
                     echo '<p>Nome .</p>';
                        break;
                  case 7:
                     echo '<p>Cognome .</p>';
                        break;
                  case 8:
                     echo '<p>Codice fiscale .</p>';
                        break;
                  case 9:
                     echo '<p>Età .</p>';
                        break;
                  case 10:
                     echo '<p>email .</p>';
                        break;
                  case 11:
                     echo '<p>Password .</p>';
                        break;
                  case 12:
                      echo '<p>Conferma password .</p>';
                    break;
                default:
                  // code...
                  break;
              }
            }

          }

         echo '<hr>
       </div>
      ';
      return 1;
       }
       echo '
       <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">ERRORE!</h4>
          <p>EMAIL E NOME ESISTENTE NEL DB .</p>
          <hr>
          <p class="mb-0">SEI GIA UN UTENTE?.</p>
        </div>
       ';
       return 0;
    }
    echo '
    <div class="alert alert-danger" role="alert">
       <h4 class="alert-heading">ERRORE!</h4>';

        for ($i=1; $i <=12 ; $i++) {
          if (!$v1[$i]) {
            switch ($i) {
                case 1:
                  echo '<p>Nome Città errata.</p>';
                     break;
                case 2:
                   echo '<p>Nome Via errato.</p>';
                     break;
                case 3:
                   echo '<p>Numero Civico errato.</p>';
                     break;
                case 4:
                   echo '<p>Cap errato.</p>';
                      break;
                case 5:
                   echo '<p>Nome regione errato.ES lombardia </p>';
                      break;
                case 6:
                   echo '<p>Nome errata.</p>';
                      break;
                case 7:
                   echo '<p>Cognome errata.</p>';
                      break;
                case 8:
                   echo '<p>Codice fiscale errata.</p>';
                      break;
                case 9:
                   echo '<p>Età errata.</p>';
                      break;
                case 10:
                   echo '<p>email errata.</p>';
                      break;
                case 11:
                   echo '<p>Password errata.
                            Deve essere maggionre di 8 cifre e contenere numeri e carratteri speciali </p>';
                      break;
                      case 12:
                          echo '<p>Conferma password errore .</p>';
                        break;
              default:
                // code...
                break;
            }
          }

        }

       echo '<hr>
     </div>
    ';

    echo '
    <div class="alert alert-success" role="alert">
       <h4 class="alert-heading">Buon lavoro!</h4>';

        for ($i=1; $i <=12 ; $i++) {
          if ($v1[$i]) {
            switch ($i) {
                case 1:
                  echo '<p>Nome Città .</p>';
                     break;
                case 2:
                   echo '<p>Nome Via .</p>';
                     break;
                case 3:
                   echo '<p>Numero Civico .</p>';
                     break;
                case 4:
                   echo '<p>Cap .</p>';
                      break;
                case 5:
                   echo '<p>Nome regione .</p>';
                      break;
                case 6:
                   echo '<p>Nome .</p>';
                      break;
                case 7:
                   echo '<p>Cognome .</p>';
                      break;
                case 8:
                   echo '<p>Codice fiscale .</p>';
                      break;
                case 9:
                   echo '<p>Età .</p>';
                      break;
                case 10:
                   echo '<p>email .</p>';
                      break;
                case 11:
                   echo '<p>Password .</p>';
                      break;
                      case 12:
                          echo '<p>Conferma password .</p>';
                        break;
              default:
                // code...
                break;
            }
          }

        }

       echo '<hr>
     </div>
    ';
    return 0;
}
 ?>
