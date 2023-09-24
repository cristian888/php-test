<?php

$x = 5;
$y = 10;
//heredoc
$text = <<<TEXT
    Line 1 = $x
    Line 2 = $y
TEXT;

echo nl2br($text);
