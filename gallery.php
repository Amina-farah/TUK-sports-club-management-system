<?php
include_once "database.php"
    // $servername = "localhost";
    // $user = "root";
    // $password = "";
    // $dbase = "sdp";
    // //establish connection to mysql server
    // $conn = mysqli_connect($servername,$user,$password,$dbase);
    

    // session_start();
?>

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
      *{
        list-style: none;
      }
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
            <!-- <li><a class="dropdown-item" style="color:#737373" href="clubs.php?id=course-based and academic">COURSE-BASED & ACADEMIC</a></li>
            <li><a class="dropdown-item" style="color:#737373" href="clubs.php?id=general interest">GENERAL INTEREST</a></li>
            <li><a class="dropdown-item" style="color:#737373" href="clubs.php?id=performing and creative">PERFORMING & CREATIVE</a></li> -->
            <li><a class="dropdown-item" style="color:#737373" href="clubs.php?id= sport and games"> sports club</a></li>
            <!-- <li><a class="dropdown-item" style="color:#737373" href="clubs.php?id=community centric and voluntary">COMMUNITY CENTRIC & VOLUNTARY</a></li>
            <li><a class="dropdown-item" style="color:#737373" href="clubs.php?id=cultural and international communities">CULTURAL & INTERNATIONAL COMMUNITIES</a></li> -->
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

    <div class="container"style="margin: 2rem auto">

<h1 class="text-center">TUK SPORTS CLUB GALLERY</h1>

<ul style="display: flex;flex-wrap: wrap;flex-grow: 10">
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/handball.jpg" alt="TUK LADIES HANDBALL" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/menhockey.jfif" alt="TUK MEN HOCKEY" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/tabletennis.jfif" alt="TUK TABLETENNIS" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/footballmale.jfif" alt="TUK MEN FOOTBALL" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/handballm.jfif" alt="TUK MEN HANDBALL" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/rugby.jfif" alt="TUK RUGBY" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/volleyball.jfif" alt="TUK VOLLEYBALL" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/athletics.jfif" alt="TUK athletics" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/tennis.jfif" alt="TUK LAWN TENNIS" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/football.jfif" alt="TUK LADIES football" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/tae.jfif" alt="TUK TAEKWONDO" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <li style="height: 40vh;flex-grow: 1">
    <img src="sportsimage/bad.jfif" alt="TUK badminton" loading="lazy" style="max-height: 100%;min-width: 100%;object-fit: cover;vertical-align: bottom">
  </li>
  <!--  Adding an empty <li> here so the final photo doesn't stretch like crazy. Try removing it and see what happens!  -->
  <li></li>
</ul>
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
          <li class="nav-item"><a href="clubs.php?id=" class="nav-link px-2 text-muted">CLUBS</a></li>
          <li class="nav-item"><a href="events.php" class="nav-link px-2 text-muted">Events</a></li>
          <li class="nav-item"><a href="gallery.php?id=" class="nav-link px-2 text-muted">gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact Us</a></li>
        </ul>
      </footer>
    </div>