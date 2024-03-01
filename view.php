<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {

 ?>
 

<?php 


    require_once("connection.php");
    $query = " select * from registration ";
    $result = mysqli_query($con,$query);

?>
<!---<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> FORM ID </td>
                                <td> FORM Name </td>
                                <td> FORM Email </td>
                                <td> FORM Age </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['id'];
                                        $uname = $row['uname'];
                                        $name = $row['name'];
                                        $pass = $row['passowrd'];
                            ?>
                                           
                            <?php 
                                    }  
                            ?>                   
                                                                           
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html> --->


<html lang="en">

<head>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Application</title>
</head>

<body>

  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
  <h2>Hello,<?php echo $uname ?></h2>
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="login.php" class="btn btn-dark mb-3">SIGN OUT</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = " select * from registration ORDER BY uname ASC LIMIT 2";
        $result = mysqli_query($con,$query);
        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            
        ?>

        
          <tr>
            <td><?php echo ++$counter ;?></td>
            <td><?php echo $row["uname"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><a href="edit.php?GetID=<?php echo $id ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></td>
            <td><a href="delete.php?Del=<?php echo $id ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>