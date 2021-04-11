<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Server & File Info</h1>
        <?php if ($_SERVER) : ?>
            <ul class="list-group">
                <?php foreach ($_SERVER as $key => $val) : ?>
                    <li class="list-group-item">
                        <strong><?= $key ?>:</strong>
                        <?= $val ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

</body>

</html>