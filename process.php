<?php
   

	$l=mysql_connect("localhost","root","");
	mysql_select_db('bookstores');
	if(!$l){

		echo"error in connection ";
	}
	else{
	$a=$_POST['auth'];
	echo "$a is the author name";
	$q1="INSERT INTO author(sno,name)VALUES('NULL','$a')";
	$result=mysql_query($q1);
	if( !$result){
		echo"not successfull";
	}
	else
	{	
			   	
	echo"Success!";
		exit();		 
	}
	}
	





?>