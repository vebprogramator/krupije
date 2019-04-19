<?php

function compose($array){
  $message = '';
  
  if(isset($array['name']) && isset($array['email']) && isset($array['message'])){
    $name   = $array['name'];
    $email  = $array['email'];
    $text   = $array['message'];
    
    $message = '<html><body>';
    $message .= '<table rules="all" style="border: 1px solid black;" cellpadding="10">';
    $message .= "<tr><td style='background: #eee;'><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td style='background: #eee;'><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td style='background: #eee;'><strong>Text:</strong> </td><td>" . $text . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    
    return $message;
    
  }else{
    return FALSE;
  }
  
}

?>