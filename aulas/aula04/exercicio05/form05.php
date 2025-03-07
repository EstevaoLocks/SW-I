<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body style="background-color: <?php $color = $_GET['color']; echo "$color"; ?>">
    

    

    <form action="" method="get">

        <p><label for="color">Cor da Página:</label></p>
        <input type="color" required="" id="color" name="color">
        <br>

        <input type="submit" value="ENVIAR">
    </form>

    

</body>
</html>