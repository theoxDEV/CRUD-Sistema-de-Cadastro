<?php include 'conexao.php';


    if(isset($_POST)){
        $name = $_POST['cNome'];
        $dtNascimento = $_POST['cDataNasc'];
        $email = $_POST['cEmail'];
        $foto = $_POST['cFoto'];

        $mysqli->query("INSERT INTO cadastro (nome, dtNascimento, email, imagemUser) VALUES ('$name', '$dtNascimento', '$email', '$foto')") or
            die($mysqli->error);

        $_SESSION['message'] = "Registro salvo com sucesso !";
        $_SESSION['msg_type'] = 'success';
    }
?>