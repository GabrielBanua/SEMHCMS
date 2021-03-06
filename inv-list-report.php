<?php
require 'lib/session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google" content="notranslate">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Inventory List Report</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/invoice-print.css" rel="stylesheet" media="print">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >St. Ezekiel Moreno<span>|Healthcare Management System</span></a>
          <!--logo end-->
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">
                          <span class="username"><b><?php echo $UserN; ?></b></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                          <li><a onclick="logout()"><i class="icon-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.php">
                          <i class="icon-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu" id="Patient-li"> 
                      <a href="javascript:;">
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
						  <li><a  href="patient-reports-panel.php">Patient Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;">
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
						  <li><a  href="sched-reports-panel">Schedule Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Inventory-li">
                      <a href="javascript:;" class="active">
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
						  <li><a href="view-inventory.php">View Inventory</a></li>
						  <li class="active"><a href="inv-reports-panel.php">Inventory Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Laboratory-li">
                      <a href="javascript:;">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="labview.php">View Lab Records</a></li>
						  <li><a  href="lab-reports-panel.php">Laboratory Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;">
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
						  <li><a  href="view-users.php">Manage Users</a></li>
						  <li><a  href="systemlogs.php">System Logs</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Inventory List Report
							  <div class="pull-right">
							  <a class="btn btn-success btn-sm" onclick="javascript:window.print();"><i class="icon-print"></i> Print </a>
							  </div>
                          </header>
                          <div class="panel-body">
                          <div class="#">
                                <?php
                                    $query = mysql_query("SELECT *, CONCAT(Position,' ',Firstname,' ',Lastname) AS Rank FROM users Where User_id = '$ID'");
                                    $result = mysql_fetch_array($query);
                                ?>
                                
								<div class="pull-right"><span>Date : <?php echo date('m-d-y');?></span></div><br> <!--current date is based on server, main unit must be set up correctly -->
								  <div class="pull-right"><span class = "username">Printed By: <?php echo $result['Rank'];?></span></div><br>
							  <div class="text-center corporate-id">
                                  
                                  <img src="img/form-header.jpg" alt="" style="height:100px">
								  <h3>Inventory List of <?php echo date("Y");?></h3>   
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
                              <tr>
                                  <th>Type</th>
                                  <th>Generic Name</th>
                                  <th>Brand</th>
                                  <th>Dosage Form</th>
                                  <th>Expiry Date</th>
								  <th>Status</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                $query = "SELECT * FROM `medicine`,`inventory` WHERE medicine.MEDICINE_ID = inventory.MEDICINE_ID";
                                $result = mysql_query($query);
                                
                                while($r = $row = mysql_fetch_array($result)){
                                ?>
                              <tr>
                                  <td><?php echo $r['MEDICINE_TYPE'];?></td>
                                  <td><?php echo $r['MEDICINE_GNAME'];?></td>
                                  <td><?php echo $r['MEDICINE_BNAME'];?></td>
                                  <td><?php echo $r['MEDICINE_DFORM'];?></td>
								  <td><?php echo $r['INV_EXPD'];?></td>
								  <td><?php $Qty = $row['INV_QTY_HIST'] / '2'; $QtyInitial = $Qty / '2'; $QtyStatus = $Qty + $QtyInitial; if($row['INV_QTY'] > $QtyStatus){ echo "<span class='label label-primary label-mini'>Full</span>";}if($row['INV_QTY'] >= $Qty && $row['INV_QTY'] <= $QtyStatus){ echo "<span class='label label-success label-mini'>Average</span>";}else if($row['INV_QTY'] < $Qty){ echo "<span class='label label-danger label-mini'>Low</span>";} ?></td>
                              </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                          </table>
                          <div class="row">
                          <?php
                            $totaltabs = "SELECT COUNT(INV_QTY) AS Total_Tabs FROM `inventory` , `medicine` ON medicine.MEDICINE_ID = inventory.MEDICINE_ID where MEDICINE_DFORM = 'tablet'";
                            $tmeds = mysql_fetch_array($totaltabs);

                            $totalsyrup = "SELECT COUNT(INV_QTY) AS Total_syr FROM `inventory` , `medicine` on medicine.MEDICINE_ID = inventory.MEDICINE_ID WHERE MEDICINE_DFORM ='Syrup' ";
                            $tmedsyrup = mysql_fetch_array($totalsyrup);
                            while($rw = mysql_fetch_array($totalsyrup,$tmedsyrup)){
                            ?>
                              <div class="col-lg-4 invoice-block pull-right">
                                  <ul class="unstyled amounts">
                                      <li><strong>Tablets:</strong>11<?php echo $tmeds['Total_Tabs']; ?></li>
                                      <li><strong>Syrup :</strong> 1<?php echo $tmedsyrup['tmedsyrup']; ?></li>
                                      <li><strong>Inventory Total:</strong> 12</li>
                                     </ul>
                              </div>
                          </div>
                          <?php
                                }
                              ?>
                      </div>
                    </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017-2018 &copy; Primal Tinkers.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/respond.min.js" ></script>
	<script>
		$('.btn').on('click', function() {
			var $this = $(this);
		  $this.button('loading');
			setTimeout(function() {
			   $this.button('reset');
		   }, 8000);
		});
	</script>
    
  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <?php
    include "lib/User-Accesslvl.php";
    include 'lib/logout.script.php';
    ?>
  </body>
</html>
