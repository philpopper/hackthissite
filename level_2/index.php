<?php

include 'image_analyzer.php';
include 'converter.php';
include 'test.php';

morse_convert_test();

$chars = get_chars_from_white_pixels_offset();
$morse = convert_chars_to_morse($chars);
$result = convert_morse_to_readable($morse);

echo $result;

?>