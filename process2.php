<?php

   

	$l=mysql_connect("localhost","root","");
	mysql_select_db('bookstores');
	if(!$l){

		echo"error in connection ";
	}
	else{
	$an=$_POST['cat'];
	$b=$_POST['bname'];
	echo "$an is the author id<br>$b is the Books Name";
}

	$q1="INSERT INTO books(sno,name,aid)VALUES('NULL','$b','$an')";
	$result=mysql_query($q1);
	if( !$result){
		echo"not successfull";
	}
	else
	{	
			   	
	header('Location:final.php/');
	}
	
?>



