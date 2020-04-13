<?php

namespace curl;

class Curl{
    public function getOnlySite($url)
    {
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL            => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => false,

            )
        );
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    public function postWithData($url, $array)
    {
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL            => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => TRUE,
                CURLOPT_POSTFIELDS => $array

            )
        );
        var_dump($array);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}