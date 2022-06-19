<?php

session_start();

// connection to database

$db = mysqli_connect('localhost','root','','arg') or die("could not connect to database");

if(!isset($_SESSION['username']))
{
  $_SESSION['msg'] = "You must log in first to view this page.";
  header("location: user-login.php");
}

$username = $_SESSION['username'];
if(isset($_GET['logout']))
{
  session_destroy();
  unset($_SESSION['username']);
  header("location: user-login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


     <!-- Bootstrap  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/0e5fe7cb89.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Resume.css">
 
    <title>Document</title>
   
</head>
<body class="bg-light">

<?php 

if(isset($_SESSION['success'])) : ?>

<div>
  <h3>
    <?php
      echo $_SESSION['success'];
      unset($_SESSION['success']);
    
    ?>
  </h3>
</div>
<?php endif?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

  <div class="navbar-brand">
    <i class="fas fa-laptop-house navbar-item"></i>
    <a class="navbar-brand ms-3" href="dashboard-user.php">Created Resume</a>
  </div>

  <div>

  <button type="button">
     <a href="resume-form.html" class="btn btn-success">Create more</a>
     </button>
    
  <?php if(isset($_SESSION['username'])) : ?>
     

     <button type="button">
     <a href="dashboard-user.php?logout='1'" class="btn btn-success">Logout</a>
     </button>
    

    <?php endif?>

  </div>
   
    </div>

  </div>
</nav>


<!-- Side navigation -->
<div class="sidenav" class="bg-dark sidebar text-light container-fluid">
  
    <div class="text-light">
      <img src="images/user_image.png" alt="" class="profile-image">

      <?php
          if(isset($_SESSION['username']))
          {
              $query = "SELECT fullname,email FROM users where username = '$username'";
              $res = mysqli_query($db,$query);
          
              $row = mysqli_fetch_assoc($res);
              $_SESSION['fullname'] = $row['fullname'];
              $_SESSION['email'] = $row['email'];
          }
      ?>
      <h2> <?php echo $_SESSION['fullname'];?>  </h2>
      <h5><?php echo  $_SESSION['email'];?> </h5>

      <?php 

        unset($_SESSION['fullname']);
        unset($_SESSION['email']);
        
      ?>

    </div>

</div>

<!-- second page  -->
        <div class=" container bg-light">
        <button  name="" class="btn btn-warning sub" onClick="window.history.back();">Back</button>
        
        <div class="row">
          <div class=" box col-md">

          
            <?php if($_SESSION['username'])
            

              $query = "SELECT * FROM resume_data where username = '$username'";
              $res = mysqli_query($db,$query);
          
              if(mysqli_num_rows($res)> 0)
              {
                
                    echo  "<div class='card col-md'>
                    
                    <a href='template.php'>
                    <img src='images/presentation.png' class='card-img-top' alt='resume'>
                    </a>
                    
                    <div class='card-body '>
                        <p class='card-text'>Resumes</p>
                    </div>
                    </div>";
                
              }
              else
              {
                echo  "<div class='card col-md'>
                    
                <a href='#'>
                <img src='images/presentation.png' class='card-img-top' alt='resume'>
                </a>
                
                <div class='card-body '>
                    <p class='card-text'>No existing Resume</p>
                </div>
                </div>";
              }
                ?>
          </div>

            

        </div>
        </div>
      
</body>

</html>