<?php
// Returns RSS feed as XML
// Approach 2 - Accept URL as an argument, eg:

// $ php feed2.php https://anchor.fm/s/2d0cded8/podcast/rss

if(isset($argv[1])) echo file_get_contents($argv[1]);