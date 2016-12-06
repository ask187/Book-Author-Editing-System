<?php
echo'
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
';
mysql_connect("localhost","root","");
$q2=mysql_select_db('bookstores');

if(!$q2){

	echo"didnt connect";

}
else{

  $q2="SELECT author.sno AS ID,author.name, GROUP_CONCAT(DISTINCT books.name ORDER BY books.aid SEPARATOR '<br> ') AS BOOK FROM books INNER JOIN author ON author.sno = books.aid GROUP BY books.aid";

$results = mysql_query($q2);
	if(!$results){

		echo"results is error";
	}
	else{
	echo '<table class="table table-bordered table-hover table-responsive">
    <tr><th>SNO</th><th>Author Name</th><th>Book Name</th><th>Edit Author</th>
    </tr>';
	if(mysql_num_rows($results)>0)
{
   
while ($row = mysql_fetch_array($results)) {
   $id=$row['ID'];
       echo '
    <form action="edit.php" method="POST">
    
        <tr>
            <td>'.$row['ID'].'</td>
            <td><b>'.$row['name'].'</b></td>
            <td>'.$row['BOOK'].'</td>
            <td><button class="btn-warning btn-lg" name="sub" type="submit" value="'.$id.'">Edit </button></td>
        </tr>';

}

echo '
</form>
</table>';

}
}
}
?>