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


    <div class="" > 
    <h1 class="heading-log" id="login">Login form</h1>
    <div class="container query">
    <form action="user-login.php" method='post' >

     <?php include('errors.php') ?> 

    <div class="mb-3 form-label-container">
    <label for="username" class="form-label">Enter Username:</label>
    <input type="text" name="username" class="form-control" id="username" required>
    </div>
    
    <div class="mb-3 form-label-container">
    <label for="p" class="form-label">Enter Password:</label>
    <input type="password" name="p" class="form-control" id="p" required>
   
    </div>
    <div class="d-flex justify-content-between md-3">
    <button type="submit" name= 'log_user' class="submit-btn btn btn-success form-label-container">Log in</button>

        <a href="index.html" value="Back" class="btn btn-success submit-btn" >Back</a>
    
    </div>
    
    </form>

</div>

</div>
</body>
</html>