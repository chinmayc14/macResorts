
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>success	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
			<nav class="navbar-default navbar-side" role="navigation">
					<div class="sidebar-collapse">
							<ul class="nav" id="main-menu">

									<li>
											<a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
									</li>

				</ul>

					</div>

			</nav>

        <!--/. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				<?php
						include ('db.php');

				?>

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">

							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<button class="btn btn-default" type="button">
										Room Bookings  <span class="badge"></span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">

                                    <tbody>

									<?php

									$msql = "SELECT * FROM `roombook` order by id DESC limit 1";
									$mre = mysqli_query($con,$msql);

									while($mrow=mysqli_fetch_array($mre) )
									{
										$br = $mrow['stat'];

											$fid = $mrow['id'];

										echo"<div class='col-md-3 col-sm-12 col-xs-12'>
												<div class='panel panel-primary text-center no-boder bg-color-blue'>
													<div class='panel-body'>
														<i class='fa fa-users fa-5x'></i>
														<h3>".$mrow['FName']."</h3>
													</div>
													<div class='panel-footer back-footer-blue'>
													<a href=show.php?sid=".$fid ."><button  class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
												Show
												</button></a>
														".$mrow['TRoom']."
													</div>
												</div>
										</div>";


									}

									?>

                                    </tbody>
                                </table>

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


				<!-- DEOMO-->





                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
