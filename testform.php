<?php
include"php/includes/templates/mysqlconnect.php";
?>
<select name="Learning Area"style="width:250px;">
<option value="" selected="">Choose Learning Area</option>
<?php
foreach($dbconnect->query('SELECT KPIMainHeading from KPIMain') as $KPIMain) {
	?>
	<option value="<?php print $KPIMain['KPIMainHeading']; ?>">
	<?php echo $KPIMain['KPIMainHeading'];?>
	</option>
	<?php } ?>
	</select>
<br/><br/>
<select name="Age Band"style="width:250px;">
<option value="" selected="">Choose Age Band</option>
<?php
$query=$dbconnect->query('SELECT * from KPIBand');
while ($row=$query->fetch(PDO::FETCH_ASSOC)){
	?>
	<option value="<?php print $row['KPIBandLower'];?>"> Age Band:
	<?php echo $row['KPIBandLower'];?> - <?php print $row['KPIBandUpper']?>
	</option>
	<?php } ?>
	</select>
<br/><br/>
<select name="Pupil Name"style="width:250px;">
<option value="" selected="">Choose Pupil</option>
<?php
$query=$dbconnect->query('SELECT * from Pupil order by FirstName');
while ($row=$query->fetch(PDO::FETCH_ASSOC)){
	?>
	<option value="<?php print $row['FirstName'];?>"> Pupil:
	<?php echo $row['FirstName'];?> <?php print $row['LastName']?>
	</option>
	<?php } ?>
	</select>
<br/><br/>
<select name="Ethnicity"style="width:250px;">
<option value="" selected="">Choose Ethnicity</option>
<?php
foreach($dbconnect->query('SELECT EthnicGroup from EthnicGroup order by EthnicGroup') as $Ethnicity) {
	?>
	<option value="<?php print $Ethnicity['EthnicGroup']; ?>">
	<?php echo $Ethnicity['EthnicGroup'];?>
	</option>
	<?php } ?>
	</select>
<br/><br/>
This next piece of code will output the results of the selection - assuming that the database is correct, of course!
<br/><br/>
<?php 
if($_POST['value'] == 'Doe')) { 
    // query to get all Doe records 
    $query = "SELECT * FROM names WHERE name='Doe'"; 
} 
elseif($_POST['value'] == 'Earl') { 
    // query to get all Earl records 
    $query = "SELECT * FROM names WHERE name='Earl'"; 
} else { 
    // query to get all records 
    $query = "SELECT * FROM names"; 
} 
$sql = mysql_query($query); 

// print the names... 
?>


