<?php
header("Content-Type:text/html; charset=utf-8");

$applist = array();
$applist['url'] = 'https://play.google.com/store/apps/details?id=com.google.android.apps.translate&hl=zh_TW';

$html = file_get_contents($applist['url']);

$applist['name'] = strip_tags(tag_content($html, '<div class="document-title" itemprop="name">', "</div>"));

$applist['cover'] = tag_content($html, '<div class="cover-container">', "</div>");
preg_match('/<img(.*)src(.*)=(.*)"(.*)"/U', $applist['cover'], $result);
$applist['cover'] = array_pop($result);

file_put_contents("app.png", file_get_contents($applist['cover']));

$applist['company'] = tag_content($html, '<a class="document-subtitle primary"', "</a>");
$applist['company'] = strip_tags('<a class="document-subtitle primary"'.$applist['company']."</a>");

$applist['genre'] = tag_content($html, '<span itemprop="genre">', "</span>");

$applist['intro'] = tag_content($html, '<div class="id-app-orig-desc">', "</div>");

var_dump($applist);

function tag_content($html, $start, $end)
{
	$html = str_replace($start, "", strstr($html, $start));
	return strstr($html, $end, true);
}

?>