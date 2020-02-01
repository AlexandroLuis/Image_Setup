<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "test";
 
$con=Mysqli_Connect($host, $username, $password);
Mysqli_Select_db($con, $db);
 
$result = mysqli_query($con, "SELECT * FROM pessoa");

	$linha =1;
	while($row =mysqli_fetch_assoc($result)) {
		echo "<img src=getimagem.php?id=".$row['PES_ID'] ."/> "	.$row['nome'] ."";
		$linha++;
		?>
		<br>
		<?php
	}
	mysqli_free_result($result);

?>