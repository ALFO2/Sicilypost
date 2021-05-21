<?php
$domainDB='localhost';
$user='root';
$nome_db='sicilypost';
$pass_db='';


function DB()
{
  $conn=new PDO("mysql:host=".$GLOBALS['domainDB']."; dbname=".$GLOBALS['nome_db'],$GLOBALS['user'],$GLOBALS['pass_db']);

   $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  return $conn;
}


//funzione SQL ritorna una var del db o piu
function SQL($query,$table)
{
	$DB=DB()->prepare($query);

    $DB->execute([]);

    $varibles=array();

    While($col=$DB->fetch(PDO::FETCH_ASSOC))
    {
     array_push($varibles,$col[$table]);
    }

    return $varibles;
}


// funzione per sql con return 0 o 1
function BOOL_SQL($query)
{
   try {
   $DB=DB()->prepare($query);

    $DB->execute([]);

    $varibles=array();

    While($col=$DB->fetch())
    {
      return 1;
    }
  } catch (PDOException $e) {

       return 0;
  }
}


?>
