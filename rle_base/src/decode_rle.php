<?php
/**
 * @Author: Engeryu
 * @Date:   2018-09-13 08:42:33
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 22:22:29
 */

function decode_rle(string $str)
{
    if (!preg_match('/^([0-9]*[a-zA-Z])*$/', $str)) {
        throw new InvalidArgumentException('Invalid RLE string');
    }

    $decode = '';
    preg_match_all('/([0-9]*)([a-zA-Z])/', $str, $matches);

    $length = count($matches[0]);
    for ($i = 0; $i < $length; $i++) {
        $count = $matches[1][$i] === '' ? 1 : (int) $matches[1][$i];
        $letter = $matches[2][$i];

        $decode .= str_repeat($letter, $count);
    }

    return $decode;
}
?>