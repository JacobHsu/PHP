<?php
$url = 'http://username:password@hostname/path?arg=value#anchor';
echo $url."<br>\n";;
print_r(parse_url($url));
echo parse_url($url, PHP_URL_PATH);

echo "<br>\n";
echo "<br>\n";

$url = '//www.example.com/path?googleguy=googley';
echo $url."<br>\n";;
// Prior to 5.4.7 this would show the path as "//www.example.com/path"
var_dump(parse_url($url));


?>