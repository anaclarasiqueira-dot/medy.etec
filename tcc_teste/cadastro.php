<?php 
        require("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $nome = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';
            
            
        $query = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email','$senha')";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <hr>

        <form action="cadastro.php" method="POST">

        Nome <input type="text" name="nome"><br><br>

        Email <input type="email" id="email" name="email"><br><br>

        Senha <input type="password" name="senha"><br><br>

        <input type="submit" value="Adicionar">        
        </form>
    




    <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

        
</body>
</html>
<?php
