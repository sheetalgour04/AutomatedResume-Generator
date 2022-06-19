
<!-- New data  -->
<?php

session_start();

// connection to database

$db = mysqli_connect('localhost','root','','arg') or die("could not connect to database");


  define('Token','HGsZOXpfNC');
  $skills = [];
  $skill_levels = [];
  $hobbies = [];
  $institutes = [];
  $degrees = [];
  $froms = [];
  $tos = [];
  $grades = [];
  $titles = [];
  $descriptions = [];




  if(Token == $_POST['token'])
  {

    $username = $_SESSION['username'];
    $temp_profile = $_FILES['profile-image']['tmp_name'];
    $profile = $_FILES['profile-image']['name'];
    move_uploaded_file($temp_profile,'images/'.$profile);
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $phone = $_POST['phone-number'];
    $about_me = $_POST['about-me'];


    $primary_color = $_POST['primary-color'];
    $complementary_color = $_POST['complementary-color'];
    $secondary_color = $_POST['secondary-color'];

// new 

    $skill1 = $_POST['skill1'];
    $skill_level1 = $_POST['skill-level1'];
    $skill2 = "";
    $skill_level2 = "";
    $skill3 = "";
    $skill_level3= "";
    $skill4 = "";
    $skill_level4 = "";
    $skill5 = "";
    $skill_level5 = "";


    $hobbies1 = $_POST['hobby1'];
    $hobbies2 = "";
    $hobbies3 = "";
    $hobbies4 = "";

    $school1 = $_POST['school-name1'];
    $school2 = "";
    $school3 = "";

    $degree1 = $_POST['degree1'];
    $degree2 = "";
    $degree3 = "";


    $from1 = $_POST['from1'];
    $from2 = "";
    $from3 = "";

    $to1 = $_POST['to1'];
    $to2 = "";
    $to3 = "";

    $grade1 = $_POST['grade1'];
    $grade2 = "";
    $grade3 = "";

    $title1 = $_POST['title1'];
    $title2 = "";
    $title3 = "";

    $description1 = $_POST['description1'];
    $description2 = "";
    $description3 = "";


    array_push($skills,$_POST['skill1']);
    array_push($skill_levels,intval($_POST['skill-level1']));

    array_push($hobbies,$_POST['hobby1']);
    array_push($institutes,$_POST['school-name1']);
    array_push($degrees,$_POST['degree1']);
    array_push($froms,$_POST['from1']);
    array_push($tos,$_POST['to1']);
    array_push($grades,$_POST['grade1']);
    array_push($titles,$_POST['title1']);
    array_push($descriptions,$_POST['description1']);

    if(isset($_POST['skill2']) && !empty($_POST['skill2']))
    {
      if(isset($_POST['skill-level2']) && !empty($_POST['skill-level2']))
      {
        array_push($skills,$_POST['skill2']);
        array_push($skill_levels,intval($_POST['skill-level2']));

        $skill2 = $_POST['skill2'];
        $skill_level2 =  $_POST['skill-level2'];
      }
    }

    if(isset($_POST['skill3']) && !empty($_POST['skill3']))
    {
      if(isset($_POST['skill-level3']) && !empty($_POST['skill-level3']))
      {
        array_push($skills,$_POST['skill3']);
        array_push($skill_levels,intval($_POST['skill-level3']));

        $skill3 = $_POST['skill3'];
        $skill_level3 =  $_POST['skill-level3'];
      }
    }

    if(isset($_POST['skill4']) && !empty($_POST['skill4']))
    {
      if(isset($_POST['skill-level4']) && !empty($_POST['skill-level4']))
      {
        array_push($skills,$_POST['skill4']);
        array_push($skill_levels,intval($_POST['skill-level4']));

        $skill4 = $_POST['skill4'];
        $skill_level4 =  $_POST['skill-level4'];
      }
    }

    if(isset($_POST['skill5']) && !empty($_POST['skill5']))
    {
      if(isset($_POST['skill-level5']) && !empty($_POST['skill-level5']))
      {
        array_push($skills,$_POST['skill5']);
        array_push($skill_levels,intval($_POST['skill-level5']));

        $skill5 = $_POST['skill5'];
        $skill_level5 =  $_POST['skill-level5'];
      }
    }

    if(isset($_POST['hobby2']) && !empty($_POST['hobby2']))
    {
      array_push($hobbies,$_POST['hobby2']);
      $hobbies2 = $_POST['hobby2'];
    }
    if(isset($_POST['hobby3']) && !empty($_POST['hobby3']))
    {
      array_push($hobbies,$_POST['hobby3']);
      $hobbies3 = $_POST['hobby3'];
    }
    if(isset($_POST['hobby4']) && !empty($_POST['hobby4']))
    {
      array_push($hobbies,$_POST['hobby4']);
      $hobbies4 = $_POST['hobby4'];
    }

    if(isset($_POST['school-name2']) && !empty($_POST['school-name2']))
    {
      if(isset($_POST['degree2']) && !empty($_POST['degree2']))
      {
        if(isset($_POST['from2']) && !empty($_POST['from2']))
        {
          if(isset($_POST['to2']) && !empty($_POST['to2']))
          {
            if(isset($_POST['grade2']) && !empty($_POST['grade2']))
            {
              array_push($institutes,$_POST['school-name2']);
              array_push($degrees,$_POST['degree2']);
              array_push($froms,$_POST['from2']);
              array_push($tos,$_POST['to2']);
              array_push($grades,$_POST['grade2']);


              $school2 =  $_POST['school-name2'];
              $degree2 = $_POST['degree2'];
              $from2 = $_POST['from2'];
              $to2 = $_POST['to2'];
              $grade2 = $_POST['grade2'];
            }
          }
        } 
      }
    }

    if(isset($_POST['school-name3']) && !empty($_POST['school-name3']))
    {
      if(isset($_POST['degree3']) && !empty($_POST['degree3']))
      {
        if(isset($_POST['from3']) && !empty($_POST['from3']))
        {
          if(isset($_POST['to3']) && !empty($_POST['to3']))
          {
            if(isset($_POST['grade3']) && !empty($_POST['grade3']))
            {
              array_push($institutes,$_POST['school-name3']);
              array_push($degrees,$_POST['degree3']);
              array_push($froms,$_POST['from3']);
              array_push($tos,$_POST['to3']);
              array_push($grades,$_POST['grade3']);


              $school3 =  $_POST['school-name3'];
              $degree3 = $_POST['degree3'];
              $from3 = $_POST['from3'];
              $to3 = $_POST['to3'];
              $grade3 = $_POST['grade3'];
            }
          }
        } 
      }
    }

    if(isset($_POST['title2']) && !empty($_POST['title2']))
    {
      if(isset($_POST['description2']) && !empty($_POST['description2']))
      {
        array_push($titles,$_POST['title2']);
        array_push($descriptions,$_POST['description2']);

        $title2 = $_POST['title2'];
        $description2 = $_POST['description2'];
      }
    }

    if(isset($_POST['title3']) && !empty($_POST['title3']))
    {
      if(isset($_POST['description3']) && !empty($_POST['description3']))
      {
        array_push($titles,$_POST['title3']);
        array_push($descriptions,$_POST['description3']);

        $title3 = $_POST['title3'];
        $description3 = $_POST['description3'];
      }
    }


    // new
    $q = "INSERT INTO resume_data(`username`, `profile_image`, `first_name`, `last_name`, `profession`, `email`, `phone_no`, `skill_1`, `skill_1_select`, `skill_2`, `skill_2_select`, `skill_3`, `skill_3_select`, `skill_4`, `skill_4_select`, `skill_5`, `skill_5_select`, `hobby1`, `hobby2`, `hobby3`, `hobby4`, `about_me`, `school1`, `degree1`, `from1`, `to1`, `grade1`, `school2`, `degree2`, `from2`, `to2`, `grade2`, `school3`, `degree3`, `from3`, `to3`, `grade3`, `title1`, `desc1`, `title2`, `desc2`, `title3`, `desc3`, `light`, `complementary`, `dark` ) VALUES ( '$username','$profile' , '$first_name','$last_name','$profession','$email','$phone',
    
    
    '$skill1','$skill_level1','$skill2','$skill_level2','$skill3','$skill_level3','$skill4','$skill_level4','$skill5','$skill_level5'
   
    , '$hobbies1','$hobbies2','$hobbies3','$hobbies4' ,
   '$about_me','$school1','$degree1','$from1','$to1','$grade1','$school2','$degree2','$from2','$to2','$grade2','$school3','$degree3','$from3','$to3','$grade3',
    
     '$title1','$description1','$title2','$description2','$title3','$description3'
     
     ,'$primary_color','$complementary_color','$secondary_color'
      ) ";

    $res = mysqli_query($db,$q);
   
   
    if($res)
    {
    
      if(mysqli_affected_rows($db)>0)
      {
        $_SESSION['success'] = 'Sucessfully inserted data';
      }
    }
    else{
      echo "Error: " . $q . ":-" . mysqli_error($db);
    }
  }
  else
  {
    header('location: /resumegenerator');
  }
           
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- fab awesome icon  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- bootsrap files  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- stylesheet  -->
  <link rel="stylesheet" href="style.css" media="all">

  <!-- icon  -->
  <link rel="shortcut icon" href="images/favicon (2).ico" type="image/x-icon">

  <title><?php echo ucwords($first_name). ' Resume'; ?></title>
