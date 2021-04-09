<?php
session_start();

$logsURL = null;
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST']."";
$logsURL = $url;

//echo $logsURL;


if(isset($_GET["data"]))
{    
  $data = isset($_GET["data"]);

    if(isset($_SESSION['identity']) == null)
    {
        if(strtoupper($data) == "LOGIN")
        {
          echo 'LOGIN';
        }
        if(strtoupper($data) == "REGISTER")
        {
          echo 'REGISTER';
        }
        if(strtoupper($data) == "FORGOTPASSWORD")
        {
          echo 'FORGOTPASSWORD';
        }
        if(strtoupper($data) == "RESETPASSWORD")
        {
          echo 'RESETPASSWORD';
        }
        if(strtoupper($data) == "AUTHPASS")
        {
          echo 'AUTHPASS';
        }
      
    }
    else
    {
      echo '';
    }
}
else{
  if(isset($_SESSION['identity']) == null)
  {
    echo 'login';
  }
  else
  {
    echo 'Home';
  }
}
