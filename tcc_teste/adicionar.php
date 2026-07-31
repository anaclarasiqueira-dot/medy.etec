 <?php

        require("conexao.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST['nome'] ?? '';
            $dosagem = $_POST['dosagem'] ?? '';
            $categoria = $_POST['categoria']?? '';
            $qtd_disponivel = $_POST['qtd_disponivel']?? '';
            $validade = $_POST['validade']?? '';
            
        $query = "INSERT INTO medicamento (nome, dosagem, categoria, qtd_disponivel, validade) VALUES ('$nome', '$dosagem','$categoria', '$qtd_disponivel', '$validade')";

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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <form action="adicionar.php" method="POST">
            
        <div class="container mt-3">
            <form>
                <div class="row">
                <div class="col">
                    Nome: <input type="text" name="nome" class="form-control" required placeholder="Ex.: Paracetamol"><br>
                </div>
                <div class="col">
                    Dosagem (mg):<input type="number" name="dosagem" class="form-control" step="0.1" min="0" required placeholder="Ex.: 750"><br>
                </div>                 
                </div>
                <div class="row">
                <div class="col">
                    Quantidade:<input type="number" name="qtd_disponivel" class="form-control" step="0.1" min="0" required placeholder="Ex.: 20"><br>
                </div>
                <div class="col">
                    Categoria:<input type="text" name="categoria" class="form-control" required placeholder="Ex.: Analgésico"><br>
                </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6">
                     Validade:
                    <input type="date" id="date" name="validade" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </div>
            </form>
        </div>
    </form>
            
    




    <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
<?php
