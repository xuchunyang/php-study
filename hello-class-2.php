<pre style="font-size: 2em;">
<?php
class Person
{
    const KIND = "HUMAN";

    static $id = 1;

    public static function hello()
    {
        print "I am static";
    }
}

echo Person::KIND . "\n";
echo Person::$id . "\n";
Person::hello();
?>
</pre>