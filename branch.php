<?php 
	
	error_reporting(0);
	include('nav.php');
	require("connect.php");
	
	
	
	
	$result = mysql_query("SELECT * FROM branch");
	
	if(isset($_POST['update'])){
	$UpdateQuery = "UPDATE branch SET 
	Bno='$_POST[Bno]', 
	Street='$_POST[Street]',
	Area='$_POST[Area]'
	City='$_POST[City]', 
	Pcode='$_POST[Pcode]',
	Tel_No='$_POST[Tel_No]' 
	Fax_No='$_POST[Fax_No]' 

	 WHERE Bno='$_POST[hidden]', Bno='$_POST[hidden]',
	 Street='$_POST[hidden], 'Area='$_POST[hidden],
	 'City='$_POST[hidden],'Pcode='$_POST[hidden],
	 'Tel_No='$_POST[hidden]',Fax_No='$_POST[hidden]'";               
	mysql_query($UpdateQuery, $conn);
	};

	if(isset($_POST['delete'])){
		$DeleteQuery = "DELETE FROM branch WHERE Bno='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Street='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Area='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE City='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Pcode='$_POST[hidden]'";    
		$DeleteQuery = "DELETE FROM branch WHERE Tel_No='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Fax_No='$_POST[hidden]'";
		      
		mysql_query($DeleteQuery, $conn);
	};

	if(isset($_POST['add'])){
			$AddQuery = "INSERT INTO branch (Bno, Street, Area, City, Pcode, Tel No, Fax No) VALUES 	('$_POST[Bno]','$_POST[Street]','$_POST[Area]' ,('$_POST[City]','$_POST[Pcode]','$_POST[Tel_No]','$_POST[Fax_No]')";         
			mysql_query($AddQuery, $conn);
	};
		

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Branch</title>
</head>
<h2>Branch</h2> 
<?php 
echo "<form action=branch.php method=post>";
                    
					echo" <p>Search</p> <input type=text name=search placeholder= search maxlength=30>";
					echo" <select name=filter>";
					echo" <option value=Bno>Bno";echo"</option>";
					echo" <option value=Street>Street";echo"</option>";
					echo" <option value=Area>Area";echo"</option>";
					echo" <option value=City>City";echo"</option>";
					echo" <option value=Pcode>Pcode";echo"</option>";
					echo" <option value=Tel_No>Tel_no";echo"</option>";
					echo" <option value=Fax_No>Fax_No";echo"</option>";
					echo"</select>";
										
					
                    echo"</form>";
?>
<body>
    <div class= "wrapper">
        <table  border="1" style="width:80%" >
            <th>Bno</th>
            <th>Street</th>
            <th>Area</th>
            <th>City</th>
            <th>Pcode</th>
            <th>Tel No</th>
            <th>Fax No</th>
           
           <?php 
           
                while ( $row = mysql_fetch_assoc($result) ){
                    echo "<form action=branch.php method=post>";
                    echo"<tr>";
                    echo"<td>". "<input type=text name=Bno value=" .$row['Bno'] . " </td>";
                    echo"<td>". "<input type=text name=Street value=" .$row['Street'] . " </td>";
                    echo"<td>". "<input type=text name=Area value=" .$row['Area'] . " </td>";
                    echo"<td>". "<input type=text name=City value=" .$row['City'] . " </td>";
                    echo"<td>". "<input type=text name=Pcode value=" .$row['Pcode'] . " </td>";
                    echo"<td>". "<input type=text name=Tel No value=" .$row['Tel_No'] . " </td>";
                    echo"<td>". "<input type=text name=Fax No value=" .$row['Fax_No'] . " </td>";
					echo "<td>" . "<input type=submit name=add value=insert" . " </td>";
					echo "<td>" . "<input type=submit name=update value=update" . " </td>";
					echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
                    
                    echo("</tr>");
                    echo"</form>";
				}
				echo "<form action=branch.php method=post>";
				echo "<tr>";
				echo "<td><input type=text name=uBno></td>";
				echo "<td><input type=text name=uStreet></td>";
				echo "<td><input type=text name=uArea></td>";
				echo "<td><input type=text name=uCity></td>";
				echo "<td><input type=text name=uPcode></td>";
				echo "<td><input type=text name=uTel_No></td>";
				echo "<td><input type=text name=uFax_No></td>";
				echo "</form>";
				
					
                    
                
            ?>
            </table>
	</div>	
	
	</body>
</html>
