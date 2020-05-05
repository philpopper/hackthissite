<?php

function getScrambledWords(): array
{
	$scrambled_words = file_get_contents('scrambled_words.txt');
	$scrambled_words = explode("\t", $scrambled_words);
	$i = 0;
	foreach($scrambled_words as $scrambled_word)
	{
		$scrambled_words[$i] = trim($scrambled_word);
		$i++;

	}

	return $scrambled_words;
}

function getWordlist(): array
{
	$wordlist = file_get_contents('wordlist.txt');
	$wordlist = explode("\n", $wordlist);
	$i = 0;
	foreach($wordlist as $word)
	{
		$wordlist[$i] = trim($word);
		$i++;
	}

	return $wordlist;
}

?>