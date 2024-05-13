<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $tipoCliente = $_POST['clientRadio'];
  
  if ($tipoCliente === 'pessoaFisica') {
    $cpf = $_POST['cpf'];
    $sql = "SELECT * FROM pessoa_fisica WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf);
  } else {
    $cnpj = $_POST['cnpj'];
    $sql = "SELECT * FROM pessoa_juridica WHERE cnpj = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cnpj);
  }
  
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // Exibe os dados do cliente
    while($row = $result->fetch_assoc()) {
      // ... exibe os dados de $row ...
    }
  } else {
    echo "Nenhum cliente encontrado.";
  }
  $stmt->close();
}
$conn->close();
?>