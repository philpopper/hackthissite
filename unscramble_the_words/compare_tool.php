<?php

function compareWords(array $scrambled_words, array $wordlist): string
{
	$unscrambled_words = '';

	foreach ($scrambled_words as $scrambled_word)
	{
		$char_count_scrambled_word = count_chars($scrambled_word,1);

		foreach($wordlist as $word)
		{
			$char_count_word = count_chars($word,1);

			if($char_count_scrambled_word == $char_count_word)
			{
				$unscrambled_words = $unscrambled_words . $word . ',';	
			}
		}
	}

	return cleanUpString($unscrambled_words);
}

function cleanUpString($unscrambled_words): string
{
	$unscrambled_words = rtrim($unscrambled_words, ',');
	$unscrambled_words = ltrim($unscrambled_words, ',');
	return $unscrambled_words;
}


?>