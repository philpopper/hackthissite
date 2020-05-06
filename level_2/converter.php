<?php

function convert_chars_to_morse($chars): array
{
	$morse_string = '';
	foreach($chars as $char)
	{
	  $morse_string = $morse_string . $char;
	}

	echo $morse_string . '<br />';

	return explode(' ', $morse_string);
}

function convert_morse_to_readable($morse): string
{
	$answer = '';
	$letter = '';
	foreach($morse as $code)
	{
	  switch($code)
	  {
	    case '.-' :
	      $letter = 'a';
	      break;
	    case '-...' :
	      $letter =  'b';
	      break;
	    case '-.-.' :
	      $letter =  'c';
	      break;
	    case '-..' :
	      $letter =  'd';
	      break;
	    case '.' :
	      $letter =  'e';
	      break;
	    case '..-.' :
	      $letter =  'f';
	      break;
	    case '--.' :
	      $letter =  'g';
	      break;
	    case '....' :
	      $letter =  'h';
	      break;
	    case '..' :
	      $letter =  'i';
	      break;
	    case '.---' :
	      $letter =  'j';
	      break;
	    case '-.-' :
	      $letter =  'k';
	      break;
	    case '.-..' :
	      $letter =  'l';
	      break;
	    case '--' :
	      $letter =  'm';
	      break;
	    case '-.' :
	      $letter =  'n';
	      break;
	    case '---' :
	      $letter =  'o';
	      break;
	    case '.--.' :
	      $letter =  'p';
	      break;
	    case '--.-' :
	      $letter =  'q';
	      break;
	    case '.-.' :
	      $letter =  'r';
	      break;
	    case '...' :
	      $letter =  's';
	      break;
	    case '-' :
	      $letter =  't';
	      break;
	    case '..-' :
	      $letter =  'u';
	      break;
	    case '...-' :
	      $letter =  'v';
	      break;
	    case '.--' :
	      $letter =  'w';
	      break;
	    case '-..-' :
	      $letter =  'x';
	      break;
	    case '-.--' :
	      $letter =  'y';
	      break;
	    case '--..' :
	      $letter =  'z';
	      break;
	    case '-----' :
	      $letter =  '0';
	      break;
	    case '.----' :
	      $letter =  '1';
	      break;
	    case '..---' :
	      $letter =  '2';
	      break;
	    case '...--' :
	      $letter =  '3';
	      break;
	    case '....-' :
	      $letter =  '4';
	      break;
	    case '.....' :
	      $letter =  '5';
	      break;
	    case '-....' :
	      $letter =  '6';
	      break;
	    case '--...' :
	      $letter =  '7';
	      break;
	    case '---..' :
	      $letter =  '8';
	      break;
	    case '----.' :
	      $letter =  '9';
	      break;
	    case '.-' :
	      $letter =  'A';
	      break;
	    case '-...' :
	      $letter =  'B';
	      break;
	    case '-.-.' :
	      $letter =  'C';
	      break;
	    case '-..' :
	      $letter =  'D';
	      break;
	    case '.' :
	      $letter =  'E';
	      break;
	    case '..-.' :
	      $letter =  'F';
	      break;
	    case '--.' :
	      $letter =  'G';
	      break;
	    case '....' :
	      $letter =  'H';
	      break;
	    case '..' :
	      $letter =  'I';
	      break;
	    case '.---' :
	      $letter =  'J';
	      break;
	    case '-.-' :
	      $letter =  'K';
	      break;
	    case '.-..' :
	      $letter =  'L';
	      break;
	    case '--' :
	      $letter =  'M';
	      break;
	    case '-.' :
	      $letter =  'N';
	      break;
	    case '---' :
	      $letter =  'O';
	      break;
	    case '.--.' :
	      $letter =  'P';
	      break;
	    case '--.-' :
	      $letter =  'Q';
	      break;
	    case '.-.' :
	      $letter =  'R';
	      break;
	    case '...' :
	      $letter =  's';
	      break;
	    case '-' :
	      $letter =  'T';
	      break;
	    case '..-' :
	      $letter =  'U';
	      break;
	    case '...-' :
	      $letter =  'V';
	      break;
	    case '.--' :
	      $letter =  'W';
	      break;
	    case '-..-' :
	      $letter =  'X';
	      break;
	    case '-.--' :
	      $letter =  'Y';
	      break;
	    case '--..' :
	      $letter =  'Z';
	      break;
	    default :
	      $letter = ' ';
	      break;
	  }
	  $answer = $answer . $letter;
	}

	return trim($answer);
}

?>