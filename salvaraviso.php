<?php

include_once('conexao.php');


if(isset($_POST['salvar']))
{
     $titulo= $_POST['titulo'];
     $aviso=$_POST['aviso']; 
     $unidade=$_POST['unidade']; 
     $setor=$_POST['setor'];
     $data=$_POST['data'];
     $hora=$_POST['hora'];
     $emetente=$_POST['user'];

     $sql= "UPDATE recado SET titulo='$tiulo',aviso='$aviso', emetente='$emetente',unidade='$unidade',setor='$setor',data='$data', horario='hora'";

     $res = mysqli_query($con, $sql);

    header('Location:Página-Inicial.php');    

}