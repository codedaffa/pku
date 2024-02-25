<?php
include('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>pjb ~ Blok</title>

</head>
<body>

<table border="2">
  <tr>
    <th rowspan="2">Main Machine</th>
    <th rowspan="2">System</th>
    <th colspan="3">Work Order</th>
    <th rowspan="2">Failure Description</th>
    <th rowspan="2">Keterangan</th>
    <th colspan="5">Status Peta Kesehatan Unit</th>
  </tr>
  
  <tr>
    <th>No WO</th>
    <th>Status</th>
    <th>Work Type</th>
    <?php
              $grafik  = mysqli_query($connect, "SELECT jadwal_1,jadwal_2,jadwal_3,jadwal_4,jadwal_5 FROM jadwal,a1 where a1.jadwal=jadwal.kode_jadwal group by jadwal");
              while ($p = mysqli_fetch_array($grafik)) {
        ?>
    <th><?php echo $p['jadwal_1']?></th>
    <th><?php echo $p['jadwal_2']?></th>
    <th><?php echo $p['jadwal_3']?></th>
    <th><?php echo $p['jadwal_4']?></th>
    <th><?php echo $p['jadwal_5']?></th>
    <?php } ?>
  </tr>

  <?php
               $grafik  = mysqli_query($connect, "SELECT main_machine, system, no_wo, status, work_type, failure_description, keterangan, kondisi_1,kondisi_2,kondisi_3,kondisi_4,kondisi_5 from a1");
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
    <td><?php echo $p['kondisi_1']?></td>
    <td><?php echo $p['kondisi_2']?></td>
    <td><?php echo $p['kondisi_3']?></td>
    <td><?php echo $p['kondisi_4']?></td>
    <td><?php echo $p['kondisi_5']?></td>
  </tr>
  
  <?php } ?>
  
  <tr>
  
  <td rowspan="3">Total System</td>

  <td colspan="6" >normal</td>
  <?php
               
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='0',1,null)) as jadwal_1 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_1']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='0',1,null)) as jadwal_2 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_2']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='0',1,null)) as jadwal_3 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_3']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='0',1,null)) as jadwal_4 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_4']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='0',1,null)) as jadwal_5 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_5']?></td>
    <?php } ?>
  </tr>

  <tr>
  <td colspan="6">abnormal</td>
  <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='1',1,null)) as jadwal_1 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_1']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='1',1,null)) as jadwal_2 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_2']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='1',1,null)) as jadwal_3 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_3']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='1',1,null)) as jadwal_4 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_4']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='1',1,null)) as jadwal_5 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_5']?></td>
    <?php } ?>
  </tr>
  <tr>
  <td colspan="6">fault</td>
  <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_1='2',1,null)) as jadwal_1 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_1']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_2='2',1,null)) as jadwal_2 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_2']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_3='2',1,null)) as jadwal_3 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_3']?></td>
    <?php } ?>

    <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_4='2',1,null)) as jadwal_4 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_4']?></td>
    <?php } ?>

       <?php
               $grafik  = mysqli_query($connect, "SELECT count(if(kondisi_5='2',1,null)) as jadwal_5 from a1");
               while ($p = mysqli_fetch_array($grafik)) {

  ?>
    <td><?php echo $p['jadwal_5']?></td>
    <?php } ?>
  </tr>
  
</table>

</body>
</html>