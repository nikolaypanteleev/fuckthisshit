<?php

$words = [
	'   asdf   ',
	'qweqwrtreeyeery',
	'   aSDf  ',
	'zyutjugmjnbDJKHKJHKJ',
];

//var_dump ($words);
foreach ($words as $key => $value) {
	$words[$key] = strtolower(trim($value));
}
//var_dump ($words);

$space = implode("", $words);
echo $space;