<?php 

    require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " select * from registration where ID='".$ID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['id'];
        $uname = $row['uname'];
        $name = $row['name'];
        $pass = $row['password'];
    }

?>

 
	<title>EDIT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="update.php?ID=<?php echo $ID ?>" method="post">
     	<h2>EDIT</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" value="<?php echo $uname ?> "placeholder="User Name" ><br>

         <label>Name</label>
     	<input type="text" name="name" value="<?php echo $name ?> "placeholder="Name" data-sb-validations="required"><br>


     	<label>Password</label>
     	<input type="password" name="password" value="<?php echo $pass ?> "placeholder="Password" data-sb-validations="required" ><br>

     	<button  name="update">Update</button>
          
     </form>
</body>
</html>