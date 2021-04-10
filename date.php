<div class="container">
    <h1><?= date("Y-m-d h:i:sa") ?></h1>
    <pre><strong>Cookie: </strong><?= var_dump($_COOKIE) ?></pre>
    <pre><strong>ENV:    </strong><?= var_dump($_ENV) ?></pre>
    <pre><strong>SESSION:</strong><?= var_dump($_SESSION) ?></pre>
    <pre><strong>FILES:  </strong><?= var_dump($_FILES) ?></pre>
    <pre><strong>SERVER: </strong><?= var_dump($_SERVER) ?></pre>
</div>

<style>
    body {
        margin: 0;
        line-height: 1.6;
    }

    .container {
        max-width: 40em;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
    }

    pre {
        margin: 1em 0;
        padding: 1em 2em;
        background: #eee;
        border-radius: 0 1em 1em 0;
        position: relative;
        border-left: 3px solid blue;
        overflow-x: visible;
    }

    pre:hover {
        box-shadow: 0 0 5px #333;
    }

    pre:hover::after {
        content: "PHP";
        position: absolute;
        right: 1em;
        top: 5px;
    }
</style>