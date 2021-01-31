<?php 
// Approach 2 - Accept array as an argument, eg:
// $ php arrcount2.php 'Fred','Tom','Tom','Cuthbert'

if(isset($argv[1]))print_r(array_count_values(explode(',',$argv[1])));