<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>计算器</title>
    <!-- <link href="tailwind.min.css" rel="stylesheet"> -->
</head>

<body>
    <h1 class="text-center">计算器</h1>
    <form action="">
        <input name="op1" type="number" value="<?= $_REQUEST['op1'] ?>">
        <select name="op">
            <?php
            $ops = "+-*/";
            for ($i = 0; $i < strlen($ops); $i++) {
                $selected = ($_REQUEST['op'] == $ops[$i]) ?  "selected" : "";
                echo "<option $selected> $ops[$i] </option>";
            }
            ?>
        </select>
        <input name="op2" type="number" value="<?= $_REQUEST['op2'] ?>">
        <input type="submit" value="=">
        <?php
        function calc($op1, $op, $op2)
        {
            switch ($op) {
                case '+':
                    return $op1 + $op2;
                case '-':
                    return $op1 - $op2;
                case '*':
                    return $op1 * $op2;
                case '/':
                    return $op1 / $op2;
            }

            return "<pre> ERROR: Unknown operator $op </pre>";
        }

        // echo var_dump($_REQUEST);
        // echo var_dump($_REQUEST["op1"]);
        // echo var_dump($_REQUEST["op"]);
        // echo var_dump($_REQUEST["op2"]);

        // echo var_dump(array_key_exists("op1", $_REQUEST));
        // echo var_dump(array_key_exists("op", $_REQUEST));
        // echo var_dump(array_key_exists("op2", $_REQUEST));

        if (
            array_key_exists("op1", $_REQUEST) &&
            array_key_exists("op", $_REQUEST) &&
            array_key_exists("op2", $_REQUEST)
        ) {
            $result = calc(
                intval($_REQUEST["op1"]),
                $_REQUEST["op"],
                intval($_REQUEST["op2"])
            );
            echo "<output> $result </output>";
        }
        ?>
    </form>
</body>

</html>