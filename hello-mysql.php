<?php
// var_dump($_SERVER);

// 打印到终端
// https://stackoverflow.com/questions/6079492/how-to-print-a-debug-log
// file_put_contents('php://stderr', print_r($_SERVER, TRUE));

$host = "localhost";
$user = "xcy";
$passwd = "skin";
$dbname = "todo";
$mysqli = mysqli_connect($host, $user, $passwd, $dbname);
$tableName = "todos";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST["action"] === "add_todo") {
        // FIXME: 检查参数
        $todo = $_POST['todo'];
        // FIX: 检测返回
        $sql = "insert into $tableName values('$todo', false)";
        if (false === mysqli_query($mysqli, $sql)) {
            echo "<h1>something is wrong: $sql: $mysqli->error</h1>";
        }
    }
}

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"] === "toggle") {
        $content = $_REQUEST["content"];
        $done = $_REQUEST["done"];
        $newDone = $done === "1" ? 'false' : 'true';
        $sql = "UPDATE $tableName SET done = $newDone where content = '$content'";
        if (mysqli_query($mysqli, $sql) === false) {
            echo "<h1>something is wrong: $sql: $mysqli->error</h1>";
        }
    }
}

if (isset($_REQUEST["action"]) && $_REQUEST["action"] === "delete") {
    $content = $_REQUEST["content"];
    $sql = "DELETE FROM $tableName WHERE content = '$content'";
    if (!mysqli_query($mysqli, $sql)) {
        echo "<h1>something is wrong: $sql: $mysqli->error</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access MySQL database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/7abd660109.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="title has-text-centered has-text-primary">TODO List</h1>

        <div class="content">
            <ul>
                <?php
                $result = mysqli_query($mysqli, "select * from $tableName");
                $todos = mysqli_fetch_all($result);
                ?>
                <?php foreach ($todos as $todo) : ?>
                    <?php [$content, $done] = $todo; ?>
                    <li>
                        <a href="<?= $_SERVER["SCRIPT_NAME"] . "?action=toggle&done=$done&content=$content" ?>">
                            <span class="icon <?= $done ? 'has-text-success' : 'has-text-warning' ?>">
                                <i class="fas <?= $done ? 'fa-check-square' : 'fa-square' ?>">
                                </i>
                            </span>
                        </a>
                        <?= $content ?>
                        <a class="button is-small is-danger" href="<?= $_SERVER["SCRIPT_NAME"] . "?action=delete&content=$content" ?>">
                            <span class="icon is-small"><i class="fas fa-times"></i></span>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
        <form action="" method="POST">
            <input type="hidden" name="action" value="add_todo">
            <div class="field">
                <label for="todo" class="label">Add new todo</label>
                <div class="control">
                    <input id="todo" name="todo" type="text" class="input" required autofocus>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php
mysqli_close($mysqli);
?>