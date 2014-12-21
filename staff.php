<?php 
	error_reporting(0);
	include('nav.php');
	require("connect.php");
	
	$result = mysql_query("SELECT * FROM staff");
	
	if(isset($_POST['update'])){
	$UpdateQuery = "UPDATE branch SET 
	Bno='$_POST[Sno]', 
	Street='$_POST[Fname]',
	Area='$_POST[Lname]'
	City='$_POST[Address]', 
	Pcode='$_POST[Tel_No]',
	Tel_No='$_POST[Position]' 
	Fax_No='$_POST[Sex]',
	Bno='$_POST[DOB]'
	Bno='$_POST[NIN]' 
 	Bno='$_POST[Bno]' 
	

	 WHERE  WHERE Sno='$_POST[hidden]', Fname='$_POST[hidden]',
	 Lname='$_POST[hidden], 'Address='$_POST[hidden],
	 'Tel_No='$_POST[hidden],'Position='$_POST[hidden],
	 'Sex='$_POST[hidden]',DOB='$_POST[hidden]',
	 'NIN='$_POST[hidden]',Bno='$_POST[hidden]'";               
	mysql_query($UpdateQuery, $conn);
	};

	if(isset($_POST['delete'])){
		$DeleteQuery = "DELETE FROM branch WHERE Sno='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Fname='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Lname'$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Address='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Tel_No='$_POST[hidden]'";    
		$DeleteQuery = "DELETE FROM branch WHERE Position='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Sex='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE DOB='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE NIN='$_POST[hidden]'";
		$DeleteQuery = "DELETE FROM branch WHERE Bno='$_POST[hidden]'";
		      
		mysql_query($DeleteQuery, $conn);
	};

	if(isset($_POST['add'])){
			$AddQuery = "INSERT INTO branch (Sno, Fname, Lname, Address, Tel_No, Position, Sex, DOB, NIN, Bno) VALUES 	('$_POST[Sno]','$_POST[Fname]','$_POST[Lname]' ,('$_POST[Address]','$_POST[TelNo]','$_POST[Position]','$_POST[Sex]','$_POST[DOB]','$_POST[NIN]','$_POST[Bno]',)";         
			mysql_query($AddQuery, $conn);
	};
	

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Branch</title>
</head>
<h2>Staff</h2><?php 
echo "<form action=staff.php method=post>";
                    
					echo" <p>Search</p> <input type=text name=search placeholder= search maxlength=30>";
					echo" <select name=filter>";
					echo" <option value=Sno>Sno";echo"</option>";
					echo" <option value=Fname>Fname";echo"</option>";
					echo" <option value=Lname>Lname";echo"</option>";
					echo" <option value=Address>Address";echo"</option>";
					echo" <option value=Tel_No>Tel_No";echo"</option>";
					echo" <option value=Position>Position";echo"</option>";
					echo" <option value=Sex>Sex";echo"</option>";
					echo" <option value=DOB>DOB";echo"</option>";
					echo" <option value=Bno>Salary";echo"</option>";
					echo" <option value=Sex>NIN";echo"</option>";
					echo" <option value=Bno>Bno";echo"</option>";

					echo"</select>";
										
					
                    echo"</form>";
?>
<body>
    <table  border="1" style="width:80%">
        <th>Sno</th>
      	 <th>Fname</th>
        <th>Lname</th>
        <th>Address</th>
        <th>Tel No</th>
        <th>Position</th>
        <th>Sex</th>
        <th>DOB</th>
        <th>Salary</th>
        <th>NIN</th>
         <th>Bno</th>
       
        <?php 
	   
	   		while ( $row = mysql_fetch_assoc($result)){
	   			
				 echo "<form action=staff.php method=post>";
                    echo"<tr>";
                    echo"<td>". "<input type=text name=Bno value=" .$row['Sno'] . " </td>";
                    echo"<td>". "<input type=text name=Street value=" .$row['Fname'] . " </td>";
                    echo"<td>". "<input type=text name=Area value=" .$row['Lname'] . " </td>";
                    echo"<td>". "<input type=text name=City value=" .$row['Tel_No'] . " </td>";
                    echo"<td>". "<input type=text name=Pcode value=" .$row['Position'] . " </td>";
                    echo"<td>". "<input type=text name=Tel No value=" .$row['Sex'] . " </td>";
                    echo"<td>". "<input type=text name=Fax No value=" .$row['DOB'] . " </td>";
					 echo"<td>". "<input type=text name=Bno value=" .$row['INI'] . " </td>";
					  echo"<td>". "<input type=text name=Bno value=" .$row['Bno'] . " </td>";
					echo "<td>" . "<input type=submit name=add value=insert" . " </td>";
					echo "<td>" . "<input type=submit name=update value=update" . " </td>";
					echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
                    
                    echo("</tr>");
                    echo"</form>";
				}
				echo "<form action=staff.php method=post>";
				echo "<tr>";
				echo "<td><input type=text name=uSno></td>";
				echo "<td><input type=text name=uFname></td>";
				echo "<td><input type=text name=uLname></td>";
				echo "<td><input type=text name=uTel_No></td>";
				echo "<td><input type=text name=uPosition></td>";
				echo "<td><input type=text name=uSex></td>";
				echo "<td><input type=text name=uDOB></td>";
				echo "<td><input type=text name=uNIN></td>";
				echo "<td><input type=text name=uBno></td>";
				echo "</form>";
			
		?>
    </table>
	
</body>
</html>
