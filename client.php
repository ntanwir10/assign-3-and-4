<?php 
error_reporting(0);
	include('nav.php');
	
	require("connect.php");
	
	$result = mysql_query("SELECT * FROM client");

?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client</title>
</head>
<h2>Client</h2>
<body>
    <table  border="1" style="width:80%">
        <th>Cno</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Address</th>
        <th>Tel No</th>
        <th>Pref Type</th>
        <th>Max. Rent</th>
        
        <?php 
	   
	   		while ( $row = mysql_fetch_assoc($result) ){
	   			
				echo("<tr>");
				echo("<td>".$row['Cno']."</td>");
				echo("<td>".$row['Fname']."</td>");
				echo("<td>".$row['Lname']."</td>");
				echo("<td>".$row['Address']."</td>");
				echo("<td>".$row['Tel No']."</td>");
				echo("<td>".$row['Pref_Type']."</td>");
				echo("<td>".$row['Max_Rent']."</td>");
				echo("</tr>");
				
			}
		?>
    </table>
	
</body>
</html>
