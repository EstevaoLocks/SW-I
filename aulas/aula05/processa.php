<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = "Aluno";

    if ($email == "aluno@email.com" && $senha == "1234"){
        //manda para autorizado.php
        header('Location: painel/autorizado.php?nome='.$nome);
        //echo "AUTORIZADO";
    }else{
        //manda para nao açutorizado.php
        header('Location: painel/naoautorizado.html');
        //echo "NÃO AUTORIZADO";
    }

?>