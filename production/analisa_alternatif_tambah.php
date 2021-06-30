<?php
error_reporting(0);
//untuk $koneksi
session_start();
include "koneksi.php";

///pemberian kode id secara otomatis
$carikode = mysqli_query($koneksi, "SELECT id_alternatif FROM tb_perb_alternatif") or die(mysql_error());
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = "A".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
  $kode_otomatis = "A01";
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/building.ico" type="image/ico" />

    <title>SPK | Supllier </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

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
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php
            include ('include/top_navi.php')
            ?>
        <!-- /top navigation -->
        
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
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
									<h2>Analisa Alternatif </h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="analisa_alternatif_tambah.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Perbandingan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input class="form-control" type="text" name="inpidalter" value="<?php echo $kode_otomatis; ?> " readonly>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Kriteria <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<select class="form-control" name="inpnmalter">
                    <option>- Pilih Nama Alternatif -</option>
                    <?php
                    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
                    while ($row = mysqli_fetch_array($hasil)) {
                      echo "<option value='".$row['nama_alternatif']."'>".$row['nama_alternatif']."</option>";
                    }
                     ?>
                  </select>
                  </select>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Perbandingan</label>
											<div class="col-md-6 col-sm-6 ">
                      <select class="form-control" name="inpperb">
                    <option>- Pilih Perbandingan -</option>
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
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Alternatif <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<select class="form-control" name="inpnmalter2">
                    <option>- Pilih Nama Alternatif -</option>
                    <?php
                    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
                    while ($row = mysqli_fetch_array($hasil)) {
                      echo "<option value='".$row['nama_alternatif']."'>".$row['nama_alternatif']."</option>";
                    }
                     ?>
                  </select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											<input class="btn btn-danger" type="button" name="" value="Batal" onClick="javascript:history.back()">
                  <input class="btn btn-info" type="reset" name="" value="Kosongkan">
                  <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                </div>
											</div>
										</div>

									</form>
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
      <?php
    //proses tambah data
    if (isset($_POST['simpan'])) {
      $id_alter    = $_POST['inpidalter'];
      $nm_banding  = $_POST['inpperb'];
      $alternatif1 = $_POST['inpnmalter'];
      $alternatif2 = $_POST['inpnmalter2'];

      if ($nm_banding==1) {
        $nilai = 1;
        $nama = "1. Sama penting dengan";
      } elseif ($nm_banding==2) {
        $nilai = 2;
        $nama = "2. Mendekati sedikit lebih penting dari";
      } elseif ($nm_banding==3) {
        $nilai = 3;
        $nama = "3. Sedikit lebih penting dari";
      } elseif ($nm_banding==4) {
        $nilai = 4;
        $nama = "4. Mendekati lebih penting dari";
      } elseif ($nm_banding==5) {
        $nilai = 5;
        $nama = "5. Lebih penting dari";
      } elseif ($nm_banding==6) {
        $nilai = 6;
        $nama = "6. Mendekati sangat penting dari";
      } elseif ($nm_banding==7) {
        $nilai = 7;
        $nama = "7. Sangat penting dari";
      } elseif ($nm_banding==8) {
        $nilai = 8;
        $nilai = "8. Mendekati mutlak dari";
      } elseif ($nm_banding==9) {
        $nilai = 9;
        $nama = "9. Mutlak sangat penting dari";
      }

      $sql   = "INSERT INTO tb_perb_alternatif (id_alternatif, nm_banding, nb_db, alternatif1, alternatif2)
                VALUES ('$id_alter', '$nama', '$nilai', '$alternatif1', '$alternatif2')";
      $query = mysqli_query($koneksi, $sql);

      if ($query) {
        echo "<script>window.alert('Alternatif Berhasil ditambahkan');
              window.location=(href='analisa_alternatif.php')</script>";
      }
    }
     ?>
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
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="../vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="../vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="../vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="../vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

</body></html>
