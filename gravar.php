<HTML>
	<HEAD>	
		<meta http-equiv="refresh" content="2; url=index.html">
		<meta charset=".utf-8">
	</HEAD>
</HTML>

<?php
$imagem = $_FILES["imagem"];
$nome = $_POST["nome"];

$host = "localhost";
$username = "root";
$password = "";
$db = "test";
 
 
if($imagem != NULL) { 
    $nomeFinal = time().'.png';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqliImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
  
		$con=Mysqli_Connect($host, $username, $password);
		Mysqli_Select_db($con, $db);
		
		$sqlinsert ="insert into pessoa values ('','$mysqliImg','$nome')";
		
        mysqli_query($con, $sqlinsert) or die ('não foi possivel inserir');
			echo "<script> alert ('cadastro realizado com sucesso')</script>";
 
        unlink($nomeFinal);
    }
} 
else { 
    echo""; 
} 
 
?>