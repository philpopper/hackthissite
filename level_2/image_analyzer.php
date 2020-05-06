<?php



function get_chars_from_white_pixels_offset(): array
{
	$image = imagecreatefrompng('PNG.png');
	list($width, $height) = getimagesize('PNG.png');

	$chars = [];
	$offset = 0;
	$lastFound = 0;
	for ($y = 0; $y <= $height-1; $y++)
	{

	  for ($x = 0; $x <= $width-1; $x++)
	  {

	    $color = imagecolorat($image, $x, $y);
	    if($color == 1)
	    {
	      array_push($chars, chr($offset - $lastFound));
	      $lastFound = $offset;
	    }
	    
	    $offset++;

	  }
	}

	return $chars;
}

?>