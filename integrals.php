<?php

function f2($x = 0) {
    return 2 * $x + (3 / pow($x, 1 / 2));
}; // от 1 до 4, ответ 21

function f3($x = 0) {
    return sin($x / 2);
};

function f4($x = 0) {
    return sin($x) * sin(2 * $x) * sin(3 * $x);
};