</head>
<body>
  

<button class="btn btn-dark button-download" style="margin-top:5px; ">
Save
</button>

<a href="query-form.php">
<button class="btn btn-dark" style="margin-top:5px; text-decoration:none;">Upload</button>
</a>



<!-- Main container  -->
<div class="row main-heading form-container heading-container print-area container-fluid">

<!-- Left part  -->
  <div class="zone-2 col-8 container-fluid" style="background-color: <?php echo $secondary_color ?>">

    <!-- Name and surname  -->
    <div class ="heading">
      <div class="profile-col content">
        <div class="headTitle">
          <b> <h1 class='fs-1'><?php echo ucwords($first_name).' ';?><?php echo ucwords($last_name);?></b></h1>
        </div>
        <div class="subTitle">
          <h1 class="fs-4"><?php echo ucwords($profession);?><h1>
        </div>
      </div>
    </div>

    <!-- Education content  -->
    <div class="group-2 content">
      <div class="title" style="background-color: <?php echo $complementary_color ?>">
        <div class="box">
          <h2>Education</h2>
        </div>
      </div>
      <div class="desc">
        <?php 
          for($i=0; $i<count($institutes);$i++)
          {
              echo "<ul>
              <li>
                <div class='msg-1'>" . $froms[$i] . "-" . $tos[$i]. " | " . ucwords($degrees[$i]) . ", " . $grades[$i]. "</div>
                <div class='msg-2'>" . ucwords($institutes[$i]) . "</div>
              </li>
            </ul>";
          }
        ?>
      </div>
    </div>

    <!-- Experience section  -->
    <div class="group-3 content">
      <div class="title" style="background-color: <?php echo $complementary_color ?>">
        <div class="box">
          <h3>Experience</h3>
        </div>
      </div>
      <div class="desc">
        <?php 
          for($i=0; $i<count($titles);$i++)
            {
              echo "<ul>
              <li>
                 
                <div class='msg-2'>" . ucwords($titles[$i]) ."</div>
                <div class='msg-3'>" . ucfirst($descriptions[$i]) . "</div>
              </li>
            </ul>";
            }
        ?>    
      </div>
    </div>

    <!-- Skills section  -->
    <div class="personal-box content">
      <div class="title" style="background-color: <?php echo $complementary_color ?>">
        <h3>Skills</h3>
      </div>
      <?php 
        for($j=0; $j<count($skills); $j++){
          echo "<div class='skill-1'>
                  <p>
                      <strong>" . strtoupper($skills[$j]) . "</strong>
                  
                  <span class='progress'>";
            for($i=0;$i<$skill_levels[$j];$i++){
              echo '<i class="fas fa-star active"></i>';
              
            }

            echo '</span></p></div>';

          }
      ?>
    </div>
  </div>

