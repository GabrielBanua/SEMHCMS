<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$qjan = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Jan' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Jan' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Feb' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Feb' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Mar' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Mar' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Apr' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Apr' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT CASE WHEN dispense.MONTH = 'May' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'May' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Jun' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Jun' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Jul' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Jul' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Aug' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Aug' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Sep' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Sep' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Oct' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Oct' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Nov' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Nov' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT CASE WHEN dispense.MONTH = 'Dec' AND dispense.YEAR = '$year' THEN SUM(DISP_QTY) ELSE 0 END AS total FROM dispense WHERE dispense.MONTH = 'Dec' AND dispense.MONTH IS NOT NULL AND dispense.YEAR ='$year' AND dispense.YEAR IS NOT NULL") or die(mysqli_error());
$fdec = $qdec->fetch_array();


?>
<script type="text/javascript">
	window.onload = function() {
		$("#medicines_dispensed").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Saint Ezekiel Moreno Inventory", 
			exportEnabled: true,
			title: { 
				text: "St. Ezekiel Moreno Health Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Monthly Dispensation of Medicines - Year <?php echo $year?>"
				}
			],
			axisY: { 
				title: "Registration" 
			}, 
			legend :{ 
				verticalAlign: "center", 
				horizontalAlign: "left",
				cursor: "pointer",

			}, 
			data: [ 
				{ 
					type: "doughnut", 
					showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					dataPoints: [ 
						{ label: "January",  y: 
						 <?php
	if($fjan == ""){
		echo 0;
	}else{
		echo $fjan['total'];
	}	
						 ?>, legendText: "January"},

						{ label: "February",  y: 
						 <?php 
						 if($ffeb == ""){
							 echo 0;
						 }else{
							 echo $ffeb['total'];
						 }	
						 ?>, legendText: "February"},

						{ label: "March",  y: 
						 <?php 
						 if($fmar == ""){
							 echo 0;
						 }else{
							 echo $fmar['total'];
						 }	
						 ?>, legendText: "March"}, 

						{ label: "May",  y: 
						 <?php 
						 if($fmay == ""){
							 echo 0;
						 }else{
							 echo $fmay['total'];
						 }	
						 ?>, legendText: "May"},

						{ label: "June",  y: 
						 <?php 
						 if($fjun == ""){
							 echo 0;
						 }else{
							 echo $fjun['total'];
						 }	
						 ?>, legendText: "June"}, 

						{ label: "July",  y: 
						 <?php 
						 if($fjul == ""){
							 echo 0;
						 }else{
							 echo $fjul['total'];
						 }	
						 ?>, legendText: "July"}, 

						{ label: "August",  y: 
						 <?php 
						 if($faug == ""){
							 echo 0;
						 }else{
							 echo $faug['total'];
						 }	
						 ?>, legendText: "August"},
						
						{ label: "September",  y: 
						 <?php 
						 if($fsep == ""){
							 echo 0;
						 }else{
							 echo $fsep['total'];
						 }	
						 ?>, legendText: "September"},
						
						{ label: "October",  y: 
						 <?php 
						 if($foct == ""){
							 echo 0;
						 }else{
							 echo $foct['total'];
						 }	
						 ?>, legendText: "October"},
						
						{ label: "November",  y: 
						 <?php 
						 if($fnov == ""){
							 echo 0;
						 }else{
							 echo $fnov['total'];
						 }	
						 ?>, legendText: "November"},
						
						{ label: "December",  y: 
						 <?php 
						 if($fdec == ""){
							 echo 0;
						 }else{
							 echo $fdec['total'];
						 }	
						 ?>, legendText: "December"}
					] 
				} 
			] 
		}); 
	} 
</script>