<?php
function encode_rle(string $str)
{
    if (!ctype_alpha($str)) {
        throw new InvalidArgumentException('Non-alphabetic characters detected');
    }

    $encode = '';
    $prevChar = $str[0];
    $count = 0;

    foreach (str_split($str) as $char) {
        if ($char === $prevChar) {
            $count++;
        } else {
            $encode .= ($count > 1 ? $count : '') . $prevChar;
            $prevChar = $char;
            $count = 1;
        }
    }

    $encode .= ($count > 1 ? $count : '') . $prevChar;

    return $encode;
}
?>