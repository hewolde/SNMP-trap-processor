<?php
require "config.php";

$result = $db->query('SELECT ip,port,community FROM mycredential');
  while ($row = $result->fetchArray())
   {
          echo nl2br("\n". $row['community'] . "@");
          echo $row['ip'].":"; 
          echo $row['port']; 
          echo nl2br("\n");
      $ip =$row['ip'];
      $port = $row['port'];
      $community = $row['community'];
   }


?>
