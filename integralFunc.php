<?php

function integral($f = 0, $a = 0, $b = 0) {
    $result = 0;
    $eps = 0.001;
    eval("\$f = function (\$x = 0) { return {$f}; };");
    for ($x = $a; $x < $b; $x += $eps) {
        $result += $eps * $f($x);
    }
    return $result;
}


function volume($f, $a, $b) {
    $S = 0;
    $eps = 0.001;
    eval("\$f = function (\$x = 0) { return {$f}; };");
    for ($x = $a; $x < $b; $x += $eps) {
        $S += pi() * $eps * $f($x)**2; 
    }
    return $S;
}
