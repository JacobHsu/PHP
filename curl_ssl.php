<?php

$rss_content = '';
$rss_url='https://www.google.com.hk/finance/company_news?q=NASDAQ:AAPL&output=rss';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $rss_url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//禁止直接顯示獲取的內容
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
$rss_content = curl_exec($ch);
var_dump($rss_content); 
curl_close($ch);

?>