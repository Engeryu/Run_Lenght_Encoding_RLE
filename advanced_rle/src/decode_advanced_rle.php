<?php
/**
 * @Author: Engeryu
 * @Date:   2018-09-13 09:32:49
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 22:25:25
 */

function decode_advanced_rle(string $path_to_encode, string $result_path) {
    // Check if the input file exists
    if (!file_exists($path_to_encode)) {
        return "Error: File to decode not found.";
    }

    $data = file_get_contents($path_to_encode); // Read RLE-encoded data from file
    $decoded = ""; // String to store decoded data

    // Decode the RLE data
    for ($i = 0; $i < strlen($data); $i += 4) {
        $counter = (int) substr($data, $i, 2); // Extract the count
        $value = substr($data, $i + 2, 2); // Extract the value
        $decoded .= str_repeat($value, $counter); // Repeat the value based on the count
    }

    // Write the decoded data to the output file
    $open = fopen($result_path, 'w+');
    if (pathinfo($result_path, PATHINFO_EXTENSION) === 'bmp') {
        $decoded = hex2bin($decoded); // Convert hex to binary for BMP files
    } else {
        fclose($open);
        return "Error: Unsupported output format.";
    }
    fwrite($open, $decoded);
    fclose($open);

    return "Decoding completed. Output file: $result_path";
}
?>