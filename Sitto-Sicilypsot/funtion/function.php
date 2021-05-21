<?php

function validation($type,$data)
{
 switch ($type) {
   case 'name':
     // code...
		 $data= str_replace(' ', '',$data);
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     if( $data=="" || preg_match('@[^\w]@',  $data) || preg_match('@[0-9]@',  $data) || strlen( $data) < 2)
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
             if($data=='')
          return 1;

             if(strlen($data)!= 16)
          return 1;
             $$data=strtoupper($data);
             if(!preg_match("/[A-Z0-9]+$/", $data))
          return 1;
             $s = 0;
             for($i=1; $i<=13; $i+=2){
              $c=$data[$i];
              if('0'<=$c and $c<='9')
               $s+=ord($c)-ord('0');
              else
               $s+=ord($c)-ord('A');
             }

             for($i=0; $i<=14; $i+=2){
          $c=$data[$i];
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

            if( chr($s%26+ord('A'))!=$data[15] )
            {
              return false;
            }

            return true;


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
     $sql_nome="Select nome from utente where nome=".$nome;
     $sql_email="Select email from utente where email=".$email;
     $sql_password="Select password from utente where password=".$password;

    if (BOOL_SQl($sql_nome) && BOOL_SQl($sql_email) && BOOL_SQl($sql_password)) 
     {
       return 1;
     } 
      return 0;
    
  }
 
   return 0;
}








 ?>
