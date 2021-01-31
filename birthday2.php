<?php
// Approach 2 - Pass in Username as an argument, eg:

// $ php birthday2.php mrdb303

echo (isset($argv[1]))? "\nHappy Birthday to You\nHappy Birthday to You\nHappy Birthday dear ".$argv[1]."\nHappy Birthday to You\n":"\nPlease input your username as an argument";