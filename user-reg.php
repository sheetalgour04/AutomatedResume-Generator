<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


     <!-- Bootstrap  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="query.css">
    <title>Document</title>
   
</head>
<body class="bg-light">
    <div class="">
        <h1 class="heading">User-Registeration form</h1>

        <div class="container query-reg" style="background-color:#b3b3f1;"> 

        <form action="user-reg.php" method="post" enctype="multipart/form-data">
        <?php include('errors.php') ?>

        <div class="mb-3">
            <label for="name" class="form-label">Enter Full Name:</label>
            <input type="text" name="name" class="form-control" id='name' required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Enter User-Name:</label>
            <input type="text" name="username" class="form-control" id="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Enter Email Address:</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password_1" class="form-label">Enter Password:</label>
            <input type="password" name="password_1" class="form-control" id="password_1" required>
        </div>
        <div class="mb-3">
            <label for="password_2" class="form-label">Confirm Password:</label>
            <input type="password" name="password_2" class="form-control" id="password_2" required>
        </div>
        
        <div class="d-flex justify-content-between md-3">
        <button type="submit" value="Register" name= 'reg_user'class="submit-btn btn btn-success">Register</button>
    <button href="" value="Back" class="btn btn-success submit-btn" onClick="window.history.back();" >Back</button>
    </div>
        </div>
        </form>
    
       
    </div>
</body>
</html>