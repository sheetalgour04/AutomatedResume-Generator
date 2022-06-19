<?php include('server.php')?>
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

    <link rel="stylesheet" href="query.css">
 
    <title>Document</title>
   
</head>
<body class="bg-light">

<!-- query form  -->
<h1 class="heading">Query form</h1>
<div class="container-fluid query "> 

    
        <!-- <div></div> -->
        <!-- <div class="container query-reg" style="background-color:#b3b3f1;">  -->

        <form action="query-form.php" method="post" enctype="multipart/form-data">
            <?php include('errors.php')?>

            <div class="mb-3">
              <label for="username_query" class="form-label">Username:</label>
              <input type="text" name="username_query" class="form-control" id="username_query" aria-describedby="emailHelp" required>
              
            </div>
            <div class="mb-3">
              <label for="name_file" class="form-label">Name of file:</label>
              <input type="text" name="name_file" class="form-control" id="name_file" aria-describedby="emailHelp" required>
              
            </div>
            <div class="mb-3">
              <label for="file" class="form-label"></label>
              <input type="file" name="file" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="d-flex justify-content-between">
            <button type="submit" name="query_form" class="btn btn-primary sub" id="liveAlertPlaceholder">Submit</button>


              
            <button  name="" class="btn btn-primary sub btn-outline-dark" onClick="window.history.back();">Back</button>
            </div>
            
          </form>


    </div>


      
</body>
<script>
       
</script>
</html>