<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    echo "<h2 align='center' style='color: pink ;'>
    Todo texto entre aspas serão exibidos, inclusive o códogo HTML </h2>" ;
    $vetor = array('Corolla','X1','Audi A3','BMW');
    var_dump($vetor);
    echo '<hr>'; ?>

    <div class="box">
        <h1>Cadastro de usuário</h1>
        <form method='POST' action='process.php'>
            <label>Nome do usuário: </label>
            <input type='text' name='nome' placeholder='digite seu nome' required> <br><br>

            <label>Email: </label>
            <input type='email' name='email' placeholder='digite seu email' required> <br><br>

            <input type='submit' value='Enviar'>
        </form>
    </div>
    <h2>Exemplo de PhP no HTML</h2>
    <h3>horários</h3>
    <?php
    date_default_timezone_set("Asia/Bangkok"); 
    $data_hoje = date ("d/m/Y h:i:s", time());
    date_default_timezone_set("America/Sao_Paulo");
    $data_hojee = date ("d/m/Y h:i:s", time());
    ?>
    <p>Agora em Bangkok: <?php echo $data_hoje ; ?> </p>
    <p>Agora no Sp: <?php echo $data_hojee ; ?></p>


</body>
</html>