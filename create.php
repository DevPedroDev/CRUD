<?php 

include_once("templates/header.php");

?>
    <div class="container">
   <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"> Cadastrar Usuários </h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
        <label for="nome_cad">Nome </label>
    <input type="text" class="form-control" id="nome_cad"  name="nome_cad" placeholder="Digite o nome">
    </div>
    <div class="form-group">
        <label for="time_cad">Horas </label>
    <input type="time" class="form-control" id="time_cad"  name="time_cad">
    </div>
    <div class="form-group">
        <label for="messafe_cad">Mensagem </label>
    <textarea type="text" class="form-control" id="message_cad"  name="message_cad" placeholder="Digite sua mensagem" rows="3"> </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
    <?php 

include_once("templates/footer.php");

?>