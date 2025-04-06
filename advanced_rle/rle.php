<?php
/**
 * @Author: Engeryu
 * @Date:   1970-01-01 01:00:00
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 21:52:53
 */

// Including the encoding and decoding functions
require __DIR__ . "/src/encode_advanced_rle.php";
require __DIR__ . "/src/decode_advanced_rle.php";

// Test for the encoding function
echo "\n\n===Test encode_advanced_rle===\n\n";
$result_encode = encode_advanced_rle(__DIR__ . "/src/Image.bmp", __DIR__ . "/src/EncodedImage");
echo $result_encode . "\n";

// Test for the decoding function
echo "\n\n===Test decode_advanced_rle===\n\n";
$result_decode = decode_advanced_rle(__DIR__ . "/src/EncodedImage", __DIR__ . "/src/Image_decoded.bmp");
echo $result_decode . "\n";
?>