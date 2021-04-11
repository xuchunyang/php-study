<?php
$msg = "";
if (filter_has_var(INPUT_POST, "submit")) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        $msg = "Please fill in all fields";
        $msgClass = "alert-danger";
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = "Please use a valid email";
            $msgClass = "alert-danger";
        } else {
            // Passed
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a href="" class="navbar-brand">My Website</a>
        </div>
    </nav>

    <div class="container">
        <?php if ($msg !== "") : ?>
            <div class="alert <?= $msgClass ?>">
                <?= $msg; ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?= isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?= isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" class="form-control" value="<?= isset($_POST['message']) ? $message : ''; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>