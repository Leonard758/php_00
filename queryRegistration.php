<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'home';



    $con = new mysqli($host, $user, $password, $database);

    if (!$con) {
        echo 'connection failed';
        exit();
    }

    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $email = $_GET['email'];

    $sql = "INSERT INTO elenco_utenti(nome,cognome,email) VALUES ('$nome',' $cognome',' $email')";

    if ($con->query($sql)) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <style>
        </style>
        
        <body>
        
            <h1>Register</h1><br>
            <form name="form" action="queryRegistration.php" method="get">
                <label>Nome</label>
                <input type="text" name="nome"><br>
                <label>Cognome</label>
                <input type="text" name="cognome"><br>
                <label>Email</label>
                <input type="text" name="email"><br>
        
                <input type="submit">
            </form>
            
        
        </body>
        </html>
        ';
    }


    $con->close();

    ?>