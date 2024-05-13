<?php
include 'conexao.php'; // Inclui o arquivo de conexão
<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}
?>



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os dados do formulário
  $tipoCliente = $_POST['clientRadio']; 
  // ... outros dados do formulario ...
  
  if ($tipoCliente === 'pessoaFisica') {
    // Insere na tabela de pessoa física
    $sql = "INSERT INTO pessoa_fisica (nome, cpf, ...) VALUES (?, ?, ...)"; 
    // Prepara o statement
    $stmt = $conn->prepare($sql);
    // Bind dos parâmetros 
    $stmt->bind_param("ss...", $nome, $cpf,  ...); 
  } else {
    // Insere na tabela de pessoa jurídica
    $sql = "INSERT INTO pessoa_juridica (razao_social, nome_fantasia, cnpj, ...) VALUES (?, ?, ?, ...)";
    // Prepara o statement
    $stmt = $conn->prepare($sql);
    // Bind dos parâmetros 
    $stmt->bind_param("ssss...", $razaoSocial, $nomeFantasia, $cnpj, ...);
  }

  if ($stmt->execute()) {
    echo "Cliente cadastrado com sucesso!";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
  $stmt->close();
}
$conn->close(); 
?>