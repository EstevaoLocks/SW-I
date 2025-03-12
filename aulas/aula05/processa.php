<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "aluno@email.com" && $senha == "1234"){
        //manda para autorizado.php
        header('Location: painel/autorizado.html');
        //echo "AUTORIZADO";
    }else{
        //manda para nao açutorizado.php
        header('Location: painel/naoautorizado.html');
        //echo "NÃO AUTORIZADO";
    }

?>