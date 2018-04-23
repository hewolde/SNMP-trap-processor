<?php

require "config.php";

  if(!empty($_GET["ip"]) && !empty($_GET["port"]) && !empty($_GET["community"]))
     {
 
	  $ip = $_GET["ip"];
          $port = $_GET["port"];
          $community  = $_GET["community"];
          //echo nl2br("$ip,$port,$community");
          echo ("OK!");
   
       /*insert*/
$db->exec("INSERT INTO mycredential (ip,port,community) VALUES ('$ip', $port, '$community')");
   }
    
  else
      {
          echo ("FALSE");
          #echo nl2br("NO TRAP DESTINATION IS SET!\n");
      } 

 
?>
