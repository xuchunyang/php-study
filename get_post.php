<?php
if (isset($_GET['name'])) {
    // print_r($_GET);
    echo htmlentities($_GET['name']);
}
?>

<?php
if (isset($_POST['name'])) {
    // print_r($_GET);
    echo htmlentities($_POST['name']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test GET and POST</title>
</head>

<body>

    <form method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <input type="submit">
    </form>

</body>

</html>
