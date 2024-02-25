<?php
include('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PJB UBJOM ARUN</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/Chart.js"></script>

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i><img src="material/icon.PNG" alt=""></i>
      <span class="logo_name"><img src="material/logo.PNG" alt=""><br>UBJOM PLTMG ARUN</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="/pku" class="active">
          <i class='bx bx-bar-chart'></i>
          <span class="links_name">Monitoring</span>
        </a>
      </li>

      <li>
        <a href="#" class="active" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class='bx bx-table'></i>
          <span class="links_name">Engine Hall</span>
        </a>
      </li>
      <div class="collapse" id="navbarToggleExternalContent" style="background: #3d3d3d;padding-left:80px;">
        <li>
          <a href="pages/a1.php">
            <span class="links_name">Blok A1</span>
          </a>
        </li>
        <li>
          <a href="pages/a2.php">
            <span class="links_name">Blok A2</span>
          </a>
        </li>
        <li>
          <a href="pages/a3.php">
            <span class="links_name">Blok A3</span>
          </a>
        </li>
        <li>
          <a href="pages/a4.php">
            <span class="links_name">Blok A4</span>
          </a>
        </li>
        <li>
          <a href="pages/bop.php">
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
        <span class="dashboard">Asset Wellness Monitoring</span>
      </div>


      <div class="profile-details">

        <i class='bx bxs-user-circle'></i>
        <span class="admin_name">System Owner</span>
        <!-- <i class='bx bx-chevron-down' ></i> -->
      </div>
    </nav>

    <div class="home-content">

      <div class="overview-boxes">
        <div class="judul">
          <div class="hijau">Normal</div>
          <div class="kuning">Abnormal</div>
          <div class="merah">Fault</div>
          <?php
          $grafik  = mysqli_query($connect, "SELECT kode_jadwal from jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
          while ($p = mysqli_fetch_array($grafik)) {
          ?>
            <span>Peta Kesehatan Unit <?php echo $p['kode_jadwal'] ?> </span>
          <?php } ?>
        </div>
      </div>

      <div class="overview-boxes">
        <a href="pages/a1.php" class="box">
          <canvas id="piechart1" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A1</span>
          </div>
        </a>

        <a href="pages/a2.php" class="box">
          <canvas id="piechart2" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A2</span>
          </div>
        </a>

        <a href="pages/a3.php" class="box">
          <canvas id="piechart3" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A3</span>
          </div>
        </a>

        <a href="pages/a4.php" class="box">
          <canvas id="piechart4" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A4</span>
          </div>
        </a>

        <a href="pages/bop.php" class="box">
          <canvas id="piechart5" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">BALANCE OF PLANT</span>
          </div>
        </a>

      </div>

      <div class="overview-boxes">
        <div class="judul">
          <div class="hijau">Normal</div>
          <div class="kuning">Abnormal</div>
          <div class="merah">Fault</div>
          <?php
          $grafik  = mysqli_query($connect, "SELECT kode_jadwal from jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
          while ($p = mysqli_fetch_array($grafik)) {
          ?>
            <span>Peta Kesehatan Unit <?php echo $p['kode_jadwal'] ?> (Perminggu)</span>
          <?php } ?>
        </div>
      </div>

      <div class="overview-boxes">
        <a href="pages/a1.php" class="box">
          <canvas id="piecharta1" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A1</span>
          </div>
        </a>

        <a href="pages/a2.php" class="box">
          <canvas id="piecharta2" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A2</span>
          </div>
        </a>

        <a href="pages/a3.php" class="box">
          <canvas id="piecharta3" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A3</span>
          </div>
        </a>

        <a href="pages/a4.php" class="box">
          <canvas id="piecharta4" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">ENGINE HALL BLOK A4</span>
          </div>
        </a>

        <a href="pages/bop.php" class="box">
          <canvas id="piecharta5" width="100" height="100"></canvas>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">BALANCE OF PLANT</span>
          </div>
        </a>

      </div>

    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu");
      } else
        sidebarBtn.classList.replace("bx-menu");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<script type="text/javascript">
  var ctx = document.getElementById("piechart1").getContext("2d");
  var data = {
    labels: ["Normal", "Abnormal", "Fault"],
    datasets: [{
      label: "A1",
      data: [<?php
              $kondisi = mysqli_fetch_array(mysqli_query($connect, "SELECT if(count(kondisi_5)<>0,1,0) as kondisi_5,if(count(kondisi_4)<>0,1,0) as kondisi_4,if(count(kondisi_3)<>0,1,0) as kondisi_3,if(count(kondisi_2)<>0,1,0) as kondisi_2,if(count(kondisi_1)<>0,1,0) as kondisi_1 from a1"));
              if ($kondisi['kondisi_5']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='0',1,null)) as normal, count(if(kondisi_5='1',1,null)) as abnormal, count(if(kondisi_5='2',1,null)) as fault from a1");
              } elseif ($kondisi['kondisi_4']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='0',1,null)) as normal, count(if(kondisi_4='1',1,null)) as abnormal, count(if(kondisi_4='2',1,null)) as fault from a1");
              } elseif ($kondisi['kondisi_3']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='0',1,null)) as normal, count(if(kondisi_3='1',1,null)) as abnormal, count(if(kondisi_3='2',1,null)) as fault from a1");
              } elseif ($kondisi['kondisi_2']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='0',1,null)) as normal, count(if(kondisi_2='1',1,null)) as abnormal, count(if(kondisi_2='2',1,null)) as fault from a1");
              } else {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as normal, count(if(kondisi_1='1',1,null)) as abnormal, count(if(kondisi_1='2',1,null)) as fault from a1");
              }
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['normal'] . '","' . $p['abnormal'] . '","' . $p['fault'] . '",';
              }
              ?>],
      backgroundColor: ['green', 'yellow', 'red'],
      borderColor: ['green', 'yellow', 'red'],
      borderWidth: [15, 0, 0],
      hoverBackgroundColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderWidth: [20, 3, 5]
    }]
  };

  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsive: true,
      legend: {
        display: false
      },
      title: {
        display: false,
        text: 'ENGINE HALL BLOK A1'
      },
      animation: {
        animateScale: true,
        animateRotate: true
      },
      tooltips: {
        callbacks: {
          label: function(tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat((currentValue / total * 100).toFixed(1));
            return currentValue + ' (' + percentage + '%)';
          },
          title: function(tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          }
        }
      },
    }
  });


  var ctx = document.getElementById("piechart2").getContext("2d");
  var data = {
    labels: ["Normal", "Abnormal", "Fault"],
    datasets: [{
      label: "A1",
      data: [<?php
              $kondisi = mysqli_fetch_array(mysqli_query($connect, "SELECT if(count(kondisi_5)<>0,1,0) as kondisi_5,if(count(kondisi_4)<>0,1,0) as kondisi_4,if(count(kondisi_3)<>0,1,0) as kondisi_3,if(count(kondisi_2)<>0,1,0) as kondisi_2,if(count(kondisi_1)<>0,1,0) as kondisi_1 from a2"));
              if ($kondisi['kondisi_5']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='0',1,null)) as normal, count(if(kondisi_5='1',1,null)) as abnormal, count(if(kondisi_5='2',1,null)) as fault from a2");
              } elseif ($kondisi['kondisi_4']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='0',1,null)) as normal, count(if(kondisi_4='1',1,null)) as abnormal, count(if(kondisi_4='2',1,null)) as fault from a2");
              } elseif ($kondisi['kondisi_3']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='0',1,null)) as normal, count(if(kondisi_3='1',1,null)) as abnormal, count(if(kondisi_3='2',1,null)) as fault from a2");
              } elseif ($kondisi['kondisi_2']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='0',1,null)) as normal, count(if(kondisi_2='1',1,null)) as abnormal, count(if(kondisi_2='2',1,null)) as fault from a2");
              } else {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as normal, count(if(kondisi_1='1',1,null)) as abnormal, count(if(kondisi_1='2',1,null)) as fault from a2");
              }
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['normal'] . '","' . $p['abnormal'] . '","' . $p['fault'] . '",';
              }
              ?>],
      backgroundColor: ['green', 'yellow', 'red'],
      borderColor: ['green', 'yellow', 'red'],
      borderWidth: [15, 0, 0],
      hoverBackgroundColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderWidth: [20, 3, 5]
    }]
  };

  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsive: true,
      legend: {
        display: false
      },
      title: {
        display: false,
        text: 'ENGINE HALL BLOK A2'
      },
      animation: {
        animateScale: true,
        animateRotate: true
      },
      tooltips: {
        callbacks: {
          label: function(tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat((currentValue / total * 100).toFixed(1));
            return currentValue + ' (' + percentage + '%)';
          },
          title: function(tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          }
        }
      },
    }
  });


  var ctx = document.getElementById("piechart3").getContext("2d");
  var data = {
    labels: ["Normal", "Abnormal", "Fault"],
    datasets: [{
      label: "A3",
      data: [<?php
              $kondisi = mysqli_fetch_array(mysqli_query($connect, "SELECT if(count(kondisi_5)<>0,1,0) as kondisi_5,if(count(kondisi_4)<>0,1,0) as kondisi_4,if(count(kondisi_3)<>0,1,0) as kondisi_3,if(count(kondisi_2)<>0,1,0) as kondisi_2,if(count(kondisi_1)<>0,1,0) as kondisi_1 from a3"));
              if ($kondisi['kondisi_5']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='0',1,null)) as normal, count(if(kondisi_5='1',1,null)) as abnormal, count(if(kondisi_5='2',1,null)) as fault from a3");
              } elseif ($kondisi['kondisi_4']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='0',1,null)) as normal, count(if(kondisi_4='1',1,null)) as abnormal, count(if(kondisi_4='2',1,null)) as fault from a3");
              } elseif ($kondisi['kondisi_3']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='0',1,null)) as normal, count(if(kondisi_3='1',1,null)) as abnormal, count(if(kondisi_3='2',1,null)) as fault from a3");
              } elseif ($kondisi['kondisi_2']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='0',1,null)) as normal, count(if(kondisi_2='1',1,null)) as abnormal, count(if(kondisi_2='2',1,null)) as fault from a3");
              } else {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as normal, count(if(kondisi_1='1',1,null)) as abnormal, count(if(kondisi_1='2',1,null)) as fault from a3");
              }
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['normal'] . '","' . $p['abnormal'] . '","' . $p['fault'] . '",';
              }
              ?>],
      backgroundColor: ['green', 'yellow', 'red'],
      borderColor: ['green', '#212121', '#212121'],
      borderWidth: [15, 0, 0],
      hoverBackgroundColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderWidth: [20, 3, 5]
    }]
  };

  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsive: true,
      legend: {
        display: false
      },
      title: {
        display: false,
        text: 'ENGINE HALL BLOK A3'
      },
      animation: {
        animateScale: true,
        animateRotate: true
      },
      tooltips: {
        callbacks: {
          label: function(tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat((currentValue / total * 100).toFixed(1));
            return currentValue + ' (' + percentage + '%)';
          },
          title: function(tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          }
        }
      },
    }
  });

  var ctx = document.getElementById("piechart4").getContext("2d");
  var data = {
    labels: ["Normal", "Abnormal", "Fault"],
    datasets: [{
      label: "A4",
      data: [<?php
              $kondisi = mysqli_fetch_array(mysqli_query($connect, "SELECT if(count(kondisi_5)<>0,1,0) as kondisi_5,if(count(kondisi_4)<>0,1,0) as kondisi_4,if(count(kondisi_3)<>0,1,0) as kondisi_3,if(count(kondisi_2)<>0,1,0) as kondisi_2,if(count(kondisi_1)<>0,1,0) as kondisi_1 from a4"));
              if ($kondisi['kondisi_5']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='0',1,null)) as normal, count(if(kondisi_5='1',1,null)) as abnormal, count(if(kondisi_5='2',1,null)) as fault from a4");
              } elseif ($kondisi['kondisi_4']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='0',1,null)) as normal, count(if(kondisi_4='1',1,null)) as abnormal, count(if(kondisi_4='2',1,null)) as fault from a4");
              } elseif ($kondisi['kondisi_3']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='0',1,null)) as normal, count(if(kondisi_3='1',1,null)) as abnormal, count(if(kondisi_3='2',1,null)) as fault from a4");
              } elseif ($kondisi['kondisi_2']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='0',1,null)) as normal, count(if(kondisi_2='1',1,null)) as abnormal, count(if(kondisi_2='2',1,null)) as fault from a4");
              } else {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as normal, count(if(kondisi_1='1',1,null)) as abnormal, count(if(kondisi_1='2',1,null)) as fault from a4");
              }
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['normal'] . '","' . $p['abnormal'] . '","' . $p['fault'] . '",';
              }
              ?>],
      backgroundColor: ['green', 'yellow', 'red'],
      borderColor: ['green', '#212121', '#212121'],
      borderWidth: [15, 0, 0],
      hoverBackgroundColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderWidth: [20, 3, 5]
    }]
  };

  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsive: true,
      legend: {
        display: false
      },
      title: {
        display: false,
        text: 'ENGINE HALL BLOK A4'
      },
      animation: {
        animateScale: true,
        animateRotate: true
      },
      tooltips: {
        callbacks: {
          label: function(tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat((currentValue / total * 100).toFixed(1));
            return currentValue + ' (' + percentage + '%)';
          },
          title: function(tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          }
        }
      },
    }
  });


  var ctx = document.getElementById("piechart5").getContext("2d");
  var data = {
    labels: ["Normal", "Abnormal", "Fault"],
    datasets: [{
      label: "BOP",
      data: [<?php
              $kondisi = mysqli_fetch_array(mysqli_query($connect, "SELECT if(count(kondisi_5)<>0,1,0) as kondisi_5,if(count(kondisi_4)<>0,1,0) as kondisi_4,if(count(kondisi_3)<>0,1,0) as kondisi_3,if(count(kondisi_2)<>0,1,0) as kondisi_2,if(count(kondisi_1)<>0,1,0) as kondisi_1 from bop"));
              if ($kondisi['kondisi_5']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='0',1,null)) as normal, count(if(kondisi_5='1',1,null)) as abnormal, count(if(kondisi_5='2',1,null)) as fault from bop");
              } elseif ($kondisi['kondisi_4']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='0',1,null)) as normal, count(if(kondisi_4='1',1,null)) as abnormal, count(if(kondisi_4='2',1,null)) as fault from bop");
              } elseif ($kondisi['kondisi_3']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='0',1,null)) as normal, count(if(kondisi_3='1',1,null)) as abnormal, count(if(kondisi_3='2',1,null)) as fault from bop");
              } elseif ($kondisi['kondisi_2']) {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='0',1,null)) as normal, count(if(kondisi_2='1',1,null)) as abnormal, count(if(kondisi_2='2',1,null)) as fault from bop");
              } else {
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as normal, count(if(kondisi_1='1',1,null)) as abnormal, count(if(kondisi_1='2',1,null)) as fault from bop");
              }
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['normal'] . '","' . $p['abnormal'] . '","' . $p['fault'] . '",';
              }
              ?>],
      backgroundColor: ['green', 'yellow', 'red'],
      borderColor: ['green', '#212121', '#212121'],
      borderWidth: [15, 0, 0],
      hoverBackgroundColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderColor: ['#50C878', '#FFFF8A', '#cf6679'],
      hoverBorderWidth: [20, 3, 5]
    }]
  };

  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsive: true,
      legend: {
        display: false
      },
      title: {
        display: false,
        text: 'BALANCE OF PLANT'
      },
      animation: {
        animateScale: true,
        animateRotate: true
      },
      tooltips: {
        callbacks: {
          label: function(tooltipItem, data) {
            var dataset = data.datasets[tooltipItem.datasetIndex];
            var meta = dataset._meta[Object.keys(dataset._meta)[0]];
            var total = meta.total;
            var currentValue = dataset.data[tooltipItem.index];
            var percentage = parseFloat((currentValue / total * 100).toFixed(1));
            return currentValue + ' (' + percentage + '%)';
          },
          title: function(tooltipItem, data) {
            return data.labels[tooltipItem[0].index];
          }
        }
      },
    }
  });


  var ctx = document.getElementById('piecharta1').getContext('2d');
  var data = {
    labels: [<?php
              $grafik  = mysqli_query($connect, "SELECT jadwal_1,jadwal_2,jadwal_3,jadwal_4,jadwal_5 FROM jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['jadwal_1'] . '","' . $p['jadwal_2'] . '","' . $p['jadwal_3'] . '","' . $p['jadwal_4'] . '","' . $p['jadwal_5'] . '",';
              }
              ?>],
    datasets: [{
        label: "Normal",
        backgroundColor: "green",
        hoverBackgroundColor: '#50C878',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as kondisi_1, count(if(kondisi_2='0',1,null)) as kondisi_2, count(if(kondisi_3='0',1,null)) as kondisi_3, count(if(kondisi_4='0',1,null)) as kondisi_4, count(if(kondisi_5='0',1,null)) as kondisi_5 from a1");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Abnormal",
        backgroundColor: "yellow",
        hoverBackgroundColor: '#FFFF8A',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='1',1,null)) as kondisi_1, count(if(kondisi_2='1',1,null)) as kondisi_2, count(if(kondisi_3='1',1,null)) as kondisi_3, count(if(kondisi_4='1',1,null)) as kondisi_4, count(if(kondisi_5='1',1,null)) as kondisi_5 from a1");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Fault",
        backgroundColor: "red",
        hoverBackgroundColor: '#cf6679',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='2',1,null)) as kondisi_1, count(if(kondisi_2='2',1,null)) as kondisi_2, count(if(kondisi_3='2',1,null)) as kondisi_3, count(if(kondisi_4='2',1,null)) as kondisi_4, count(if(kondisi_5='2',1,null)) as kondisi_5 from a1");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },

    ]
  };

  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      legend: {
        display: false //This will do the task
      },
      barValueSpacing: 20,
      scales: {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }]
      }
    }
  });

  var ctx = document.getElementById('piecharta2').getContext('2d');

  var data = {
    labels: [<?php
              $grafik  = mysqli_query($connect, "SELECT jadwal_1,jadwal_2,jadwal_3,jadwal_4,jadwal_5 FROM jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['jadwal_1'] . '","' . $p['jadwal_2'] . '","' . $p['jadwal_3'] . '","' . $p['jadwal_4'] . '","' . $p['jadwal_5'] . '",';
              }
              ?>],
    datasets: [{
        label: "Normal",
        backgroundColor: "green",
        hoverBackgroundColor: '#50C878',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as kondisi_1, count(if(kondisi_2='0',1,null)) as kondisi_2, count(if(kondisi_3='0',1,null)) as kondisi_3, count(if(kondisi_4='0',1,null)) as kondisi_4, count(if(kondisi_5='0',1,null)) as kondisi_5 from a2");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Abnormal",
        backgroundColor: "yellow",
        hoverBackgroundColor: '#FFFF8A',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='1',1,null)) as kondisi_1, count(if(kondisi_2='1',1,null)) as kondisi_2, count(if(kondisi_3='1',1,null)) as kondisi_3, count(if(kondisi_4='1',1,null)) as kondisi_4, count(if(kondisi_5='1',1,null)) as kondisi_5 from a2");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Fault",
        backgroundColor: "red",
        hoverBackgroundColor: '#cf6679',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='2',1,null)) as kondisi_1, count(if(kondisi_2='2',1,null)) as kondisi_2, count(if(kondisi_3='2',1,null)) as kondisi_3, count(if(kondisi_4='2',1,null)) as kondisi_4, count(if(kondisi_5='2',1,null)) as kondisi_5 from a2");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },

    ]
  };

  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      legend: {
        display: false //This will do the task
      },
      barValueSpacing: 20,
      scales: {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }]
      }
    }
  });

  var ctx = document.getElementById('piecharta3').getContext('2d');

  var data = {
    labels: [<?php
              $grafik  = mysqli_query($connect, "SELECT jadwal_1,jadwal_2,jadwal_3,jadwal_4,jadwal_5 FROM jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['jadwal_1'] . '","' . $p['jadwal_2'] . '","' . $p['jadwal_3'] . '","' . $p['jadwal_4'] . '","' . $p['jadwal_5'] . '",';
              }
              ?>],
    datasets: [{
        label: "Normal",
        backgroundColor: "green",
        hoverBackgroundColor: '#50C878',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as kondisi_1, count(if(kondisi_2='0',1,null)) as kondisi_2, count(if(kondisi_3='0',1,null)) as kondisi_3, count(if(kondisi_4='0',1,null)) as kondisi_4, count(if(kondisi_5='0',1,null)) as kondisi_5 from a3");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Abnormal",
        backgroundColor: "yellow",
        hoverBackgroundColor: '#FFFF8A',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='1',1,null)) as kondisi_1, count(if(kondisi_2='1',1,null)) as kondisi_2, count(if(kondisi_3='1',1,null)) as kondisi_3, count(if(kondisi_4='1',1,null)) as kondisi_4, count(if(kondisi_5='1',1,null)) as kondisi_5 from a3");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Fault",
        backgroundColor: "red",
        hoverBackgroundColor: '#cf6679',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='2',1,null)) as kondisi_1, count(if(kondisi_2='2',1,null)) as kondisi_2, count(if(kondisi_3='2',1,null)) as kondisi_3, count(if(kondisi_4='2',1,null)) as kondisi_4, count(if(kondisi_5='2',1,null)) as kondisi_5 from a3");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },

    ]
  };

  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      legend: {
        display: false //This will do the task
      },
      barValueSpacing: 20,
      scales: {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }]
      }
    }
  });

  var ctx = document.getElementById('piecharta4').getContext('2d');

  var data = {
    labels: [<?php
              $grafik  = mysqli_query($connect, "SELECT jadwal_1,jadwal_2,jadwal_3,jadwal_4,jadwal_5 FROM jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['jadwal_1'] . '","' . $p['jadwal_2'] . '","' . $p['jadwal_3'] . '","' . $p['jadwal_4'] . '","' . $p['jadwal_5'] . '",';
              }
              ?>],
    datasets: [{
        label: "Normal",
        backgroundColor: "green",
        hoverBackgroundColor: '#50C878',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as kondisi_1, count(if(kondisi_2='0',1,null)) as kondisi_2, count(if(kondisi_3='0',1,null)) as kondisi_3, count(if(kondisi_4='0',1,null)) as kondisi_4, count(if(kondisi_5='0',1,null)) as kondisi_5 from a4");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Abnormal",
        backgroundColor: "yellow",
        hoverBackgroundColor: '#FFFF8A',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='1',1,null)) as kondisi_1, count(if(kondisi_2='1',1,null)) as kondisi_2, count(if(kondisi_3='1',1,null)) as kondisi_3, count(if(kondisi_4='1',1,null)) as kondisi_4, count(if(kondisi_5='1',1,null)) as kondisi_5 from a4");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Fault",
        backgroundColor: "red",
        hoverBackgroundColor: '#cf6679',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='2',1,null)) as kondisi_1, count(if(kondisi_2='2',1,null)) as kondisi_2, count(if(kondisi_3='2',1,null)) as kondisi_3, count(if(kondisi_4='2',1,null)) as kondisi_4, count(if(kondisi_5='2',1,null)) as kondisi_5 from a4");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },

    ]
  };

  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      legend: {
        display: false //This will do the task
      },
      barValueSpacing: 20,
      scales: {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }]
      }
    }
  });

  var ctx = document.getElementById('piecharta5').getContext('2d');

  var data = {
    labels: [<?php
              $grafik  = mysqli_query($connect, "SELECT jadwal_1,jadwal_2,jadwal_3,jadwal_4,jadwal_5 FROM jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
              while ($p = mysqli_fetch_array($grafik)) {
                echo '"' . $p['jadwal_1'] . '","' . $p['jadwal_2'] . '","' . $p['jadwal_3'] . '","' . $p['jadwal_4'] . '","' . $p['jadwal_5'] . '",';
              }
              ?>],
    datasets: [{
        label: "Normal",
        backgroundColor: "green",
        hoverBackgroundColor: '#50C878',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as kondisi_1, count(if(kondisi_2='0',1,null)) as kondisi_2, count(if(kondisi_3='0',1,null)) as kondisi_3, count(if(kondisi_4='0',1,null)) as kondisi_4, count(if(kondisi_5='0',1,null)) as kondisi_5 from bop");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Abnormal",
        backgroundColor: "yellow",
        hoverBackgroundColor: '#FFFF8A',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='1',1,null)) as kondisi_1, count(if(kondisi_2='1',1,null)) as kondisi_2, count(if(kondisi_3='1',1,null)) as kondisi_3, count(if(kondisi_4='1',1,null)) as kondisi_4, count(if(kondisi_5='1',1,null)) as kondisi_5 from bop");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },
      {
        label: "Fault",
        backgroundColor: "red",
        hoverBackgroundColor: '#cf6679',
        data: [<?php
                $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='2',1,null)) as kondisi_1, count(if(kondisi_2='2',1,null)) as kondisi_2, count(if(kondisi_3='2',1,null)) as kondisi_3, count(if(kondisi_4='2',1,null)) as kondisi_4, count(if(kondisi_5='2',1,null)) as kondisi_5 from bop");
                while ($p = mysqli_fetch_array($grafik)) {
                  echo '"' . $p['kondisi_1'] . '","' . $p['kondisi_2'] . '","' . $p['kondisi_3'] . '","' . $p['kondisi_4'] . '","' . $p['kondisi_5'] . '",';
                }
                ?>]
      },

    ]
  };

  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      legend: {
        display: false //This will do the task
      },
      barValueSpacing: 20,
      scales: {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }]
      }
    }
  });
</script>