<?php  
    include_once ("templates/header.php"); 
?>
    <main>
       <h1>Cadastro de Contatos</h1> 
       <form action="<?=$baseURL?>config/process.php" method="POST" id="info">
            <?php
                    include_once ("templates/back.html");
            ?>
            <input type="hidden" name="type" value="add">
            <div class="field">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" placeholder="Nome" required>
            </div>
            <div class="field">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" id="phone" placeholder="Telefone" required>
            </div>
            <div class="field">
                <label for="observations">Observações:</label>
                <textarea name="observations" id="observations" cols="30" rows="3" placeholder="Observações" ></textarea>
            </div>
            <input type="submit" value="Cadastrar" id="btn-add"> 
        </form>
    </main>
<?php  
    include_once ("templates/footer.php"); 
?>