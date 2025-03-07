<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    

    <form action="exe04.php" method="post">

        <p><label for="nome">Nome:</label></p>
        <input type="text" required="" id="nome" name="nome">

        <p><label for="email">Email:</label></p>
        <input type="email" required="" id="email" name="email">

        <p><label for="nascimento">Data de nascimento:</label></p>
        <input type="date" required="" id="nascimento" name="nascimento">
        <br>

        <select name="band">
            <option value="MasterCard" selected>Master Card</option>
            <option value="Visa">Visa</option>
            <option value="Elo">Elo</option>
            <option value="HiperCard">Hiper Card</option>
        </select>
        <br>

        <input type="submit" value="ENVIAR">
    </form>


</body>
</html>