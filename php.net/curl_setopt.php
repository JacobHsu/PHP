<?php
    $url = 'https://www.microsoft.com/zh-tw/store/apps/facebook/9wzdncrfhv5g';

    // create a new cURL resource
    $ch = curl_init();

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //TRUE to return the raw output when CURLOPT_RETURNTRANSFER is used.
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)"); //The contents of the "User-Agent: " header to be used in a HTTP request.
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //FALSE to stop cURL from verifying the peer's certificate.

    // grab URL and pass it to the browser
    $html = curl_exec($ch);

    // close cURL resource, and free up system resources
    curl_close($ch);

    $data['name'] = tag_content($html, '<h1 id="page-title" class="header-small m-v-n" itemprop="name">', "</h1>");
    function tag_content($html, $start, $end)
    {
        str_replace($start, "", strstr($html, $start)); //html after <h1..> then remove <h1..>
        return strstr($html, $end, true); //html before </h1>
    }
    print_r($data); 
?>