<?php
include('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomKey</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-key'></i>
      <span class="logo_name">HomKey</span>
    </div>
      <ul class="nav-links">
        <li>
          <a  href="/HomKeyApp" class="active">
            <i class='bx bx-home' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="konfirmasi.php">
          <i class='bx bx-user-check' ></i>
            <span class="links_name">Konfirmasi</span>
          </a>
        </li>
        <li>
          <a href="report.php">
            <i class='bx bx-file' ></i>
            <span class="links_name">Report</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Konfirmasi</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
      
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">daffa</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes" >
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">Header</div>
        <div class="card-body text-success">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
            <button type="button" class="btn btn-success">Right</button>
      </div>
      </div>
    </div>
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu");
  }else
  sidebarBtn.classList.replace("bx-menu");
  }
 </script>
</body>
</html>