<?php 
	error_reporting(0);
	include('nav.php');
	require("connect.php");
	
	$result = mysql_query("SELECT * FROM property_for_rent");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Property for Rent</title>
</head>
<h2>Property for Rent</h2>
<body>
    <table  border="1" style="width:80%">
        <th>Pno</th>
        <th>Street</th>
        <th>Area</th>
        <th>City</th>
        <th>Pcode</th>
        <th>Type</th>
        <th>Rooms</th>
        <th>Rent</th>
        <th>Ono</th>
        <th>Sno</th>
        <th>Bno</th>
        
        <?php 
	   
	   		while ( $row = mysql_fetch_assoc($result)){
	   			
				echo("<tr>");
				echo("<td>".$row['Pno']."</td>");
				echo("<td>".$row['Street']."</td>");
				echo("<td>".$row['Area']."</td>");
				echo("<td>".$row['City']."</td>");
				echo("<td>".$row['Pcode']."</td>");
				echo("<td>".$row['Type']."</td>");
				echo("<td>".$row['Rooms']."</td>");
				echo("<td>".$row['Rent']."</td>");
				echo("<td>".$row['Ono']."</td>");
				echo("<td>".$row['Sno']."</td>");
				echo("<td>".$row['Bno']."</td>");

				echo("</tr>");
				
			}
		?>
    </table>
	
</body>
</html>
