<?php
include('../config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PJB UBJOM ARUN</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/Chart.js"></script>
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: #181818;">
<div class="sidebar">
    <div class="logo-details">
        <i><img src="../material/icon.PNG" alt=""></i>
      <span class="logo_name"><img src="../material/logo.PNG" alt=""><br>UBJOM PLTMG ARUN</span>
    </div>
      <ul class="nav-links">
        <li>
          <a  href="/pku" class="active">
          <i class='bx bx-bar-chart'></i>
            <span class="links_name">Monitoring</span>
          </a>
        </li>
        <li>
          <a  href="#" class="active" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class='bx bx-table'></i>
            <span class="links_name">Engine Hall</span>
          </a>
        </li>
        <div class="collapse" id="navbarToggleExternalContent" style="background: #3d3d3d;padding-left:80px;">
        <li>
          <a href="a1.php">
            <span class="links_name">Blok A1</span>
          </a>
        </li>
        <li>
          <a href="a2.php">
            <span class="links_name">Blok A2</span>
          </a>
        </li>
        <li>
          <a href="a3.php">
            <span class="links_name">Blok A3</span>
          </a>
        </li>
        <li>
          <a href="a4.php">
            <span class="links_name">Blok A4</span>
          </a>
        </li>
        <li>
          <a href="bop.php">
            <span class="links_name">BOP</span>
          </a>
        </li>
      </div>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Engine Hall Blok A4</span>
      </div>
      
      <div class="profile-details">
      
      <i class='bx bxs-user-circle' ></i>
        <span class="admin_name">System Owner</span>
        <!-- <i class='bx bx-chevron-down' ></i> -->
      </div>
    </nav>

      <div class="home-content">
        
        <div class="overview-boxes">
          <div class="judul">
        <?php
        $grafik  = mysqli_query($connect, "SELECT kode_jadwal from jadwal,a4 where a4.jadwal=jadwal.kode_jadwal group by jadwal");
        while ($p = mysqli_fetch_array($grafik)) {
          ?>
          <span>Peta Kesehatan Unit <?php echo $p['kode_jadwal']?></span>
          <?php } ?>
        </div>
        </div>

        <div class="overview-boxes" >
          <table id="customers" >
          <tr style="background-color: #04AA6D;">
    <th rowspan="2">Main Machine</th>
    <th rowspan="2">System</th>
    <th colspan="3">Work Order</th>
    <th rowspan="2">Failure Description</th>
    <th rowspan="2">Keterangan</th>
    <th colspan="5">Status Peta Kesehatan Unit</th>
  </tr>
  
  <tr style="background-color: #04AA6D;">
    <th>No WO</th>
    <th>Status</th>
    <th>Work Type</th>
    <?php
              $grafik  = mysqli_query($connect, "SELECT jadwal_1,jadwal_2,jadwal_3,jadwal_4,jadwal_5 FROM jadwal,a4 where a4.jadwal=jadwal.kode_jadwal group by jadwal");
              while ($p = mysqli_fetch_array($grafik)) {
        ?>
    <th style="white-space: nowrap;"><?php echo $p['jadwal_1']?></th>
    <th style="white-space: nowrap;"><?php echo $p['jadwal_2']?></th>
    <th style="white-space: nowrap;"><?php echo $p['jadwal_3']?></th>
    <th style="white-space: nowrap;"><?php echo $p['jadwal_4']?></th>
    <th style="white-space: nowrap;"><?php echo $p['jadwal_5']?></th>
    <?php } ?>
  </tr>

  <?php
               $grafik  = mysqli_query($connect, "SELECT * from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
  <tr>
  
    <td><?php echo $p['main_machine']?></td>
    <td><?php echo $p['system']?></td>
    <td><?php echo $p['no_wo']?></td>
    <td><?php echo $p['status']?></td>
    <td><?php echo $p['work_type']?></td>
    <td><?php echo $p['failure_description']?></td>
    <td><?php echo $p['keterangan']?></td>
    <td style="text-align: center;"><?php echo $p['kondisi_1']?></td>
    <td style="text-align: center;"><?php echo $p['kondisi_2']?></td>
    <td style="text-align: center;"><?php echo $p['kondisi_3']?></td>
    <td style="text-align: center;"><?php echo $p['kondisi_4']?></td>
    <td style="text-align: center;"><?php echo $p['kondisi_5']?></td>
  </tr>
  
  <?php } ?>
  
  <tr style="text-align: center;background-color: green;font-weight: bold;">
  
  <th rowspan="3" style="background-color: #181818;">Total System</th>

  <th colspan="6" >normal</th>
  <?php
               
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as jadwal_1 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_1']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='0',1,null)) as jadwal_2 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_2']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='0',1,null)) as jadwal_3 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_3']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='0',1,null)) as jadwal_4 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_4']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='0',1,null)) as jadwal_5 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_5']?></td>
    <?php } ?>
  </tr>

  <tr style="text-align: center;background-color: yellow;font-weight: bold; color:black;">
  <th colspan="6">abnormal</th>
  <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='1',1,null)) as jadwal_1 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_1']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='1',1,null)) as jadwal_2 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_2']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='1',1,null)) as jadwal_3 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_3']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='1',1,null)) as jadwal_4 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_4']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='1',1,null)) as jadwal_5 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_5']?></td>
    <?php } ?>
  </tr>
  <tr style="text-align: center;background-color: red;font-weight: bold;">
  <th colspan="6">fault</th>
  <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='2',1,null)) as jadwal_1 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_1']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='2',1,null)) as jadwal_2 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_2']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='2',1,null)) as jadwal_3 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_3']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='2',1,null)) as jadwal_4 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_4']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='2',1,null)) as jadwal_5 from a4");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_5']?></td>
    <?php } ?>
  </tr>
          </table>
  

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>