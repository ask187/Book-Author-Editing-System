<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php

mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db("bookstores") or die(mysql_error());

$query = "SELECT * FROM author";
$result = mysql_query($query);
if(!$result){

	echo"Error in the query";
}
?>
<form action="process2.php" method="POST"><legend class="text-center">Book Name</legend>
<br><br>
<div class="text-center container-fluid" style="border:3px solid green; padding:10px;margin:10%;border-radius: 10px;">
<select name="cat" class="form-control text-center">
<?php 
while ($row = mysql_fetch_array($result))
{
	$n=$row['sno'];
	echo"$n";
	    echo "<option value='".$row['sno']."'>".$row['name']."</option>";
}
?>       
</select><br><br><label class="control-label">Book Name</label>
<input type="text" class="form-control" name="bname"></input><br>
<button class="btn-primary btn-block">Submit</button>
</div>
</form>
</body>
