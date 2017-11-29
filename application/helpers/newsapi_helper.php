<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * @author: Mohd Belal
 * Usage: All News API Helper function 
 */


if (!function_exists('get_news_api_home_data')) {

    function get_news_api_home_data() {

        //Calling NewsAPI for getting the news
        // Top News from All Sources and Regions

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://newsapi.org/v2/top-headlines?language=en&apiKey=7bb81315cc43465588c22a3b9e33a06b",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 84299725-26f2-ea03-6053-ff2f49468254"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        $res = json_encode(json_decode($response)->articles);

        curl_close($curl);

        if ($err) {
            return ("cURL Error #:" . $err);
        } else {
            return $res;
        }
    }

}

