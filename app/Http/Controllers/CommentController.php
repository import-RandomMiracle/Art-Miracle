<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($description){
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/comments';
        $client = new Client();
        $res = $client->request('POST', $url, [
            'headers' => $headers,
            'timeout' => 10,
            'body' => ['description' => $description]
        ]);
    }
}
