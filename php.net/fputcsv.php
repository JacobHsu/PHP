<?php

    $header = array (
        array('aaa', 'bbb', 'ccc', 'dddd')
    );
    _export($header, 'header');

    $list = array (
        array('123', '456', '789'),
        array('"aaa"', '"bbb"')
    );
    _export($list);


    function _export($list, $header = '')
    {
        if ($header)
        {
            $filename = "filename_".date("Y-m-d-his");

            header('Content-Type: text/csv; charset=utf-8');
            header("Content-disposition: filename=".$filename.".csv");
        }
        
        $fp = fopen('php://output', 'w');
        
        if ($header)
        {
            fwrite($fp,chr(0xEF).chr(0xBB).chr(0xBF)); // UTF-8 BOM
        }
        
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);
    }
?>