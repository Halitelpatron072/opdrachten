<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="email" id='txt' name="email" value="" placeholder="Voer hier uw email in!">
        <button type="submit" id='submit'>Verzenden</button>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:green;'>E-mailadres is geldig</p>";
    } else {
        echo "<p style='color:red;'>E-mailadres is ongeldig.</p>";
    }
    }
?>
</body>

</html>