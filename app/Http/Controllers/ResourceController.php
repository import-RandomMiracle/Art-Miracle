<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use mysql_xdevapi\Exception;

class ResourceController extends Controller
{
//    function __construct()
//    {
//        if($_COOKIE['token'])
//    }

    public static function getJson($name)
    {
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/' . str($name);
        $client = new Client();
        $res = $client->request('GET', $url, [
            'headers' => $headers,
            'timeout' => 20
        ]);

        $json = json_decode($res->getBody(), true);
        return $json;
    }
}
