<?php

 $server = "ftpupload.net";
 $username = "epiz_30903663";
 $password = "T7AvA9YmOHlk";
 $dbname = "epiz_30903663_aabtnews";

 $conn = mysqli_connect($server, $username, $password, $dbname);

 if($conn){
     die("connection Failed:".mysqli_connect_error());
 }
 ?>
