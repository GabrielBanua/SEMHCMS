<?php
require 'lib/session.php';

if($Position == "Doctor"){
  header('Location: index.php');
}
else if($Position == "Volunter"){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google" content="notranslate">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Laboratory Test</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

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
                          <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
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

                  <li class="sub-menu">
                      <a href="javascript:;" class="active">
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
						  <li class="active"><a  href="patient-reports-panel.php">Patient Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
						  <li><a  href="#">Schedule Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
						  <li><a href="view-inventory.php">View Inventory</a></li>
						  <li><a href="#">Inventory Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
                          <li class="sub-menu">
                              <a href="javascript:;">Add Lab Results</a>
                              <ul class="sub">
                                  <li><a href="add-lab-blood.php">Blood Chemistry</a></li>
								  <li><a href="add-lab-fecal.php">Fecalysis</a></li>
								  <li><a href="add-lab-hema.php">Hematology</a></li>
								  <li><a href="add-lab-urinal.php">Urinalysis</a></li>
                              </ul>
                          </li>
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="#">View Lab Records</a></li>
						  <li><a  href="#">Laboratory Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;">
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
						  <li><a  href="view-users.php">View Users</a></li>
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
                              Laboratory Test
                          </header>
                          <div class="panel-body">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-sm-2 control-label">Patient Name:</label>
									<div class="col-sm-4">
										<select class="select2-single">
											<option></option><!--for placeholder-->
											<option>Gabriel Banua</option>
											<option>Alessander Rebiato</option>
										</select>
									</div>
									<label class="col-sm-2 control-label">Date Taken:</label>
									<div class="col-sm-3">
										<input type="date" id="#" class="form-control"required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Medtech:</label>
									<div class="col-sm-4">
										<select class="select2-single">
											<option></option><!--for placeholder-->
											<option>Gabriel Banua</option>
											<option>Alessander Rebiato</option>
										</select>
									</div>
									<label class="col-sm-2 control-label">Pathologies:</label>
									<div class="col-sm-4">
										<select class="select2-single">
											<option></option><!--for placeholder-->
											<option>Gabriel Banua</option>
											<option>Alessander Rebiato</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Laboratory Type:</label>
									<div class="col-sm-4">
										<select id="labtype" class="select2-single">
											<option></option><!--for placeholder-->
											<option selected value="blood">Blood Chemistry</option>
											<option value="fecal">Fecalysis</option>
											<option  value="hema">Hematology</option>
											<option value="urinal">Urinalysis</option>
										</select>
									</div>
								</div>
								<hr>
								<!--- Blood Chemistry -->
								<div class="col-sm-12 blood test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Blood Chemistry</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th class="text-center">Examination:</th>
											  <th class="text-center" colspan="2">International Units:</th>
											  <th class="text-center" colspan="2">Conventional Units:</th>
										  </tr>
										  </thead>
										  <tbody>
										  <tr>
											  <td></td>
											  <td class="text-center"><b>RESULT</b></td>
											  <td class="text-center"><b>Reference Value<b></td>
											  <td class="text-center"><b>RESULT</b></td>
											  <td class="text-center"><b>Reference Value<b></td>
										  </tr>
										   <tr>
											  <td class="text-center"><b>BUN</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">2.5-6.4 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">7-8 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Cholesterol</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">3.87-6.71 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">150-230 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Creatinine</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">44.2-150.28 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">0.5-1.7 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>FBS</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">3.85-6.05 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">70-100 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>HDL-Cholesterol</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">M: 0.78-1.55 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">M:30-60 mg/dl</td>
										  </tr>
										  <tr>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">F:1.03 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">F:40-70 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>LDL-Cholesterol</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">1.56 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">60-210 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>2 Hrs Post-Prandial</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><6.60 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><120 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>RBS</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"> mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"> mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>SGOT/AST</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">M: 0-40 U/L</td>
											  <td rowspan="4"></td>
										  </tr>
										  <tr>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">F: 0-40 U/L</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>SGPT/ALT</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">M: 0-38 U/L</td>
										  </tr>
										  <tr>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">F: 0-38 U/L</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Triglyceride</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">0.7-2.8 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">61.0-248.5 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>Uric Acid</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">F: 143-357 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">2.4-6.0 mg/dl</td>
										  </tr>
										  <tr>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">M:202-416 mmol/L</td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center">3.4-7.0 mg/dl</td>
										  </tr>
										  </tbody>
									  </table>
								  </section>
							  </div>
							  <!--- Blood Chemistry End-->
							  <!--- Fecalysis -->
								<div class="col-sm-12 fecal test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Fecalysis</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th class="text-center" colspan="2">Microscopic Examination:</th>
											  <th class="text-center" colspan="3">Parasite:</th>
											  <th class="text-center" colspan="2">Flagellates:</th>
										  </tr>
										  </thead>
										  <tbody>
										  <tr>
											  <td class="text-center"><b>Color</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>Ascans</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>G.lambia<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Consistency</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>Hookworm</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>T.hominis<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Heinths</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>Trinchuris</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Hookworm</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="7"></td>
										  </tr>
										  <tr>
											  <th class="text-center" colspan="2">Chemical Test</th>
											  <th class="text-center" colspan="3">Amoba:</th>
											  <th class="text-center" colspan="2">Microscopic Examination</th>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>Occult Blood</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>E.histolylica:</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Pus Cells<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-right"><b>Cyst</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>RBC<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Troup</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>E.coil:</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Cyst</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Troup</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  </tbody>
									  </table>
								  </section>
							  </div>
							  <!--- Fecalysis End-->
							  <!--- Hematology -->
							  <div class="col-sm-12 hema test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Hematology</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th>CBC:</th>
										  </tr>
										  </thead>
										  <tr>
											  <th></th>
											  <th class="text-center">Results:</th>
											  <th></th>
											  <th class="text-center">Results:</th>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>HEMATOCRIT:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(M: 0.40-0.60)</td>
											  <td class="text-center"><b>WBC</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(5-10.0 X 10/L)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(F: 0.36-0.40)</td>
											  <td class="text-center"><b>RCB</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(4-5X 10/L)</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>HEMOGLOBIN:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(M: 140-170)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(F: 120-150)</td>
										  </tr>
										  <tr>
											  <th>DIFFERENTIAL COUNT:</th>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Segmeters</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0.35-0.65)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Stab:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0.02-0.04)</td>
										  </tr>
										   <tr>
											  <td class="text-center"><b>Eosinophils:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0-02)</td>
											  <td class="text-center"><b>Platelete Count:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(150-400x10^9/L)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Lymphocytes:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0.20-0.35)</td>
											  <td class="text-center"><b>Blood Type:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Monocytes:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0.02-0.04)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Basophils</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0-0.01)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Myelocytes:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Juveniles:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5">(0-1)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Remarks:</b></td>
											  <td class="text-center"><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  </tbody>
									  </table>
								  </section>
							  </div>
							  <!-- Hematology End -->
							  <!--- Urinal -->
								<div class="col-sm-12 urinal test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Urinalysis</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th class="text-center" colspan="2">PHYSICAL PROPERTIES:</th>
											  <th class="text-center" colspan="3">CELL: </th>
											  <th class="text-center" colspan="2">CRYSTAL:</th>
										  </tr>
										  </thead>
										  <tbody>
										  <tr>
											  <td class="text-center"><b>Color</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>Pus</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Amorphous Urates<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Transparency</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>RBC</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Amorphous Pos<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Pit</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>Reast</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Uric Acid<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Specific Gravity</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>Squamous</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Calcium Ceslate<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"</td>
											  <td class="text-center"><b>Renal</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Triple PO4<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"</td>
											  <td class="text-center"><b>Bacteria</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <th class="text-center" colspan="2">CHEMICAL TEST:</th>
											  <th class="text-center" colspan="3">CASTS: </th>
											  <th class="text-center" colspan="2">OTHERS:</th>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Reducing Sugar</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>DESA</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Mucus Thread<b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Protein</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td class="text-center"><b>Course Granular</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Remarks</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Fine Granular</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Pus</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>RBC</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Waty</b></td>
											  <td><input id="#" type="text" class="form-control" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   </tbody>
									  </table>
								  </section>
							  </div>
							  <!-- Urinal End -->
							</form>
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

    $(document).ready(function(){
        var Auth ='<?php echo $Position; ?>';
        if (Auth == "Admin") 
        {                       
            $('#Patient-li').show(); 
            $('#Schedule-li').show();
            $('#Inventory-li').show();
            $('#Laboratory-li').show();
            $('#Reports-li').show();
            $('#User-li').show();
            $('#Maintenance-li').show();
        }
        else if(Auth == "Doctor") {
            $('#User-li').hide();
            $('#Patient-li').hide();
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Laboratory-li').hide();
            $('#Inventory-li').hide();
        }
        else if(Auth == "Medtech") {
            $('#User-li').hide();
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Patient-li').hide();
            $('#Schedule-li').hide();
            $('#Inventory-li').hide();
        }
        });
	</script>
  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<script type="text/javascript" src="assets/select2/js/select2.min.js"></script>
	<script type="text/javascript">
	  $(document).ready(function () {
		  $(".select2-single").select2({placeholder: 'Please select option'});

		  $(".select2-multiple").select2();
	  });
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#labtype').change(function(){
			$(this).find("option:selected").each(function(){
				var optionValue = $(this).attr("value");
				if(optionValue){
					$(".test").not("." + optionValue).hide();
					$("." + optionValue).show();
				} else{
					$(".test").hide();
				}
			});
		}).change();
	});
	</script>
  </body>
</html>
