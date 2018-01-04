<?php
/* Реализуйте функцию isPowerOfThree которая определяет,
является ли переданное число натуральной степенью тройки.
Например число 27 это третья степень (3^3), а 81 это четвертая (3^4).

Пример:

isPowerOfThree(1); // true (3^0)
isPowerOfThree(3); // true
isPowerOfThree(4); // false
isPowerOfThree(9); // true

*/

namespace App\Solution;

// BEGIN (write your solution here)
function isPowerOfThree($num)
{
    if (3**log($num, 3)==$num) {
        return true;
    } else {
        return false;
    }
}

// END
var_dump(isPowerOfThree(10));
