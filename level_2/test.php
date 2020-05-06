<?php

function morse_convert_test(): void
{
	$morse_string = ".- / - . ... -";
	$morse = explode(' ', $morse_string);
	$result = convert_morse_to_readable($morse);

	if($result !== 'a test')
	{
		die('Morse to readable converter is broken!');
	}
}

?>