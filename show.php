<?php 

include_once("templates/header.php");

?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html"); ?>

    <h1 id="main-title"><?= $contact['nome_cad']?> </h1>
    <p class="bold">Data do cadastro:</p>
    <p><?= $contact['time_cad'] ?></h1></p>

    <p class="bold">Mensagem:</p>
    <p><?= $contact['message_cad'] ?></h1></p>
</div>
    
    
<?php 

include_once("templates/footer.php");

?>