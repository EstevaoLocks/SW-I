<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    

    <form action="exe01.php" method="get">
        <label for="nome">Nome: </label><br>
        <input type="text" required="" id="nome" name="nome"><br>

        <label for="n1">Primeira nota:</label><br>
        <input type="number" required="" max="10" min="0" id="n1" name="n1"><br>

        <label for="n2">Segunda nota:</label><br>
        <input type="number" required="" max="10" min="0" id="n2" name="n2"><br>

        <label for="n3">Terceira nota:</label><br>
        <input type="number" required="" max="10" min="0" id="n3" name="n3"><br>

        <input type="submit" required="" value="ENVIAR">
    </form>


</body>
</html>