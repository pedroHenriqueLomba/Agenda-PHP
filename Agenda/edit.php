<?php  
    include_once ("templates/header.php"); 
    include_once ("config/process.php");
?>
    <main>
       <h1>Editar contato </h1> 

       <form action="<?=$baseURL?>config/process.php" method="POST" id="info">
            <?php
                    include_once ("templates/back.html");
            ?>
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $_GET["id"]?>">
            <div class="field">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="<?= $contact["name"]?>" required>
            </div>
            <div class="field">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" id="phone" value="<?= $contact["phone"]?>" required>
            </div>
            <div class="field">
                <label for="observations">Observações:</label>
                <textarea name="observations" id="observations" cols="30" rows="3" placeholder="Observações" ><?= $contact["observations"]?></textarea>
            </div>
            <input type="submit" value="Editar" id="btn-edit">
        </form>
    </main>
<?php  
    include_once ("templates/footer.php"); 
?>