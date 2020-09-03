<html>
<body>

	<form action="" method="post" name="form2">
		<table>
		<center> please fill all the fields</center>
			<tr>
				<td>ISBN:</td>
				<td><input type="text" name="isbn" /></td>
			</tr>
			<tr>
				<td>Book Title:</td>
				<td><input type="text" name="btitle" /></td>
			</tr>
			<tr>
				<td>Author name:</td>
				<td><input type="text" name="aname" /></td>
			</tr>
			<tr>
				<td>No.of copies:</td>
				<td><input type="text" name="ncopies" /></tb>
			</tr>
			<tr>
				<td><input type="submit" name="add" value="submit"></td>
				<td><input type="reset" name="clear" value="reset"></td>
			</tr>
		</table>
	</form>
	
	<?php
		require("conn.php");
		$isbn = $_POST["isbn"];
		$bt = $_POST["btitle"];
		$author = $_POST["aname"];
		$copies = $_POST["ncopies"];
		
		if(isset($_POST["add"]))
		{
			$query = "INSERT INTO book
				VALUES ('$isbn','$bt','$author',$copies)";
			mysqli_query($con,$query);
		}
	?>
</body>
</html>
