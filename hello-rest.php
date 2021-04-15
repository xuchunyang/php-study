<!-- https://www.leaseweb.com/labs/2015/10/creating-a-simple-rest-api-in-php/ -->

<?= header("Content-Type: application/json; charset=utf-8"); ?>
<?= json_encode($_SERVER); ?>
