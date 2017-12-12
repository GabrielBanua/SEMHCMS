<!DOCTYPE html>
<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
  $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName from patient");
  $stmt->execute();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Patient List</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
  	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  	<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
  	<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
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

                  <li class="sub-menu" id="Patient-li">
                      <a href="javascript:;"class="active" >
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li class="active"><a  href="view-patients.php">View Patients</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;" >
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Inventory-li">
                      <a href="javascript:;" >
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                          <li><a href="add-inventory.php">Add Inventory</a></li>
							<li><a href="add-medicines.php">Add Medicines</a></li>
                            <li><a href="view-inventory.php">View Inventory</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Laboratory-li">
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
                      </ul>
          </li>
				  
				  <li class="sub-menu" id="User-li">
                      <a href="javascript:;" >
                          <i class="icon-group"></i>
                          <span>Users Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-user.php">Add New User</a></li>
                          <li><a  href="view-users.php">View Users</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Reports-li">
                        <a href="javascript:;">
                          <i class="icon-print"></i>
                          <span>Reports</span>
                      </a>
                        <ul class="sub">
                            <li><a href="reports.php">Generate Reports</a></li>
                        </ul>
                    </li>
				  
				  <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;" >
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
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
                              List of Patients
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                  <a class="btn btn-success" href="add-patient.php">Add Patient</a>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th width="90">Patient No.</th>
                                          <th width="150">Full Name</th>
                                          <th width="100">Gender</th>
                                          <th width="80">Type</th>
                                          <th width="150">Address</th>
                                          <th width="90">Contact No.</th>
                                          <th width="80" class="hidden-phone">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
