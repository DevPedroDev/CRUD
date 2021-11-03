<?php 

include_once("templates/header.php");

?>
    <div class="conteiner">
        <?php if(isset($print) && $print != ''): ?>
            <p id="msg"> <? $print ?> </p>

         <?php endif; ?>   

         <h1 id="main-title">Listar</h1>
         <?php if(count($contacts)> 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Mensagem</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <?php foreach($contacts as $contact): ?>
                    <tr>

                        <td scope="row" class="col-id"> <?= $contact["id"] ?> </td>
                        <td scope="row"> <?= $contact["nome_cad"] ?> </td>
                        <td scope="row"> <?= $contact["time_cad"] ?> </td>
                        <td scope="row"> <?= $contact["message_cad"] ?> </td>

                    <td class="actions"> 
                        <a href="<?= $BASE_URL ?>show.php?id=<?=$contact["id"] ?>"><i class="fas fa-eye check-icon"> </i> </a>
                        <a href="<?= $BASE_URL ?>edit.php?id=<?=$contact["id"] ?>" ><i class="fas fa-edit check-icon"> </i> </a>


                        <form  class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                            <input type="hidden" name="type" value="delete">
                            <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </form>



                    </td>

                    </tr>


                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <p id="empty-list-text">Não há cadastros <a href="<?= $BASE_URL ?>create.php">Clique aqui para se cadastrar</a>.</p>
                <?php endif; ?>
    </div>
    
    <?php 

include_once("templates/footer.php");

?>