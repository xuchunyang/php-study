<?php
print_r(SQLITE3::version());

$db = new \SQLite3("./hello.sqlite", SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);

var_dump($db->querySingle("SELECT 42"));

var_dump($db->querySingle("SELECT * from user"));
var_dump($db->querySingle("SELECT * from user", true));
var_dump($db->query("select * from user"));

$result = $db->query("select * from user");
while ($row = $result->fetchArray()) {
    print_r($row);
}

echo "===\n";

$stmt = $db->prepare("SELECT * from user where name = :name");
$stmt->bindValue(":name", "tom", SQLITE3_TEXT);
$result = $stmt->execute();
print_r($result->fetchArray());

echo "===\n";

$db->close();
