<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdao Dictionary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>

<body>
    <div class="container">
        <h1 class="title has-text-centered">Youdao Dictionary</h1>
        <div class="block">
            <form action="" method="POST">
                <div class="field">
                    <label class="label" for="input">Input</label>
                    <div class="control">
                        <input class="input" type="text" name="input" id="input" required>
                    </div>
                </div>
                <div class="field is-grouped is-grouped-centered">
                    <div class="control">
                        <button type="submit" class="button is-primary" name="submit">Translate</button>
                        <button type="submit" class="button is-link" name="submit">Translate</button>
                    </div>
                </div>
            </form>
        </div>

        <?php if (isset($_POST['submit'])) : ?>
            <pre>
            <?php
            include("./youdao-api.php");

            $result = youdao($_POST['input']);
            echo $result;
            ?>
        </pre>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    const $pre = document.querySelector("pre");
                    $pre.textContent = JSON.stringify(JSON.parse($pre.textContent), null, 4);
                });
            </script>
        <?php endif; ?>
    </div>

</body>

</html>