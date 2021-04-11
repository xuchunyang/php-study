<?php
if (isset($_REQUEST['data'])) {
    echo "Data Found";
} else {
    echo "No Data";
}
?>

<?php
if (filter_has_var(INPUT_GET, 'data')) {
    echo "Data Found";
    if (filter_input(INPUT_GET, 'data', FILTER_VALIDATE_EMAIL)) {
        echo "Email is valid";
    } else {
        echo "Email is invalid";
    }
} else {
    echo "No Data";
}
?>


<form action="">
    <input type="text" name="data">
</form>
