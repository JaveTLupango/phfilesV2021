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

if(isset($_GET["reqUrl"]))
{    
  $data = $_GET["reqUrl"];

    if(isset($_SESSION['identity']) == null)
    {
        if(strtoupper($data) == "LOGIN")
        {
          echo 'LOGIN';
        }
        elseif(strtoupper($data) == "REGISTER")
        {
          echo 'REGISTER';
        }
        elseif(strtoupper($data) == "FORGOTPASSWORD")
        {
          echo 'FORGOTPASSWORD';
        }
        elseif(strtoupper($data) == "RESETPASSWORD")
        {
          echo 'RESETPASSWORD';
        }
        elseif(strtoupper($data) == "AUTHPASS")
        {
          echo 'AUTHPASS';
        }
        else
        {
          echo 'zadasdas --- ';
          echo $data;
        }      
    }
    else
    {
      echo 'sdcfssdfsdfsdsd';
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
