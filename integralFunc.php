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

function integrals($f = null, $x1 = 0, $x2 = 0) {
    $eps = 0.01;
    $result = 0;
    eval("\$f = function (\$x = 0) { return {$f}; };");
    for ($i = $x1; $i <= $x2; $i+= $eps) {
        $result += $eps * (abs($f($i)) + abs($f($i + $eps))) / 2;
    }
    return $result;
}
