<head>
<link rel="stylesheet" type="text/css" href="main.css">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<?php
$authid=$_POST['sub'];
$m=mysql_connect("localhost","root","");
if(!$m){

	echo"Not Connected to the Db";

}
else{
mysql_select_db('bookstores');
$q1="SELECT name FROM author WHERE $authid=sno";
$results=mysql_query($q1);
if(!$results){
		echo"Error in the query to db<br>";

	}
	else{
			if(mysql_num_rows($results)>0){
				$row = mysql_fetch_array($results);
				$auth_name=$row['name'];
				echo'
				<form action="change.php" method="POST">
				<div class="text-center container-fluid">
				<label>Chosen Author : '.$auth_name.'</label><br>
				<input type="text" name="nname"></input><br>
				<br>
				<button class="btn-warning btn-lg" name="sub" type="submit" value="'.$authid.'">Edit </button>
				</div>
				</form>';


			}
		}
}



?>