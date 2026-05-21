<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>
    <h1>Questão 9</h1>
    

</body>
</html>

<?php
function emailValido($email) {
    if (empty($email)) {
        return false;
    }

    $email = trim($email);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        return false;
    }

    if (strlen($email) > 254) {
        return false;
    }

    return true;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
    <h2>hanry</h2>
</head>
<body>

    <a href="questao_10.php">Questão 10</a>
</body>
</html>