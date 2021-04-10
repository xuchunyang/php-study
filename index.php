<ul>
    <?php
    if ($handle = opendir(".")) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry == "." || $entry == "..") continue;
            if ($entry == "index.php") continue;
            if (pathinfo($entry)['extension'] != 'php') continue;

            echo "<li> <a href='./$entry'>$entry</a> </li>";
        }
    }
    ?>
</ul>