<?php
while($row = $stmt->fetch()){
?>
                                        <tr>
                                          <td><p>P<?php echo $row['P_ID'] ?></p></td>
                                          <td><?php echo $row['FullName'] ?></td>
                                          <td><?php echo $row['P_GNDR'] ?></td>
                                          <td><?php echo $row['P_TYPE'] ?></td>
                                          <td><?php echo $row['P_ADD'] ?></td>
                                          <td>+639<?php echo $row['P_CN'] ?></td>
                                          <td align="center">
                                            <a class="btn btn-primary btn-xs" href="view-patient-profile.php?VID=<?php echo $row['P_ID'] ?>"><i class="icon-eye-open"></i></a>
                                            <a class="btn btn-success btn-xs" data-toggle="modal" href="#editpatient-<?php echo $row['P_ID'] ?>"><i class="icon-pencil"></i></a>
<!-- Register User Start  MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['P_ID'] ?>" role="dialog" tabindex="-1" id="editpatient-<?php echo $row['P_ID'] ?>" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel-<?php echo $row['P_ID'] ?>">Edit Patient Profile</h4>
          </div>
          <div class="modal-body">
              <header class="panel-heading tab-bg-dark-navy-blue ">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a data-toggle="tab" href="#basicinfo">Patient Basic Info</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#healthissue">Health Issue</a>
                    </li>
                  </ul>
              </header>
            <div class="panel-body">
              <div class="tab-content">
                <div id="basicinfo" class="tab-pane active">
                              <form action="#" class="form-horizontal tasi-form">
                  <div class="form-group">
                    <div class="col-md-3">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                              <div>
                            <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                            <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                              <input type="file" class="default" />
                            </span>
                          <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Patient Id</label>
                      <div class="col-lg-4">
                        <input type="text" name="P_ID" id="P_ID" value="P000<?php echo $row['P_ID'] ?>" readonly class="form_datetime form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Date Registered:</label>
                      <div class="col-lg-4">
                        <input id=" DATE_REG" name="DATE_REG" type="text" value="<?php echo $row['DATE_REG'] ?>" readonly class="form_datetime form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                      <div class="col-lg-6">
                        <input id="P_FNAME" name="P_FNAME" type="text" class="form-control" value="<?php echo $row['P_FNAME'] ?>" autofocus required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Middle Name</label>
                      <div class="col-lg-6">
                        <input id="P_MNAME" name="P_MNAME" type="text" class="form-control" value="<?php echo $row['P_MNAME'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Last Name</label>
                      <div class="col-lg-6">
                        <input id="P_LNAME" name="P_LNAME" type="text" class="form-control" value="<?php echo $row['P_LNAME'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                      <div class="col-lg-6">
                        <input id="P_ADD" name="P_ADD" type="text" class="form-control" value="<?php echo $row['P_ADD'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_GNDR" id="P_GNDR" required>
                          <option value="-None-"<?php
                            if ($row['P_GNDR'] == "-None-") { echo " selected"; }?>>-None-</option>
                          <option value="Male"<?php
                            if ($row['P_GNDR'] == "Male") { echo " selected"; }?>>Male</option>
                          <option value="Female"<?php
                            if ($row['P_GNDR'] == "Female") { echo " selected"; }?>>Female</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Birthdate</label>
                      <div class="col-lg-6">
                        <input id="P_BDATE" name="P_BDATE" type="text" class="form-control" value="<?php echo $row['P_BDATE'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Age</label>
                      <div class="col-lg-2">
                        <input id="P_AGE" name="P_AGE" type="text" class="form-control" value="<?php echo $row['P_AGE'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Category</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_TYPE" id="P_TYPE" required>
                          <option value="-None-"<?php
                            if ($row['P_TYPE'] == "-None-") { echo " selected"; }?>>-None-</option>
                          <option value="Adult"<?php
                            if ($row['P_TYPE'] == "Adult") { echo " selected"; }?>>Adult</option>
                          <option value="Children"<?php
                            if ($row['P_TYPE'] == "Children") { echo " selected"; }?>>Children</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Occupation</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_OCCU" id="P_OCCU" required>
                          <option value="-None-"<?php
                            if ($row['P_OCCU'] == "-None-") { echo " selected"; }?>>-None-</option>
                          <option value="Student"<?php
                            if ($row['P_OCCU'] == "Student") { echo " selected"; }?>>Student</option>
                          <option value="Government Employee"<?php
                            if ($row['P_OCCU'] == "Government Employee") { echo " selected"; }?>>Government Employee</option>
                          <option value="Senior Citizen"<?php
                            if ($row['P_OCCU'] == "Senior Citizen") { echo " selected"; }?>>Senior Citizen</option>
                          <option value="Lawyer"<?php
                            if ($row['P_OCCU'] == "Lawyer") { echo " selected"; }?>>Lawyer</option>
                          <option value="Director"<?php
                            if ($row['P_OCCU'] == "Director") { echo " selected"; }?>>Director</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Temperature (Celcius)</label>
                      <div class="col-lg-6">
                        <input id="P_TEMP" name="P_TEMP" type="text" class="form-control" value="<?php echo $row['P_TEMP'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Weight (Kg)</label>
                      <div class="col-lg-6">
                        <input id="P_WGHT" name="P_WGHT" type="text" class="form-control" value="<?php echo $row['P_WGHT'] ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Height (cm)</label>
                      <div class="col-lg-6">
                        <input id="P_HGHT" name="P_HGHT" type="text" class="form-control" value="<?php echo $row['P_HGHT'] ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Contact Number (+639)</label>
                      <div class="col-lg-6">
                        <input id="P_CN" name="P_CN" type="text" class="form-control" value="<?php echo $row['P_CN'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Religion</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_REL" id="P_REL" required>
                          <option value="-None-"<?php
                            if ($row['P_REL'] == "-None-") { echo " selected"; }?>>-None-</option>
                          <option value="Catholic"<?php
                            if ($row['P_REL'] == "Catholic") { echo " selected"; }?>>Catholic</option>
                          <option value="Muslim"<?php
                            if ($row['P_REL'] == "Muslim") { echo " selected"; }?>>Muslim</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Civil Status</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_CVL_STAT" id="P_CVL_STAT" required>
                          <option value="Single"<?php
                            if ($row['P_CVL_STAT'] == "Single") { echo " selected"; }?>>Single</option>
                          <option value="Widowed"<?php
                            if ($row['P_CVL_STAT'] == "Widowed") { echo " selected"; }?>>Widowed</option>
                          <option value="Married"<?php
                            if ($row['P_CVL_STAT'] == "Married") { echo " selected"; }?>>Married</option>
                          <option value="Divorced"<?php
                            if ($row['P_CVL_STAT'] == "Divorced") { echo " selected"; }?>>Divorced</option>
                          <option value="Separated"<?php
                            if ($row['P_CVL_STAT'] == "Separated") { echo " selected"; }?>>Separated</option>
                        </select>
                      </div>
                  </div>
                </form>
              </div>
              <div id="healthissue" class="tab-pane">
                <form role="form" class="form-horizontal tasi-form">
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.5 Dominant Hand:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="DOM_HAND" id="DOM_HAND">
                          <option hidden>-None-</option>
                          <option>Left</option>
                          <option>Right</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.6 How do you rate Physical Health:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="PHY_HEALTH" id="PHY_HEALTH">
                          <option hidden>-None-</option>
                          <option>Poor</option>
                          <option>Good</option>
                          <option>Very Good</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.7 How do you rate your health Mental and Emotional in the past Month?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="MENT_EMO_HEAl" id="PHY_HEALTH">
                          <option hidden>-None-</option>
                          <option>Poor</option>
                          <option>Good</option>
                          <option>Very Good</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.8 Do you currently have any disease(s) or Disorder(s)?:</label>
                      <div class="col-lg-6">
                        <input id="DISE_DISO" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.9 Did you ever have any significant injuries that impact on your level of functioning?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="SIG_INJ" id="SIG_INJ">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.10 have you been hospitalized in the last year?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="HPTL" id="HPTL">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.11 are you taking medication?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="MEDCT" id="MEDCT">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.12 Do you smoke?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="SMOKE" id="SMOKE">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.13 Do you consume Alcohol or drugs?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="ALCO_DRUGS" id="ALCO_DRUGS">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.14 Do you use Assistive Device?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="ASSIST_DEV" id="ASSIST_DEV">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.15 Do you have any person assisting you?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="PERS_ASSIS" id="PERS_ASSIST">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.16 Are you receiving any land of treatment for you Health?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="TRMT" id="TRMT">
                          <option hidden>-None-</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.17 Additional Significant on your past and present health?:</label>
                      <div class="col-lg-6">
                        <input id="PP_HEATH" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.18 In the Past Month, cut back your usual activies because of your health condition?:</label>
                      <div class="col-lg-6">
                        <input id="CB_HEALTH_COND" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.19 In the Past Month, have you been totally unable to carry out your usual activities?:</label>
                       <div class="col-lg-6">
                         <input id="TU_HEALTH_COND" type="text" class="form-control" placeholder="">
                       </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">B.2 Years of Formal Education:</label>
                      <div class="col-lg-6">
                        <input id="YEARS_FE" type="text" class="form-control">
                      </div>                    
                  </div>
                  <div class="form-group">
                      <label class="col-md-4 control-label">B.3 Marital Status:</label>
                      <div class="col-lg-6">
                        <input name="MARITAL_STAT" id="MARITAL_STAT" type="text" class="form-control" placeholder="">
                      </div>                        
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" onclick="addNewPatient()">Save</button>
                  </div>
      </div>
    </div>
  </div>
<!--MODAL END-->
      </td>
    </tr>
<?php
  }
?>
                                      </tbody>
                                    </table>
                                </div>
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
              <a class="go-top">
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
	
	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script src="js/advanced-form-components.js"></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 10, "desc" ]]
              } );
          } );
      </script>
      <script>
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
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Laboratory-li').hide();
            $('#Inventory-li').hide();
        }
        }); 
    </script>
</body>
</html>
