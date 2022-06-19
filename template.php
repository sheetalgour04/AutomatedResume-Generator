
<!-- New data  -->
<?php

session_start();

// connection to database

$db = mysqli_connect('localhost','root','','arg') or die("could not connect to database");


?>

<?php if($_SESSION['username'])
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM resume_data where username = '$username'";
            $res = mysqli_query($db,$query);


            
            if(mysqli_num_rows($res)> 0) : ?>
        <?php
              foreach($res as $row) :
              
               
           $profile  = $row['profile_image'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $profession = $row['profession'];
            $email = $row['email'];
            $phone = $row['phone_no'];
            $about_me = $row['about_me'];
        
        
            $primary_color = $row['light'];
            $complementary_color = $row['complementary'];
            $secondary_color = $row['dark'];
        

                            
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

                array_push($skills,$row['skill_1']);
                array_push($skill_levels,intval($row['skill_1_select']));

                array_push($hobbies,$row['hobby1']);
                array_push($institutes,$row['school1']);
                array_push($degrees,$row['degree1']);
                array_push($froms,$row['from1']);
                array_push($tos,$row['to1']);
                array_push($grades,$row['grade1']);
                array_push($titles,$row['title1']);
                array_push($descriptions,$row['desc1']);



                if($row['skill_2'] != '' && $row['skill_2_select']!='')
                {
                    array_push($skills,$row['skill_2']);
                    array_push($skill_levels,$row['skill_2_select']);
                }
                if($row['skill_3'] != '' && $row['skill_3_select']!='')
                {
                    array_push($skills,$row['skill_3']);
                    array_push($skill_levels,$row['skill_3_select']);
                }
                if($row['skill_4'] != '' && $row['skill_4_select']!='')
                {
                    array_push($skills,$row['skill_4']);
                    array_push($skill_levels,$row['skill_4_select']);
                }
                if($row['skill_5'] != '' && $row['skill_5_select']!='')
                {
                    array_push($skills,$row['skill_5']);
                    array_push($skill_levels,$row['skill_5_select']);
                }

                if($row['hobby2'] != '')
                {
                    array_push($hobbies,$row['hobby2']);
                }
                if($row['hobby3'] != '')
                {
                    array_push($hobbies,$row['hobby3']);
                }
                if($row['hobby4'] != '')
                {
                    array_push($hobbies,$row['hobby4']);
                }
                


                if($row['school2'] != '')
                {
                    array_push($institutes,$row['school2']);
                    array_push($degrees,$row['degree2']);
                    array_push($froms,$row['from2']);
                    array_push($tos,$row['to2']);
                    array_push($grades,$row['grade2']);
                }

                if($row['school3'] != '')
                {
                    array_push($institutes,$row['school3']);
                    array_push($degrees,$row['degree3']);
                    array_push($froms,$row['from3']);
                    array_push($tos,$row['to3']);
                    array_push($grades,$row['grade3']);
                }


                if($row['title2'] != '')
                {
                    array_push($titles,$row['title2']);
                    array_push($descriptions,$row['desc2']);
                }

                if($row['title3'] != '')
                {
                    array_push($titles,$row['title3']);
                    array_push($descriptions,$row['desc3']);
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
                            
            <!-- Main container  -->
            <div class="row main-heading form-container heading-container print-area container-fluid">

            <!-- Left part  -->
            <div class="zone-2 col-8 container-fluid" style="background-color: <?php echo $secondary_color; ?>">

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
                <div class="title" style="background-color: <?php echo $complementary_color; ?>">
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
            <div class="col-4 zone-1 container-fluid" style="background-color: <?php echo $primary_color; ?>"> 

            <!-- image  -->
                <div class="toCenter">
                <img src="images/<?php echo $profile;?>" class="profile circle">
                </div>

                <!-- about me section  -->
                <div class="group-1 content">
                <div class="title" style="background-color: <?php echo $complementary_color; ?>">
                    <div class="box">
                    <h3>About Me</h3>
                    </div>
                </div>
                <div class="desc">
                    <?php  echo $about_me ;?>
                </div>
                </div>

                <!-- hobbies section -->
                <div class="hobbies-box content">
                <div class="title" style="background-color: <?php echo $complementary_color; ?>">
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
                <div class="title" style="background-color: <?php echo $complementary_color; ?>">
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

 
<?php endforeach?>
<?php endif?>


<button  name="" class="btn btn-warning sub" onClick="window.history.back();">Back</button>
        
</body>
</html>





