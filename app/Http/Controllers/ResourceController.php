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
            'timeout' => 10
        ]);

        $json = json_decode($res->getBody(), true);
        return $json;
    }

    public function storeImage(Request $request)
    {
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/image/upload';
        $client = new Client();

        if(request('avatar')) {
            $file = request('avatar');
            $file_path = $file->getPathname();
            $file_mime = $file->getMimeType('image');
            $file_uploaded_name = $file->getClientOriginalName();
            $response = $client->request("POST", $url, [
                'headers' => $headers,
                'timeout' => 10,
                'multipart' => [
                    [
                        'name' => 'avatar',
                        'filename' => $file_uploaded_name,
                        'Mime-Type' => $file_mime,
                        'contents' => fopen($file_path, 'r'),
                    ],
                ]
            ]);
        }

        if(request('artwork')){
            $file = request('artwork');
            $file_path = $file->getPathname();
            $file_mime = $file->getMimeType('image');
            $file_uploaded_name = $file->getClientOriginalName();
            $response = $client->request("POST", $url, [
                'headers' => $headers,
                'timeout' => 10,
                'multipart' => [
                    [
                        'name' => 'artwork',
                        'filename' => $file_uploaded_name,
                        'Mime-Type' => $file_mime,
                        'contents' => fopen($file_path, 'r'),
                    ],
                ]
            ]);
        }

        return "upload succ";
    }
}
