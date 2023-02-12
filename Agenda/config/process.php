<?php

    // Iniciando sessão para exibir mensagem

    session_start();

    // Incluindo URL e conexão com banco de dados

    include_once ("helper.php");
    include_once ("connection.php");

    // Buscar todos os contatos

    $stmt = $conn->prepare("SELECT * FROM contacts");

    $stmt->execute();

    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Buscar ID do contato

    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id = :id");
    $stmt->bindParam(":id", $_GET["id"]);
    $stmt->execute();
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    // Funções

    if (!empty($_POST)) {
        $type = $_POST["type"];

    switch ($type) {
        case 'add': // Adicionando contatos
            $add = $conn->prepare("INSERT INTO contacts(name, phone, observations) VALUES (:name, :phone, :observations)");
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $observations = $_POST["observations"];
            $add-> bindParam(":name", $name);
            $add-> bindParam(":phone", $phone);
            $add-> bindParam(":observations", $observations);
            $add-> execute();
            $_SESSION["msg"] = "Contato cadastrado com sucesso";
            header("Location:". $baseURL2 . "index.php");
        break;

        case 'edit':
            $edit = $conn->prepare("UPDATE contacts SET name = :name , phone = :phone , observations = :observations WHERE id = :id");
            $id = $_POST["id"];
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $observations = $_POST["observations"];
            $edit-> bindParam(":id", $id);
            $edit-> bindParam(":name", $name);
            $edit-> bindParam(":phone", $phone);
            $edit-> bindParam(":observations", $observations);
            $edit-> execute();
            $_SESSION["msg"] = "Contato editado com sucesso";
            header("Location:". $baseURL2 . "index.php");
        break;

        case 'delete':
            $edit = $conn->prepare("DELETE FROM contacts WHERE id = :id");
            $id = $_POST["id"];
            $edit-> bindParam(":id", $id);
            $edit-> execute();
            $_SESSION["msg"] = "Contato excluído com sucesso";
            header("Location:". $baseURL2 . "index.php");
        break;
        
        default:
            # code...
            break;
    }
    }

?>