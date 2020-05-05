<?php

include 'wordlist_reader.php';
include 'compare_tool.php';

$scrambled_words = getScrambledWords();
$wordlist = getWordlist();

$unscrambled_words = compareWords($scrambled_words, $wordlist);

echo $unscrambled_words;

?>