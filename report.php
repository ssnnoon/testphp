<!DOCTYPE html>
<html lang="th">
<head>
  <title>BIB ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="ja/popper.min.ja"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<table class = "table table-hover">
	<thead>
	<tr>
	<th>Type</th>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Sex</th>
	<th>Age</th>
	<th>Address</th>
	<th>City</th>
	<th>Province</th>
	<th>Postcode</th>
	<th>Country</th>
	<th>Tell</th>
	<th>Email</th>
	<th>Emerperson</th>
	<th>Emerphone</th>
	<th>Size</th>
	</tr>
	</thead>
	<tbody>
	
<?php
include("conn/mysqlconn.php");
$sql = "SELECT * FROM userprofile1";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	
	while($row = mysqli_fetch_assoc($result))
	{
?>

	<tr>
	<td><?php echo $row["Type"];?></td>
	<td><?php echo $row["firstnameeng"];?></td>
	<td><?php echo $row["lastnameeng"];?></td>
	<td><?php echo $row["gender"];?></td>
	<td><?php echo $row["age"];?></td>
	<td><?php echo $row["Address"];?></td>
	<td><?php echo $row["city"];?></td>
	<td><?php echo $row["province"];?></td>
	<td><?php echo $row["postcode"];?></td>
	<td><?php echo $row["country"];?></td>
	<td><?php echo $row["phone"];?></td>
	<td><?php echo $row["Email"];?></td>
	<td><?php echo $row["emerperson"];?></td>
	<td><?php echo $row["emerphone"];?></td>
	<td><?php echo $row["size"];?></td>
	</tr>
	<?php
	}
}
	else{
		echo "0 results";
	}
?>
	</tbody>
	</table>
</body>
</html>