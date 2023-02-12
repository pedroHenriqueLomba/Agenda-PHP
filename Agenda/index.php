<?php  
    include_once ("templates/header.php"); 
?>



<main>
    <?php if (!empty($_SESSION["msg"]) && ($_SESSION["msg"] != "")):?>
        <div id="info-msg"><?= $_SESSION["msg"]?></div>
        <?php 
            $_SESSION["msg"] = "";
        ?>
    <?php endif ?>
    <?php if(empty($contacts)):?>    <!-- Caso o usuário não possua contatos -->
        <h1>Você ainda não possui contatos</h1>
        <p class="no-contact"><a href="<?=$baseURL?>add.php">Clique aqui para adicionar</a></p>    
    <?php else: ?> <!-- Caso o usuário possua contatos -->     
        <h1>Agenda de Contatos</h1>
        <table id="contacts-list">
            <thead>
                <th class="id">id</th>
                <th>nome</th>
                <th>phone</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td class="id"><?= $contact["id"] ?></td>
                        <td class="names"><?= $contact["name"] ?></td>
                        <td class="phone"><?= $contact["phone"] ?></td>
                        <td class="actions">
                            <a href="<?=$baseURL?>view.php?id=<?= $contact["id"]?>" class="action"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?=$baseURL?>edit.php?id=<?= $contact["id"]?>" class="action"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="<?=$baseURL?>config/process.php" method="POST" class="delete">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contact["id"]?>">
                                <button type="submit" class="action delete" value="delete"><i class="fa-sharp fa-solid fa-trash"></i></button>                    
                            </form>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    <?php endif?>
</main>

<?php  
    include_once ("templates/footer.php"); 
?>