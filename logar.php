<?php

include_once('conexao.php');

$user = filter_var($_REQUEST['user'], FILTER_SANITIZE_STRING);
$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);

$sql="SELECT * FROM usuarios WHERE  user = '$user' and  senha = '$senha'";
$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res)==1)
{
    session_start();
    $_SESSION['user']=$_REQUEST['user'];
    header('location:Página-Inicial.php');
    exit();
    
}
else 
{
    header('location:Página-1.php');
}