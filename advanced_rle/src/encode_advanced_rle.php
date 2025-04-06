<?php
/**
 * @Author: Engeryu
 * @Date:   2018-09-13 09:09:12
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 22:25:04
 */

function encode_advanced_rle(string $path_to_encode, string $result_path) {
    // Check if the input file exists
    if (!file_exists($path_to_encode)) {
        return "Error: File to encode not found.";
    }

    $counter = 1; // Counter for run-length encoding
    $rle = ""; // String to store RLE data
    $file = file_get_contents($path_to_encode); // Read file contents
    $base_64 = base64_encode($file); // Convert file to base64
    $hex = bin2hex(base64_decode($base_64)); // Convert base64 to hexadecimal
    $hex_with_spaces = wordwrap($hex, 2, " ", true); // Add spaces every 2 characters
    $array = explode(" ", $hex_with_spaces); // Split into array

    // Apply run-length encoding logic
    for ($i = 0; $i < sizeof($array) - 1; $i++) {
        if ($array[$i] === $array[$i + 1]) {
            $counter++;
        } else {
            $rle .= str_pad($counter, 2, "0", STR_PAD_LEFT) . $array[$i];
            $counter = 1;
        }
    }
    $rle .= str_pad($counter, 2, "0", STR_PAD_LEFT) . $array[sizeof($array) - 1];

    // Write the RLE-encoded data to the output file
    $open = fopen($result_path, 'w+');
    fwrite($open, $rle);
    fclose($open);

    return "Encoding completed. Output file: $result_path";
}
?>