<?php

namespace App\Formats;

class JSON
{
     /**
     * Load data array format from json file
     *
     * @param string  $url   Url file path or api url
     *
     * @return array
     */
    public function loadData($url)
    {
        $jsonData = file_get_contents($url);
        $decodeData = json_decode($jsonData);

        return $decodeData;
    }
}
