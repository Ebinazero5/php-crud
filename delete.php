<?php

$connection = mysqli_connect("localhost:4306","root","","dbcrud");


$delete = $_GET['del'];


$sql = "delete from student where id = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>