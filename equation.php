<?php

function sgn ($a) {
    if ($a > 0) {
        return 1;
    } elseif($a < 0) {
        return -1;
    } else {
        return 0;
    }
}

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


function cube($x1 = 0, $x2 = 0, $x3 = 0, $x4 = 0) {
    if (is_numeric($x1) && is_numeric($x2) && is_numeric($x3) && is_numeric($x4)) {
        if ($x1 === 0) {
            return [(square($x2, $x3, $x4))];
        } elseif ($x1 != 0) {
            //формула Виета
            $a = $x2/$x1;
            $b = $x3/$x1;
            $c = $x4/$x1;
            $Q = ($a * $a - 3 * $b) / 9;
            $R = (2 * $a * $a * $a - 9 * $a * $b + 27 * $c) / 54;
            $S = $Q * $Q * $Q - $R * $R;

            if ($S > 0) {
                $fi = 1 / 3 * acos($R / (pow($Q, 3 / 2)));

                $x1 = (-2) * pow($Q, 1 / 2) * cos($fi) - $a / 3;
                $x2 = (-2) * pow($Q, 1 / 2) * cos($fi + 2 / 3 * pi()) - $a / 3;
                $x3 = (-2) * pow($Q, 1 / 2) * cos($fi - 2 / 3 * pi()) - $a / 3;

                return [
                    "x1" => ("$x1"),
                    "x2" => ("$x2"),
                    "x3" => ("$x3"),
                ];
            }

            if ($S < 0) {
                
                if ($Q > 0) {
                    $fi = 1 / 3 * acosh(abs(($R) / (pow($Q, 3 / 2))));
                     $x1 = -2 * sgn($R) * pow($Q, 1 / 2) * cosh($fi) - $a / 3;
                     $Re = sgn($R) * pow($Q, 1 / 2) * cosh($fi) - ($a / 3);
                     $Im =pow(3, 1 / 2) * pow($Q, 1 / 2) * sinh($fi);
                     return [
                         "x1" => ("$x1"),
                         "x2" => ("$Re + i * $Im"),
                         "x3" => ("$Re - i * $Im"),
                     ]; 
                 }

                if ($Q < 0) {
                   $fi = 1 / 3 * acosh(abs(($R) / (pow(abs($Q), 3 / 2))));
                    $x1 = -2 * sgn($R) * pow(abs($Q), 1 / 2) * sinh($fi) - $a / 3;
                    $Re = sgn($R) * pow(abs($Q), 1 / 2) * sinh($fi) - ($a / 3);
                    $Im =pow(3, 1 / 2) * pow(abs($Q), 1 / 2) * cosh($fi);
                    return [
                        "x1" => ("$x1"),
                        "x2" => ("$Re + i * $Im"),
                        "x3" => ("$Re - i * $Im"),
                    ]; 
                }

                if ($Q === 0) {
                    $x1 = (-1) * pow(($c - ($a * $a * $a / 27)), 1 / 3) - $a / 3;
                    $Re = (-1) * ($a + $x1) / 2;
                    $Im = 1 / 2 * pow(abs(($a - 3 * $x1) * ($a + $x1) - 4 * $b), 1 / 2);
                    return [
                        "x1" => ("$x1"),
                        "x2" => ("$Re + i * $Im"),
                        "x3" => ("$Re - i * $Im"),
                    ]; 
                 }
            }

            if ($S === 0) {
                $x1 = (-2) * pow($R, 1 / 3) - $a / 3;
                $x2 = pow($R, 1 / 3) - $a / 3;

                return [
                    "x1" => $x1,
                    "x2" => $x2,
                ];
            }
        } 
        return [];
    }
    return [];
}