<?php

session_start();

// varialbles


$username = "";
$fullname = '';
$email = "";


$errors = array();
// connection to database

$db = mysqli_connect('localhost','root','','arg') or die("could not connect to database");


// Registering users

if(isset($_POST['name']))
{
    $fullname = mysqli_real_escape_string($db, $_POST['name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    $password1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if(empty($fullname)) { array_push($errors,"Full-name is required"); }
    if(empty($username)) { array_push($errors,"User-name is required"); }
    if(empty($email)) { array_push($errors,"Email is required"); }
    if(empty($password1)) { array_push($errors,"Password is required"); }


if($password1 != $password2) { array_push($errors,"Passwords do not match"); }


// check 

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";
$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

if($user)
{
    if($user['username'] === $username) {
        array_push($errors,"Username Already exists.");
    }
    if($user['email'] === $email) {
        array_push($errors,"Email Already registered.");
    }
}


if(count($errors) == 0)
{
    $password = md5($password1);

    // echo $password;

    // $query = "INSERT INTO users(fullname,username,email,passwords) VALUES ('$fullname','$username','$email','$password') ";
    $query = "INSERT INTO users VALUES ('$fullname','$username','$email','$password'); ";

   $res =  mysqli_query($db,$query);

    if($res)
    {
        echo "Success";
    }
    else
    {
        echo "KUch bhi";
    }
    $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now Registered.";

    header('location: user-login.php');
}


}

// login 

if(isset($_POST['log_user']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['p']);

    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($password)){
        array_push($errors,"Password is wrong/empty");
    }

    if(count($errors) == 0)
    {
        $password = md5($password);
        
        echo $password;


        // $query = "SELECT * FROM `users` where username = '$username' AND passwords = '$password' ; ";
        $query = "select * from users where username='$username' and passwords='$password';";
        $res = mysqli_query($db,$query);

        
        // echo mysqli_num_rows($res);

        if(mysqli_num_rows($res)){

           
            $_SESSION['username'] = $username;
            // $_SESSION['success'] = "Logged in successfully";

            header('location: dashboard-user.php');
        }
        else{
            
            array_push($errors,"Wrong username/password. Please try again!");
        }
    }
}

/*
// admin registeration

if(isset($_POST['admin_reg']))
{

    $name = mysqli_real_escape_string($db, $_POST['name1']);
    $username = mysqli_real_escape_string($db, $_POST['username1']);
    $email = mysqli_real_escape_string($db, $_POST['email1']);

    $password1 = mysqli_real_escape_string($db, $_POST['password_11']);
    $password2 = mysqli_real_escape_string($db, $_POST['password_21']);

    if(empty($name)) { array_push($errors,"Full-name is required"); }
    if(empty($username)) { array_push($errors,"Admin-name is required"); }
    if(empty($email)) { array_push($errors,"Email is required"); }
    if(empty($password1)) { array_push($errors,"Password is required"); }


    if($password1 != $password2) { array_push($errors,"Passwords do not match"); }


// check 

    $user_check_query = "SELECT * FROM admin WHERE username1 = '$username' AND email1 = '$email' LIMIT 1 ";
    $results = mysqli_query($db,$user_check_query);
    $user = mysqli_fetch_assoc($results);

    if($user)
    {
        if($user['username1'] === $username) {
            array_push($errors,"Username Already exists.");
        }
        if($user['email1'] === $email) {
            array_push($errors,"Email Already registered.");
        }
    }


    if(count($errors) == 0)
    {
        $password = md5($password1);
        print $password;
        $query = "INSERT INTO admin(name1,username1,email1,password11) VALUES ('$fullname','$username','$email','$password') ";

        $res =  mysqli_query($db,$query);

        if($res)
        {
            echo "Success";
        }
        else
        {
            echo "KUch bhi";
        }

        $_SESSION['username'] = $username;
        // $_SESSION['success'] = "You are now Registered.";

        header('location: admin-login.php');
    }

}


// login  admin

if(isset($_POST['admin_login']))
{
    $username = mysqli_real_escape_string($db, $_POST['username1']);
    $password = mysqli_real_escape_string($db, $_POST['password_11']);

    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($password)){
        array_push($errors,"Password is wrong/empty");
    }

    if(count($errors) == 0)
    {
        $password = md5($password);
        
        $query = "SELECT * FROM admin where username1 = '$username' AND password11 = '$password' ";
        $res = mysqli_query($db,$query);

        

        if(mysqli_num_rows($res)){

            $_SESSION['username'] = $username;
            // $_SESSION['success'] = "Logged in successfully";

            header('location: dashboard-user.php');
        }
        else{
            array_push($errors,"Wrong username/password. Please try again!");
        }
    }
}

*/

// Query form

if(isset($_POST['query_form']))
{
   
    if(isset($_FILES['file'])){


          $name_of_file =mysqli_real_escape_string($db, $_POST['name_file']);
          $username =mysqli_real_escape_string($db, $_POST['username_query']);

          // check query
          $q = "SELECT * FROM resume where username= '$username' AND filename='$name_of_file' LIMIT 1;";
          $r = mysqli_query($db,$q);

          $user = mysqli_fetch_assoc($r);

          if($user)
          {
              if($user['filename'] === $name_of_file) {
                  array_push($errors,"File_name Already exist. Change the file name.");
              }
          }
      
          if(count($errors) == 0)
          {
            $temp_name = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
  
            move_uploaded_file($temp_name,"images/".$file_name);
  
            $query = "INSERT INTO resume(username,filename,pdf_file) VALUES ('$username' , '$name_of_file' , '$file_name'); ";
            $res = mysqli_query($db,$query);
          
            if($res){
  
                echo '<script type="text/javascript"> 
  
                  prompt("Uploaded!");
                  window.history.back();  

                </script>' ;

                header('location: dashboard-user.php');
  
          }
          }
      
      }
        //   $file_name2 = addcslashes(file_get_contents($_FILES['file']['tmp_name']));

         

      }
?>

