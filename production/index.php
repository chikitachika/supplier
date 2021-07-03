

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

<!--AHP-->
<div class = "row">
<div class="col-md-12 col-sm-12 ">
<div class="dashboard_graph">

<h2>Metode AHP</h2>


                  <p class = "justify">Analytic Hierarchy Process (AHP) merupakan suatu model pendukung 
                  keputusan yang dikembangkan oleh Thomas L. Saaty. Model pendukung keputusan ini akan 
                  menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki. 
                  Hirarki didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks 
                  dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level 
                  faktor, kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif.
                  </p>
                  <p class = "justify">AHP membantu para pengambil keputusan untuk memperoleh solusi terbaik dengan mendekomposisi 
                  permasalahan kompleks ke dalam bentuk yang lebih sederhana untuk kemudian melakukan sintesis 
                  terhadap berbagai faktor yang terlibat dalam permasalahan pengambilan keputusan tersebut. AHP 
                  mempertimbangkan aspek kualitatif dan kuantitatif dari suatu keputusan dan mengurangi kompleksitas 
                  suatu keputusan dengan membuat perbandingan satu-satu dari berbagai kriteria yang dipilih untuk 
                  kemudian mengolah dan memperoleh hasilnya.</p>
                  <p  class = "justify">AHP sering digunakan sebagai metode pemecahan masalah dibanding dengan metode yang lain karena 
                  alasan-alasan sebagai berikut :</p>
                  <ol class="justify">
				<li>Struktur yang berhirarki, sebagai konsekuesi dari kriteria yang  dipilih, sampai pada subkriteria yang paling dalam.</li>
				<li>Memperhitungkan validitas sampai dengan batas toleransi inkonsistensi berbagai kriteria dan alternatif yang dipilih oleh pengambil keputusan.</li>
				<li>Memperhitungkan daya tahan output analisis sensitivitas pengambilan keputusan.</li>
			</ol>
      <br>

			<h3 class="ui header">Tabel Tingkat Kepentingan menurut Saaty (1980)</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nilai Numerik</th>
						<th>Tingkat Kepentingan <em>(Preference)</em></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Sama pentingnya <em>(Equal Importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">2</td>
						<td>Sama hingga sedikit lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">4</td>
						<td>Sedikit lebih hingga jelas lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">5</td>
						<td>Jelas lebih penting <em>(Materially more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">6</td>
						<td>Jelas hingga sangat jelas lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">7</td>
						<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">8</td>
						<td>Sangat jelas hingga mutlak lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">9</td>
						<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
					</tr>
				</tbody>
			</table>
                

</div>
</div>
</div>

<!--AHP-->
<br>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 ">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3  bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />


          

                <!-- end of weather widget -->
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
