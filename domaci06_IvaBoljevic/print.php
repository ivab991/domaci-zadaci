<?php
    $result = array();
    function print_array($array, &$results) {
        $results[] = $array;
        if ($array >= 13)
            return;
        
        print_array($array + 1, $results);
    }
    $array = 3;
    print_array($array, $results);
    echo "<pre>", print_r($results, true), "</pre>";