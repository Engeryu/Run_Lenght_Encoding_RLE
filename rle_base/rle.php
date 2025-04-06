<?php

require "src/encode_rle.php";
require "src/decode_rle.php";

echo "\n\n===Test encode_rle===\n\n";
echo encode_rle('adfdfaddz');
echo "\n";
//d'autres tests ici


echo "\n\n===Test decode_rle===\n\n";
echo decode_rle("4A3B1C2D5E");
echo "\n";
//d'autres tests ici
?>