<?php
$keys = ['first', 'second', 'third'];
$values = ['dinosaur', 'pig', 'platypus'];
$keysAndValues = '';
for ($i = 0; $i < count($keys); $i++)
{
    $keysAndValues .= " {$keys[$i]} => {$values[$i]}";
    if ($i < count($keys) - 1)
    {
        $keysAndValues .= ', ';
    }
    else
    {
        $keysAndValues .= '.';
    }
}
print_r($keysAndValues);
?>