<?php 

    require_once("connection.php");
if(isset($_GET['Del']))
         {
             $id = $_GET['Del'];
             $query = " delete from registration where id= '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:view.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view.php");
         }
         