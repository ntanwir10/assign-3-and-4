<?php 
	error_reporting(0);
	include('nav.php');

	require("connect.php");
	
	$result = mysql_query("SELECT * FROM viewing");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Viewing</title>
</head>
<h2>Viewing</h2>
<body>
    <table  border="1" style="width:80%">
        <th>Cno</th>
        <th>Pno</th>
        <th>Date</th>
        <th>Comment</th>
   		<?php 
	   
	   		while ( $row = mysql_fetch_assoc($result)){
				
	   			
				echo("<tr>");
				echo("<td>".$row['Cno']."</td>");
				echo("<td>".$row['Pno']."</td>");
				echo("<td>".$row['Date']."</td>");
				echo("<td>".$row['Comment']."</td>");
				echo("</tr>");
				
			}
		?>
    </table>
	
</body>
</html>
