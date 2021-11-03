<?php 

include_once("config/url.php");
include_once("config/process.php");

// limpa a mensagem
if(isset($_SESSION['msg'])) {
    $print = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL?>css/estilo.css">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= $BASE_URL?>index.php">
                <img src="<?= $BASE_URL?>img/logo.svg">
            </a>
            <div>
                <div class="navbar-nav">

                <a class="nav-link active" id="home-link" href="<?= $BASE_URL?>index.php"> Listar</a>
                <a class="nav-link active" href="<?= $BASE_URL?>create.php"> Cadastrar</a>

                </div>
                
            </div>
        </nav>
    </header>