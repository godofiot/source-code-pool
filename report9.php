

<?php	
$mo = 7;
$dd = 29; 
$yyyy = 2017;
$link = mysqli_connect("10.48.21.14", "avayaadmin", "Sxdc123456", "avayadb");

?>


<?php #1am
########riyadh###############
$result = mysqli_query($link, "SELECT * FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = 1 order by id limit 1");
$t11 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT * FROM logs where yyyy = '$yyyy' and  sitename = 'jeddah' and mo = '$mo' and dd = '$dd' and hour = 1 order by id limit 1");
$t21 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT * FROM logs where yyyy = '$yyyy' and  sitename = 'makkah' and mo = '$mo' and dd = '$dd' and hour = 1 order by id limit 1");
$t31 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT * FROM logs where yyyy = '$yyyy' and  sitename = 'taif' and mo = '$mo' and dd = '$dd' and hour = 1 order by id limit 1");
$t41 = mysqli_num_rows($result);
#############################
?>





<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Avaya Report 1001</h2>
  <p>24 Hours Detail Call Log Report</p>                                                                                      
  <div class="table-responsive">          
  <!--<table class="table">-->
  <table class="table table-bordered">
 

	<thead>
	<tr>
	<th colspan="1">Date:<?php echo " $mo/$dd/$yyyy"; ?></th>
	<th colspan="4">Business Unit</th>		
	</tr>	  	  
    </thead>
 
 


 <thead>
      <tr class="table-active">
        <th>Time</th>
		<th>Riyadh</th>
        <th>Jeddah</th>
        <th>Makkah</th>
        <th>Taif</th>
		
      </tr>
    </thead>
    <tbody>

		<tr>
			<td>1:00-1:59</td>
			<td><?php echo $t11; ?></td>
			<td><?php echo $t21; ?></td>
			<td><?php echo $t31; ?></td>			
			<td><?php echo $t41; ?></td>						
		</tr>
	    

		
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
