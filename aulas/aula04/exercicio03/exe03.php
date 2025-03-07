<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == "etec" && $senha == "informática"){
    echo "<p>Logado com sucesso!</p>";
}else{
    echo "<p>Login ou senha inválidos</p>";
}

?>