<?php
session_start();

$logsURL = null;
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST']."/phfiles/";
$logsURL = $url;

$system_name = "PHFile.com";

if(isset($_GET["reqUrl"]))
{    
  $data = $_GET["reqUrl"];
    // if(isset($_SESSION['identity']) == null)
    // {
        if(strtoupper($data) == "LOGIN" || strtoupper($data) == "REGISTER" 
        || strtoupper($data) == "FORGOTPASSWORD" || strtoupper($data) == "RESETPASSWORD")
        {
          //echo 'LOGIN';
          include "auth.view.php";
        }
        elseif(strtoupper($data) == "FILE")
        {          
          include "file_.view.php";
        }
        else
        {
          echo 'zadasdas --- ';
          echo $data;
        }      
    // }
    // else
    // {
    //   echo 'sdcfssdfsdfsdsd';
    // }
}
else{
    if(isset($_SESSION['identity']) == null)
    {
      $data = "Login";
      include "auth.view.php";
    }
    else
    {
      echo 'Home';
    }
}
