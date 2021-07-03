<?php
session_start();
include "koneksi.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<?php
include ('include/head.php')
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-building"></i> <span>SPK Supplier</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php
            include ('include/profile.php')
            ?>
            <!-- /menu profile quick info -->
            <br />

    <!-- sidebar menu -->
    <?php
            include ('include/sidebar.php')
            ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php
            include ('include/menu_footer.php')
            ?>

          </div>
        </div>

<!-- top navigation -->
<?php
            include ('include/top_navi.php')
            ?>
        <!-- /top navigation -->

        <?php
      error_reporting(E_ALL^(E_NOTICE|E_WARNING));
      $query1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A01'");
      $query2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A02'");
      $query3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A03'");
      $query4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A04'");
      $query5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A05'");
      $b1 = mysqli_fetch_array($query1);
      $b2 = mysqli_fetch_array($query2);
      $b3 = mysqli_fetch_array($query3);
      $b4 = mysqli_fetch_array($query4);
      $b5 = mysqli_fetch_array($query5);
    ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-book"></i> Alternatif </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hasil Hitung Alternatif</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                          <div class="x_content">

</br>

<div class="table-responsive">
<form action="hasil_alternatif_akhir.php" method="post">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
    <tr align="center">
                              <th>Kualitas</th>
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb1">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb2">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb3">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb4">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb5">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb6">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb7">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb8">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb9">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb10">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
    </tbody>
  </table>

  <br>
  
  <table class="table table-striped jambo_table bulk_action">
    <thead>
    <tr align="center">
                              <th scope="col">Harga</th>
                              <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb11">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb12">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb13">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb14">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb15">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb16">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb17">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb18">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb19">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb20">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
    </tbody>
  </table>
  <br>
  <table class="table table-striped jambo_table bulk_action">
    <thead>
    <tr align="center">
                              <th scope="col">Lokasi</th>
                              <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb21">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb22">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb23">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb24">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb25">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb26">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb27">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb28">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb29">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb30">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
    </tbody>
  </table>
  <br>
  <table class="table table-striped jambo_table bulk_action">
    <thead>
    <tr align="center">
                              <th scope="col">Fleksibilitas</th>
                              <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb31">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb32">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb33">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb34">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb35">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb36">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb37">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb38">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                              <td>
                                <select class="form-control" name="nb39">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb40">
                                <option></option>
                                <option value="1">1. Sama penting dengan</option>
                                <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                <option value="3">3. Sedikit lebih penting dari</option>
                                <option value="4">4. Mendekati lebih penting dari</option>
                                <option value="5">5. Lebih penting dari</option>
                                <option value="6">6. Mendekati sangat penting dari</option>
                                <option value="7">7. Sangat penting dari</option>
                                <option value="8">8. Mendekati mutlak dari</option>
                                <option value="9">9. Mutlak sangat penting dari</option>
                              </select>
                              </td>
                            </tr>
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
    </tbody>
  </table>
  <div class="form-group">
  <input class="btn btn-success" type="submit" name="simpan" value="Proses">
</div>
   </form>
</div>

                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>