<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $uname = $_POST['uname'];
        $name = $_POST['name'];
        $pass = $_POST['password'];

        $query = " update registration set uname = '".$uname."', name='".$name."',password='".$pass."' where ID='".$ID."'";
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
?>