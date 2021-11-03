<?php 

include_once("templates/header.php");

?>
    <div class="container">
   <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"> Editar contato </h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contact['id']?>">
    <div class="form-group">
        <label for="nome_cad">Nome </label>
    <input type="text" class="form-control" id="nome_cad"  name="nome_cad" placeholder="Digite o nome" value="<?= $contact['nome_cad']?>">
    </div>
    <div class="form-group">
        <label for="time_cad">Horas </label>
    <input type="time" class="form-control" id="time_cad"  name="time_cad" value="<?= $contact['time_cad']?>">
    </div>
    <div class="form-group">
        <label for="messafe_cad">Mensagem </label>
    <textarea type="text" class="form-control" id="message_cad"  name="message_cad" placeholder="Digite sua mensagem" rows="3"> <?= $contact['message_cad']?> </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    </div>
    <?php 

include_once("templates/footer.php");

?>