<?php

 $server = "ftpupload.net";
 $username = "epiz_29628881";
 $password = "GEL8IyPFw4";
 $dbname = "epiz_29628881_aabtnews";

 $conn = mysqli_connect($server, $username, $password, $dbname);

 if($conn){
     die("connection Failed:".mysqli_connect_error());
 }
 ?>
