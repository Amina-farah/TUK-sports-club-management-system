<?php include_once "database.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUK SPORTS CLUB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bakbak One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Koulen' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/sportslogo.png">
    <style>
      h1.a {
      font-family: "Capriola", sans-serif;
      color: #e6b800;
      font-size: 25px;
      }
      .content {
      max-width: 1300px;
      margin: auto;
      padding: 10px;
      }
      .bgcontainer {
      position: relative;
      text-align: center;
      }
      /* Centered text */
      .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      }
      
      .containerbackground {
            margin: 3rem;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: -1;
            transform: rotate(300deg);
            -webkit-transform: rotate(300deg);
            color: #c6afaf;
        }
    </style>
</head>
<body>
    <div style="max-width: 1300px; margin: auto; padding: 10px;">
    <!-- Header -->
    <div class="container">
      <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" width="auto" height="auto">
        <svg class="bi me-2" width="40" height="32"><img onclick="location.href='index.php'" src="images/tuk logo.jfif" style="border-radius: 10%;" alt="Logo" width="55" height="80"></svg>
        <h1 class="fs-4; a" onclick="location.href='index.php'"style="margin: 10px;font-weight: bold;">&nbsp;&nbsp;&nbsp;TUK SPORTS <br>&nbsp;CLUB MANAGEMENT SYSTEM</h1> 
      </a>
    
    <!-- Menu-->
    <ul class="nav nav-tabs justify-content-end" style="font-family: Bakbak One,san-serif; color: #fd7e14">
        <li class="nav-item">
          <a class="nav-link active" style="color:#ffd11a" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:#737373" href="about.php">ABOUT US</a>
        </li>
        <div class="dropdown">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" ondblclick="location.href='clubs.php?id='" style="color:#737373" role="button" aria-expanded="false">CLUBS</a>
          <ul class="dropdown-menu">
            
            <li><a class="dropdown-item" style="color:#737373" href="clubs.php?id= sport and games"> sports club</a></li>
            
          </ul>
        </li>
        </div>
        <li class="nav-item">
          <a class="nav-link" style="color:#737373" href="events.php">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#737373" href="gallery.php">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#737373" href="contact.php">CONTACT US</a>
        </li>
        
        <li class="nav-item ">

          <?php 
              if (isset($_SESSION['username'])) { ?>

              <ul class="nav nav-pills ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:#0d6efd">
                <?php
                if(isset($_SESSION['username'])) {
                  echo $_SESSION['fullname'];
              }else {
                  echo "";
              } 
              ?>
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="profile.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Edit Profile</a></li>
                  <!-- committee only-->
                  <?php
                    $result =mysqli_query($conn,"SELECT * from students");
                    while($row = mysqli_fetch_array($result)){
                    if($row['username'] == $_SESSION['fullname'] && $row['role'] == 'Committee'){
                      echo "<li><a class='dropdown-item' href='committee.php'>
                      <i class='bi bi-card-checklist' aria-hidden='true'></i>&nbsp;Commitee</a></li>";
                    }
                    }
                    ?>
                    <!-- Organizer only-->
                  <?php
                    $result =mysqli_query($conn,"SELECT * from students");
                    while($row = mysqli_fetch_array($result)){
                    if($row['username'] == $_SESSION['fullname'] && $row['role'] == 'Organizer'){
                      echo "<li><a class='dropdown-item' href='organizer.php'>
                      <i class='bi bi-calendar2-event' aria-hidden='true'></i>&nbsp;Organizer</a></li>";
                    }
                    }
                    ?>
                  <!-- admin only -->
                  <?php
                    if($_SESSION['fullname'] == 'admin'){
                    echo "<li><a class='dropdown-item' href='adashboard.php'><i class='fa fa-cogs' aria-hidden='true'></i>&nbsp;Admin</a></li>";
                    }
                    ?> 
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php" style="color:#dc3545"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;LOG OUT</a></li>
              </ul>
              </li>
          </ul>
          <?php 
              } 
              else { ?>

              <button onclick="location.href='login.php'" type="button" class="btn btn-primary">Login</button>

          <?php 
          } 
          ?>
      </li>
      </ul>
    </div>
    </div>
    
    <!-- Explore Club -->
    <div style="background-color: #FFFFED;">
      <div class="p-4 p-md-5 mb-4 rounded text-center content" style="background:url('images/sports_banners.png') no-repeat; background-size:contain;background-size: 100% 60%;">
          <h1 class="display-3 fst-italic" style="font-family: Koulen,san-serif; margin-top:300px;  text-shadow: 5px 5px 5px #63b5bf;">
          Wider Range of SPORTS & <br>GAMES <br>To choose from</h1>
          <button onclick="location.href='#Clubs-Category'" type="button" class="btn btn-warning btn-lg " style="border-radius: 10%; margin-top:25px; font-weight: bold;">
          Explore &nbsp;<img src="images/right-arrow.png" ></button>
      </div>
    </div>

    <!--Introduce tuk sports-->
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mx-auto content" style="background-color: #63b5bf">
        <div class="col p-4 d-flex flex-column position-static text-center" style="font-family: Koulen,san-serif;">
          <h1 class="mb-0" style=" font-size: 6rem">TUK SPOTS CLUB MANAGEMENT SYSTEM</h1>
          <br>
          
          <br>
          <button onclick="location.href='about.php'" type="button" class="btn btn-outline-warning mx-auto" style="font-weight: bold; width:200px;">Learn More</button>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="images/tuk logo.jfif" width="400" height="400">
      </div>
    </div>

    <!--Category-->
    <section id="Clubs-Category" class="content border border-4 rounded-3">
    <br>
    <div class="card mx-auto" style="width: 60%">
      <img src="images/sportsm.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">sports Clubs provide students with many positive experiences that help them to become well-rounded individuals who are ready for world. 
          <br>Joining a club can be one of the best decisions that a student ever made.</h5>
          <br>
          <p class="card-text text-end " style="font-weight: bold;">Check Our Clubs Now</p>
        <a href="clubs.php?id=" class="btn btn-primary float-end" style="width:100px;font-weight: bold;">Go </a>
      </div>
    </div>
    <br><br>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        
       
        
        <div class="col-lg-4 text-center">
        <img class="bd-placeholder-img rounded" width="140" height="140" src="images/download.jfif" class="img-thumbnail" alt="...">
          <br> </BR>
          <h4>INDOOR GAMES</h4><br></br>
          <p>These are the games played inside and thus do not require a dedicated playground when you wish to play these games. Generally, indoor games help an individual develop his mental strength and become more creative. Popular indoor games include Chess, Table tennis, scrabble, badminton, woodball, etc.. </p>
          <p><a class="btn btn-secondary" href="clubs.php?id=performing and creative">View details »</a></p>
        </div>
        
        <div class="col-lg-4 text-center">
          <br>
        <img class="bd-placeholder-img rounded" width="140" height="140" src="images/outdoor.jfif" class="img-thumbnail" alt="...">
          <h4>OUTDOORGAMES</h4>
          <br>
          <p>The games that include many physical movements and require a dedicated playground to play are included in the outdoor games. These are the games that are helpful in the development of the physical strength and social qualities of an individual. Popular outdoor games include football, hockey, lawn tennis, rugby, volleyball, athletics, handball,basketball etc.</p><br><br>
          <p><a class="btn btn-secondary" href="clubs.php?id=recreation, sport and games">View details »</a></p>
        </div>


      </div><!-- /.row -->

    </div>
    </section>


    <!-- Recent Event -->
    <?php 
      $sql = "SELECT * FROM events ORDER BY eid desc limit 6 "; 
      $result = $conn->query($sql);
      $sqlall= "SELECT * FROM events ORDER BY eid desc";
      $resultall = $conn->query($sqlall);
        
      $i = 0;
        
      if ($result->num_rows > 0) {  
        
          // Output data of each row
          $idarray= array();
          while($row = $result->fetch_assoc()) {
              echo "<br>";  
              
              // Create an array to store the
              // id of the blogs        
              array_push($idarray,$row['eid']); 
          } 
      }
      else {
          echo "0 results";
      }
    ?>
    <div class="blog-latest ">
      <div class="container ">
      <h1 class="blog-secondary-heading text-dark">
        <a href="events.php" class="blog-link" style="font-size:3.5rem; text-decoration:none;">Recent Event
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
        </svg>
        </a>
      </h1><br>
        
        <div class="main-carousel p-2 " id="latestCarousel">
          <div class="row">
            
    
            <!-- <?php 
                
              for($x = 0; $x < 6; $x++) {
    
                // This is the loop to display all
                // the stored blog posts
                if(isset($x)) {
                  $query = mysqli_query(
                  $conn,"SELECT * FROM `events` WHERE eid = '$idarray[$x]'");
                    
                  $res = mysqli_fetch_array($query);
    
                  $image = $res['eimage'];
                  $blog_title = $res['etitle'];
                  $blog_id = $res['eid'];
                  $blog_date = $res['edate_time'];
            ?>
            
            <?php
                }
              }
            ?>
          

        </div>
      </div>
    </div> -->

  <!-- Help -->
  <br><hr><br>
  <div class="card mx-auto content" style="width:50%; font-family: Koulen,san-serif;">
  <br>
  <img src="images/helpdesk.webp" class="card-img-top mx-auto"alt="...">
  <div class="card-body mx-auto text-center">
    <h1 class="card-title">Need Any Help?</h1>
    <br>
    <a href="contact.php" class="btn btn-primary btn-lg">Contact Us Now!</a>
  </div>
</div>
<br><br>
  
    <!--Footer-->
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© TUK SPORTS CLUB MANAGEMENT SYSTEM </p>

        <a class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img src="images/tuk logo.jfif" style="border-radius: 10%;" alt="Logo" width="55" height="55">
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About Us</a></li>
          <!-- <li class="nav-item"><a href="clubs.php?id=" class="nav-link px-2 text-muted">Clubs</a></li> -->
          <li class="nav-item"><a href="events.php" class="nav-link px-2 text-muted">Events</a></li>
          <li class="nav-item"><a href="gallery.php?id=" class="nav-link px-2 text-muted">gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact Us</a></li>
        </ul>
      </footer>
    </div>
</body>
</html>