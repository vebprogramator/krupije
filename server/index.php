<?php
include "function.php";


$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


// ruta je /server/routa - method POST
if($url == "/server/routa" && $method == "POST"){ 
  // compose funkcija formatira poruku
  $message = compose($_POST);
  if($message){
    //echo "$message";   
    //mail funkcija nije testirana
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail("VebProgramator@gmail.com","Test",$message, $headers, "-fwebamster@{$_SERVER['SERVER_NAME']}");
    return TRUE;
  }else{
    echo "Wrong arguments";
    return FALSE;
  }
}else{
  echo "This Route does not exist";
  return FALSE;
}
?>
