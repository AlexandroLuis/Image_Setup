<?php
	$id = $_GET["id"];

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "test";
	
	$sql = "select PES_IMG from pessoa where PES_ID=$id";
	$dados = mysqli_query($sql);
	$linha = mysqli_fetch_array($dados);
	$id = $linha["PES_IMG"];

	header("content-type: image/png");
	echo $id;
	flush(); 
?>	