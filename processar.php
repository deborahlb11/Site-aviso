<?php
include_once("conexao.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    // Obtém os dados dos inputs
    $titulo = $_POST["titulo"];
    $aviso = $_POST["aviso"];
    
    // Obtém os dados dos grupos de checkboxes
    $unidade = $_POST["unidade"];
    $setor = $_POST["setor"];
    
    // Exibe os dados na tela
    echo "Titulo:" .$titulo. "<br>";
    echo "Aviso:" .$aviso. "<br>";
    
    echo "Checkboxes 1 selecionados: ";
    foreach ($unidade as $checkbox) {
        echo $checkbox . " ";
    }
    echo "<br>";
    
    echo "Checkboxes 2 selecionados: ";
    foreach ($aviso as $checkbox) {
        echo $checkbox . " ";
    }
    echo "<br>";
}
?>


