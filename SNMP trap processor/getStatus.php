<?php
 
    require ("config.php");
    $result1 = $db->query("SELECT COUNT(*) as count FROM trapmessage");
     //$numRows = $result->numRows();
    $row1 = $result1->fetchArray();
    $numRows = $row1['count'];
 if ($numRows > 0)
   {
      $result2 = $db->query("SELECT FQDN,devstatus, reptime,oldstatus,oldreptime FROM trapmessage");// or die ('FALSE');

      while ($row = $result2->fetchArray())
        {
            
           echo $row['FQDN']. " "; 
           echo "| ". $row['devstatus'];    
           echo " | ". $row['reptime'];
           echo " | ". $row['oldstatus']; 
           echo " | ". $row['oldreptime'];
           echo nl2br("\n");
        }
   }


 else{
        echo "FALSE";
     }  


?>
