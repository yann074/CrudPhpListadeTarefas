<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTÁGIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>LISTA DE TAREFAS</h1>
    </header>
    <div class="buttons">
        <a href="?page=novo"><button><i class="bi bi-plus-lg"></i></button></a>
        <a href="?page=listar"><button><i class="bi bi-pencil"></i></button></a>
        <a href="index.php"><button><i class="bi bi-house"></i></button></a>
      
    </div>

    <?php 
    include("config.php");

    switch(@$_REQUEST["page"]){
        case "novo":
            include("novo_lembrete.php");
        break;
        case "listar":
            include ("listar_lembrete.php");
        break;
        case "salvar":
            include("salvar_lembrete.php");
        break;
        case "editar":
            include("editar_lembrete.php");
        break;
    }
    ?>

</body>
</html>
