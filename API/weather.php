<?php
/**
 * Weather API
 * @see https://www.apixu.com/my/
 * @author Timur Misharin
 * version: 1.0
 * @return weather dict
 */

function weather_api()
{
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://api.apixu.com/v1/current.json?key=3532b41d2b5e44e698b173813172803&q=Ashqelon');
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
    $query = curl_exec($curl_handle);
    $weather = json_decode($query);
    print_r($weather);
    $string = json_decode($query);
    print_r($string);
    curl_close($curl_handle);
    return $string;
}

function wiki_api(){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'https://en.wikipedia.org/w/api.php');
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
    $query = curl_exec($curl_handle);
    $wiki = json_decode($query);
    print_r($wiki);
    $string = json_decode($query);
    print_r($string);
    curl_close($curl_handle);
    return $string;
}