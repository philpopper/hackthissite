<?php

$ascii_to_morse = [
	'45' => '-....-',
	'44' => '--..--',
	'31' => '/'
];

$morse_string = '';

// create image from png
$image = imagecreatefrompng('image.png');
list($width, $height) = getimagesize('image.png');
echo "width: " . $width . "<br />";
echo "height: " .  $height . "<br /><br />";

// loop over pixels and echo the white pixels
$offset = 0;
for ($y = 0; $y <= $height-1; $y++)
{

	for ($x = 0; $x <= $width-1; $x++)
	{
		$color = imagecolorat($image, $x, $y);
		if($color == 1)
		{
			// add to morse string
			echo $offset;
			$morse_string = $morse_string . $ascii_to_morse[$offset] . ' ';

			// reset offset when white pixel is found
			$offset = 0;
		}
		else
		{
			$offset++;
		}

	}

}

echo '<br />';
echo $morse_string;

?>