<?php

        $fileUrl = 'https://googledrive.com/host/0B8p3dPzRohcndXRaNm1OamFXUUE';
        $postArr = array( 
        	"fileurl"=>$fileUrl,"btype"=> '360p,720p',
        	"recipient"=>'http://php/httpreq/jsonrep.php' 
        );

        $options = array(
        	CURLOPT_POSTFIELDS => http_build_query($postArr), 
        	CURLOPT_RETURNTRANSFER=>true //This will make curl_exec return the data instead of outputting
        ); 

        $ch = curl_init( 'http://127.0.0.1:8080/post'); 
        curl_setopt_array($ch, $options); 
        $result = curl_exec($ch); 
        curl_close($ch);
        echo 'result='.$result;