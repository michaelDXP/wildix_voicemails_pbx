
<?php include ("connect.php"); ?>
<?php

$sql = "SELECT c_to, to_name, COUNT(lastapp='VoiceMail') AS vmail from cdr where disposition='NO ANSWER' AND dest_type!=4 AND c_to!='default' AND date(answer) = CURDATE() GROUP BY cdr.c_to";

$result = $conn->query($sql);

         
if ($result->num_rows > 0)
{

   while($row = $result->fetch_assoc())
   {
    
     $user = $row["c_to"];
     $mailcount = $row["vmail"];
    
     foreach ($row as $value) 
     {
        if( $value == $user && $mailcount > '0' )
        {
           echo '<div class="autowide">'.'<div class="module">'.'<table class="container">' . "<tr><th><center>User&nbsp;". $row["c_to"]. "</th></tr><td><center>" . $row["vmail"] . "</center></td></tr></table>".'</div></div>';
        }
     }
   }
} else { 

     echo "<tr><td>" . '0' . "</td><td>" . '0' . "</td></tr></div></div>";
}

     $conn->close();
?>
