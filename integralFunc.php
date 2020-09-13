<?php

function integral($f, $a, $b) {
    $result = 0;
    $eps = 0.001;
    eval("\$f = function (\$x = 0) { return {$f}; };");
    for ($x = $a; $x < $b; $x += $eps) {
        $result += $eps * $f($x);
    }
    return $result;
}

