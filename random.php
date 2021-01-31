<?php 
// Returns a randomized string containing letters of the alphabet
// shuffle() was unsuitable for use as a one liner. 
echo str_shuffle(implode(range('a', 'z')));