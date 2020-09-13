<?php

require_once('equation.php');
require_once("integralFunc.php");
require_once("integrals.php");


// print_r(line(1, 4));
// print_r(square(1,4,3));
// print_r(cube(5, -8, -8, 5

// print_r(integral('f2($x)', 1, 4)); 
// print_r(integral('f3($x)', 0, pi()));
print_r(integral('f4($x)', pi() / 4, pi()));