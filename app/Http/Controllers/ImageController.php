<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function storeImage(Request $request)
    {
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/image/upload';
        $client = new Client();

        if (request('avatar')) {
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

        if (request('artwork')) {
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

    public function downloadImage($artwork_id)
    {
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/download';
        $client = new Client();
        $res = $client->request('POST', $url, [
            'headers' => $headers,
            'timeout' => 10,
            'body' => ['artwork_id' => $artwork_id]
        ]);
    }

    public function sendImage($artwork_id,$user_id){
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/gift/artwork';
        $client = new Client();
        $res = $client->request('POST', $url, [
            'headers' => $headers,
            'timeout' => 10,
            'body' => ['artwork_id' => $artwork_id,
                        'user_id' => $user_id]
        ]);
    }
}
