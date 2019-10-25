<?php
class Jaime extends Lannister
{
    function sleepWith($arg)
    {
        if ($arg instanceof Tyrion)
        {
            print("Not even if I'm drunk !" . PHP_EOL);
        }
        elseif ($arg instanceof Sansa)
        {
            print("Let's do this." . PHP_EOL);
        }
        elseif ($arg instanceof Cersei)
        {
            print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        }
    }
}
?>