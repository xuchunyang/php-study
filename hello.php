<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "<h1>Hello, PHP</h1>";
    echo "<hr>";
    echo "<p>I'm learning PHP!</p>";

    ?>

    <hr>

    <?php

    echo "<ul>";
    for ($i = 0; $i < 10; $i++) {
        echo "<li> $i </li>";
    }
    echo "</ul>";

    ?>

    <?php

    $now = time();
    echo "<p>Unix time: $now</p>";
    ?>


    <?php
    echo "<h1> $now </h1>";
    ?>

    <?php
    $now_human = date("Y-m-d H:i:s", $now);
    echo "<p>时间：$now_human.</p>";
    ?>

    <?php

    function hello()
    {
        echo "<p>Hello world</p>";
    }

    hello();
    hello();
    hello();

    ?>

    <?php

    function greet($name)
    {
        echo "<p>Hello, $name!</p>";
    }

    greet("xcy");
    greet("tom");

    function hr()
    {
        echo "<hr>";
    }

    hr();

    echo "<ol>";
    $names = ["Alice", "Bob", "Carry", "Dick"];
    foreach ($names as $name) {
        echo "<li>$name</li>";
    }
    echo "</ol>";
    ?>

    <?php

    $myName = "xu chunyang";
    // 字符串命令

    ?>


    <?php echo $myName ?>
    <?= $myName ?>

    <?php

    function h1($s)
    {
        echo "<h1>$s</h1>";
    }

    h1("Working with Strings");

    $myName = "徐春阳";

    h1($myName);


    function p($tag, $content, $prefix = null)
    {
        // todo 如何比较字符串, strcmp
        echo "<$tag>$content</$tag>";
    }

    $aBool = true;
    p("p", "true is $aBool");
    $aBool = false;
    p("p", "false is $aBool");
    ?>

    <?php

    p("h1", "Learning PHP Strings");
    echo "<s>plain text</s>";

    $name = "Xu Chunyang";

    p("p", strtolower($name));
    p("p", strtoupper($name));

    p("p", strlen("Xu Chunyang"));
    p("p", strlen("徐春阳"));

    for ($i = 0; $i < strlen($name); $i++) {
        p("p", $name[$i]);
    }

    $name[0] = 'B';
    p("p", $name);

    str_replace("Xu", "徐", $name);
    p("p", $name);
    p(
        "p",
        str_replace("Bu", "徐", $name)
    );

    p("p", substr("hello world", 0, 4));

    ?>

    <?php

    p("h1", "Working with PHP numbers");

    // 整数
    echo 42;
    // 小鼠
    echo -42.2;
    echo 2 ** 3;
    echo 1 / 2;
    echo 1 / 3;
    echo 10 % 3;

    echo sqrt(81);
    echo abs(-1), abs(23);
    echo max(1, 2, 3, 4, 5);

    function foo($n1, $n2, ...$ns)
    {
        echo $n1;
        echo $n2;
        echo $ns;
        print_r($ns);
    }

    echo "<br>";
    foo(1, 2, 3, 4);

    ?>

    <?php

    echo "<pre>";
    print_r($_SERVER);
    echo "\n";
    print_r($_REQUEST);
    // echo "Hello, $_GET['name']!";
    echo $_GET['name'];
    echo "</pre>";

    ?>

    Your name is <?= $_GET["name"] ?>.
    Your age is <?= $_GET["age"] ?>.


    <div class="container">
        <form action="hello.php">
            <label for="name">Name: <input type="text" name="name" id="name" placeholder="Your name"></label>
            <label for="age">Age: <input type="number" name="age" id="age" placeholder="Your age"></label>
            <input type="submit">
        </form>
    </div>

    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>

</body>

</html>