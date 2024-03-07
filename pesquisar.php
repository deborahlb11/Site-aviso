<?php

 include_once("conexao.php");

$pesquisar= filter_var($_REQUEST['pesquisar'], FILTER_SANITIZE_STRING);
$sql =mysqli_query($con, "SELECT * FROM recado WHERE aviso LIKE '%$pesquisar%'") or die(mysqli_error($con));//caso de erro para de funcionar

while ($aux=mysqli_fetch_assoc($sql)) 
{
	echo "<div>".$aux["titulo"]. "</div>";
    echo "<div>".$aux["aviso"]."</div>"; 
    echo "<p>".$aux["data"]."</p>";
    echo "<p>".$aux["setorigem"]."</p>";
    echo "<p>".$aux["setdestino"]."</p>";
    echo "<p>".$aux["unidade"]."</p>"; 
    echo "<p>".$aux["emetente"]."</p>";
}
	
?>