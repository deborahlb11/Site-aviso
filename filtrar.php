
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 

{
    $assunto = filter_var($_POST["assunto"],FILTER_SANITIZE_STRING);
    $horario = filter_var($_POST["horario"],FILTER_SANITIZE_STRING);
    $data = filter_var($_POST["data"],FILTER_SANITIZE_STRING);
    $setor = filter_var($_POST["setor"],FILTER_SANITIZE_STRING);

    include_once("conexao.php");

    $sql = "SELECT * FROM recado WHERE aviso ='%Sassunto'"; // 1=1 para facilitar a construção da consulta
    
    // Verifica cada campo do formulário e adiciona à consulta SQL apenas se estiver preenchido
    if (!empty($_POST["horario"]))
     {
        $horario = $_POST["horario"];
        $sql .= " AND hora LIKE '$horario'";
    }
    
    if (!empty($_POST["campo2"])) 
    {
        $campo2 = $_POST["campo2"];
        $sql .= " AND campo2 LIKE '%$campo2%'";
    }
    
    // ... Adicione mais blocos if para cada campo do formulário
    
    // Executa a consulta SQL
    $result = $conn->query($sql);
    
    // Exibe os resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Exiba os dados do resultado
            echo "Campo 1: " . $row["campo1"] . "<br>";
            echo "Campo 2: " . $row["campo2"] . "<br>";
            // ... Exiba os outros campos do resultado
            echo "<br>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
    
   
}
?>



/* if(isset($_POST['filtrar']))
{
    $assunto = filter_var($_POST["assunto"],FILTER_SANITIZE_STRING);
    $horario = filter_var($_POST["horario"],FILTER_SANITIZE_STRING);
    $data = filter_var($_POST["data"],FILTER_SANITIZE_STRING);
    $setor = filter_var($_POST["setor"],FILTER_SANITIZE_STRING);

}

 $sql = "SELECT * FROM recado WHERE assunto = '$assunto' OR data = '$data'  OR setor = '$setor' OR horario = '$horario'; ";

    // Adicionar condições à consulta com base nos valores do formulário
    $conditions = array();

    if (!empty($assunto)) 
    {
        $conditions[] = "assunto LIKE '%$assunto%'";
    }
    if (!empty($horario))
     {
        $conditions[] = "horario = '$horario'";
    }
    if (!empty($data)) 
    {
        $conditions[] = "data = '$data'";
    }
    if (!empty($setor)) 
    {
        $conditions[] = "setor = '$setor'";
    }

    // Juntar as condições com "AND"
    $sql .= implode(" AND ", $conditions);

    // Verificar se a consulta retornou resultados
    if ($sql->num_rows > 0)
     {
        // Exibir os resultados
        while ($row = $result->fetch_assoc()) {
            echo "Assunto: " . $row["assunto"] . "<br>";
            echo "Horário: " . $row["horario"] . "<br>";
            echo "Data: " . $row["data"] . "<br>";
            echo "Setor: " . $row["setor"] . "<br>";
            echo "<br>";
        }
    } 
    else 
    {
        echo "Nenhum resultado encontrado.";
    }

   
   

?>

<!-- <?php 

	$filtroData = isset($_GET['data']) ? $_GET['data'] : '';
	$filtroHorario = isset($_GET['horario']) ? $_GET['horario'] : '';
	$filtroAssunto = isset($_GET['nome']) ? $_GET['assunto'] : '';
	$filtrosetor = isset( $_GET['setor']) ? $_GET['setor'] : '';


function filtrarDados($dados, $data, $horario, $assunto,$setor) 
{
    $resultado = array();

    foreach ($dados as $item) {
        $passouFiltro = true;

        // Verifica cada critério de filtro, ignorando se o campo foi preenchido ou não
        if ($data !== '' && $item['data'] !== $data) 
        {
            $passouFiltro = false;
        }
        if ($horario !== '' && $item['horario'] !== $horario) 
        {
            $passouFiltro = false;
        }
        if ($assunto !== '' && $item['assunto'] !== $assunto) 
        {
            $passouFiltro = false;
        }

        if ($setor !== '' && $item['setor'] !== $setor) 
        {
            $passouFiltro = false;
        }

        if ($passouFiltro) 
        {
            $resultado[] = $item;
        }
    }

    return $resultado;
}

// Aplica o filtro aos dados
	$resultadoFiltro = filtrarDados($dados, $filtroData, $filtroHorario, $filtroAssunto, $filtrosetor);
?> -->

<!-- Link para voltar à página anterior -->
<a href="Página-1.php">Voltar</a>

<!-- Exibindo os resultados -->
<?php if (count($resultadoFiltro) > 0): ?>
    <h2>Resultados:</h2>
    <ul>
        <?php foreach ($resultadoFiltro as $item): ?>
            <li>Nome: <?php echo $item['assunto']; ?>, Data: <?php echo $item['data']; ?>, Horário: <?php echo $item['horario']; ?> Setor: <?php echo $item['setor']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Nenhum resultado encontrado.</p>
<?php endif; ?>

<?php
                  

                  $sql = mysqli_query($con, "SELECT titulo, aviso,data,setorigem,setdestino,unidade,emetente FROM recado ") or die(mysqli_error($con));//caso de erro para de funcionar

                while($aux = mysqli_fetch_assoc($sql)) 
                {
                  
                }
                
              ?>  -->

<!--

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
                 {
                 
                    $filtroData = $_POST['data'];
                    $filtroHorario = $_POST['horario'];
                    $filtroAssunto = $_POST['assunto'];
                    $filtrosetor = $_POST['setor'];

                 
                 $parametros = http_build_query(array('data' => $filtroData,'horario' => $filtroHorario,'assunto' => $filtroAssunto,'setor'=>$filtrosetor));
                   header("Location: filtrar.php?" . $parametros);
                   exit();
                }


 if ($_SERVER["REQUEST_METHOD"] == "POST") 
                 {
                   $assunto = $_POST["titulo"];
                   $horario = $_POST["hora"];
                   $data = $_POST["data"];
                   $setor = $_POST["setor"];

                       
                    $sql = "SELECT * FROM recado WHERE titulo= '%$assunto%' OR horario ='$horario' OR data='$data' OR setorigem='$setor'";
                    $conditions = array();

                  if (!empty($assunto)) 
                  {
                    $conditions[] = "assunto LIKE '%$assunto%'";
                  }
                  if (!empty($horario)) {
                    $conditions[] = "horario = '$horario'";
                  }
                  if (!empty($data)) {
                    $conditions[] = "data = '$data'";
                  }
                  if (!empty($setor)) {
                  $conditions[] = "setor = '$setor'";
                  }

    
                  $sql .= implode(" AND ", $conditions);
                  $result = $con->query($sql);

   
                  if ($result->num_rows > 0) 
                  {
        
                  while ($row = $result->fetch_assoc()) 
                {
                  echo "Assunto: " . $row["assunto"] . "<br>";
                  echo "Horário: " . $row["horario"] . "<br>";
                  echo "Data: " . $row["data"] . "<br>";
                  echo "Setor: " . $row["setor"] . "<br>";
                  echo "<br>";
                }
              }
            else 
            {
              echo "Nenhum resultado encontrado.";
            }
              $con->close();
          }
          ?> -->