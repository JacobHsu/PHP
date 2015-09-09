<body text='%body%'>
<?php
// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
echo $bodytag;

echo "<hr>";
// Provides: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants;

echo "<hr>";
// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

//mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;

echo "<hr>";
// Provides: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
?>