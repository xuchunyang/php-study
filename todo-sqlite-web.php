<?php
class Todo
{
    public function __construct($id, $content, $done)
    {
        $this->id = $id;
        $this->content = $content;
        $this->done = $done;
    }
}

class TodoList
{
    public function __construct()
    {
        $this->db = new \SQLite3("todo.sqlite");
        $this->db->exec("create table if not exists todos (id INTEGER, content TEXT, done BOOL)");
        $this->read();
    }

    public function read()
    {
        $todos = [];
        $result = $this->db->query("SELECT * from todos");
        if ($result === false) {
            throw $this->db->lastErrorMsg();
        }
        while ($row = $result->fetchArray()) {
            $todos[] = new Todo($row["id"], $row["content"], $row["done"]);
        }
        $this->todos = $todos;
    }

    private function nextId()
    {
        // 从 1 开始
        if (count($this->todos) === 0) return 1;

        return max(array_map(function ($todo) {
            return $todo->id;
        }, $this->todos));
    }

    public function add($content)
    {
        $stmt = $this->db->prepare("INSERT INTO todos (id, content, done) VALUES (:id, :content, :done)");
        $stmt->bindValue(":id", $this->nextId(), SQLITE3_INTEGER);
        $stmt->bindValue(":content", $content, SQLITE3_TEXT);
        $stmt->bindValue(":done", false, SQLITE3_INTEGER);
        $stmt->execute();

        $this->read();
    }

    public function close()
    {
        $this->db->close();
    }
}

$todolist = new TodoList();
?>

<!-- Handle Post -->
<?php
if (isset($_POST["content"])) {
    $todolist->add($_POST["content"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App via PHP and SQLite</title>
</head>

<body>

    <h1>Todos</h1>
    <ul>
        <?php foreach ($todolist->todos as $todo) : ?>
            <li><?= $todo->content ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Add Todo</h2>
    <form action="" method="POST">
        <section>
            <label for="content">Content</label>
            <input type="text" id="content" name="content">
        </section>
        <button type="submit">Add</button>
    </form>

</body>

</html>

<?php
$todolist->close();
