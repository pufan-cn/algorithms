<?php
/**
 * Created by PhpStorm.
 * User: pufan
 * Date: 2019/6/22
 * Time: 下午4:00
 */
function arrays_are_similar($a, $b) {
    // if the indexes don't match, return immediately
    if (count(array_diff_assoc($a, $b))) {
        return false;
    }
    // we know that the indexes, but maybe not values, match.
    // compare the values between the two arrays
    foreach($a as $k => $v) {
        if ($v !== $b[$k]) {
            return false;
        }
    }
    // we have identical indexes, and no unequal values
    return true;
}