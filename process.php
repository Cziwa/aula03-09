<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo "<p>Nome:</p> $nome <br><br>";
        echo "<p>Email:</p> $email <br><br>"; 
        echo "<a href='index.php'>voltar</a>";
    ?>
</body>
</html>