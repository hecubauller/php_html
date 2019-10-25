#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    if (!$tab)
        exit;
    $compare = $tab;
    sort($tab);
    if ($compare == $tab)
        return (1);
    else
        return (0);
}
?>