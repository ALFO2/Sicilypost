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

function BOOL_SQL($query)
{  
	try{
	$DB=DB()->prepare($query);
     
    $DB->execute([]);
    return 1;
    }catch (PDOException $e)
    {
     return 0; 
    }
}


?>