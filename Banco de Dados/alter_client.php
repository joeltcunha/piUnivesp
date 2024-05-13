<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $tipoCliente = $_POST['clientRadio'];
  
  if ($tipoCliente === 'pessoaFisica') {
    // Recebe dados do formulário
    $cpf = $_POST['cpf'];
    // ... outros dados do formulario ...

    $sql = "UPDATE pessoa_fisica SET nome=?, ... WHERE cpf=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss...", $nome, ..., $cpf); 
  } else {
    // Recebe dados do formulário
    $cnpj = $_POST['cnpj'];
    // ... outros dados do formulario ...

    $sql = "UPDATE pessoa_juridica SET razao_social=?, nome_fantasia=?, ... WHERE cnpj=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss...", $razaoSocial, $nomeFantasia, ..., $cnpj); 
  }

  if ($stmt->execute()) {
    echo "Dados do cliente atualizados com sucesso!";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
  $stmt->close();
}
$conn->close();
?>