<!-- end of left side -->
<!-- right side  -->
  <div class="col-4 zone-1 container-fluid" style="background-color: <?php echo $primary_color ?>"> 

  <!-- image  -->
    <div class="toCenter">
      <img src="images/<?php echo $profile;?>" class="profile circle">
    </div>

    <!-- about me section  -->
    <div class="group-1 content">
      <div class="title" style="background-color: <?php echo $complementary_color ?>">
        <div class="box">
          <h3>About Me</h3>
        </div>
      </div>
      <div class="desc">
        <?php  echo $about_me;?>
      </div>
    </div>

    <!-- hobbies section -->
    <div class="hobbies-box content">
      <div class="title" style="background-color: <?php echo $complementary_color ?>">
        <h3>Hobbies</h3>
      </div>
      <?php 
        foreach($hobbies as $hobby)
        {
          echo "<div class=''>
          <div class='circle'></div>
          <div><strong>" . ucwords($hobby) . "</strong></div>
        </div>";
        }
      ?>
    </div>

    <!-- contact section  -->
    <div class="contact-box content">
      <div class="title" style="background-color: <?php echo $complementary_color ?>">
        <h3>Contact</h3>
      </div>
      
      <div class="call">
       <b> <i class="text"><?php echo $phone;?></i></b>
      </div>
      <div class="email">
       <b> <i class="text"><?php echo $email;?></i></b>
      </div>
    </div>

  </div>

</div>


</body>

<script type = "text/javascript">
  var buttton = document.querySelector(".button-download");

    buttton.addEventListener('click',function() {

    window.print();
  
  });

</script>
</html>



