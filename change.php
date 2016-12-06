<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php

$authid=$_POST['sub'];
$authname=$_POST['nname'];
echo"
<div class='text-center'>
the Author id is $authid<br>";
echo"The New Author Name is $authname";
$c=mysql_connect("localhost","root","");
mysql_select_db('bookstores');
if(!$c){

	echo"error in the connection to th database"; 
}
else{

$q1="UPDATE author SET name='$authname' WHERE sno='$authid'";
$results=mysql_query($q1);
if(!$results){

	echo"<br>error in the query";
}
else{
	echo"<br><b>Changes have been Updated</b>";


	echo'<br><a href="final.php">Finalpage</a>
	<br><a href="form1.html">Home Form Page</a>
	</div>';
}


}
?>