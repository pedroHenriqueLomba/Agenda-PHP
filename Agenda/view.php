<?php  
    include_once ("templates/header.php"); 
    include_once ("config/process.php");

?>

    <main>
        <h1><?= $contact["name"]?></h1>
        <form id="info">
            <?php
                include_once ("templates/back.html");
            ?>
            <div class="field">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name"  value="<?=$contact["name"]?>" disabled>
            </div>
            <div class="field">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" id="phone" value="<?=$contact["phone"]?>" disabled>
            </div>
            <div class="field">
                <label for="observations">Observações:</label>
                <textarea name="observations" id="observations" cols="30" rows="3" placeholder="Sem observações" disabled><?=$contact["observations"]?></textarea>
            </div>
    </main>

<?php  
    include_once ("templates/footer.php"); 
?>