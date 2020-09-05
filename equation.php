<?php

function line($a=0, $b=0) {
    if ($a === 0 && $b === 0) {
        return [];
    } elseif ($a === 0) {
        return [];
    }
    return [-$b / $a];
}

function square($a=0, $b=0, $c=0) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        if ($a === 0 ) {
            return line($b, $c);
        }
        $d = $b*$b - 4 * $a * $c;
        if ($d > 0) {
            return [(-$b - sqrt($d)) / (2* $a), (-$b + sqrt($d)) / (2* $a)];
        } elseif ($d === 0) {
            return [-$b / (2 * $a)];
        }
    }
    return [];
}


function cube($a, $b, $c, $d) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        if ($a === 0) {}
        return square($b, $c, $d);
    }

}