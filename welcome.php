<h1>
    <?php
    // NOTE parse error
    // echo "Welcome, $_GET['username']";
    echo "Welcome, {$_GET['username']}";
    ?>
</h1>

<h1>Welcome, <?= $_GET["username"] ?></h1>

<?= print_r($_POST) ?>

<h1>Welcome, <?= $_POST["username"] ?></h1>

<pre>
<?php

    echo "_SERVER:\n";
    print_r($_SERVER);

    echo "_REQUEST:\n";
    print_r($_REQUEST);

    echo "_GET:\n";
    print_r($_GET);

    echo "_POST:\n";
    print_r($_POST);

?>
</pre>