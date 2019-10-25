<?php
class Tyrion extends Lannister
{
    function sleepWith($arg)
    {
        if ($arg instanceof Jaime)
        {
            print("Not even if I'm drunk !" . PHP_EOL);
        }
        elseif ($arg instanceof Sansa)
        {
            print("Let's do this." . PHP_EOL);
        }
        elseif ($arg instanceof Cersei)
        {
            print("Not even if I'm drunk !" . PHP_EOL);
        }
    }
}
?>