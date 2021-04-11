<?php $loggedin = false ?>
<?php if ($loggedin) { ?>
    <h1>Welcome User</h1>
<?php } else { ?>
    <h1>Welcome Guest</h1>
<?php } ?>

<?php if ($loggedin) : ?>
    <h1>Welcome User</h1>
<?php else : ?>
    <h1>Welcome Guest</h1>
<?php endif; ?>

<?php foreach ($_SERVER as $key => $value) : ?>
    <p><?= $key ?>: <?= $value ?></p>
<?php endforeach; ?>