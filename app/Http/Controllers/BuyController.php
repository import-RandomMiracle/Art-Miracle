<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BuyController extends Controller
{
   public function buyArtwork($artwork_id){
       $headers = [
           'Authorization' => 'Bearer ' . $_COOKIE['token'],
           'Accept' => 'application/json',
       ];

       $url = config('services.api.address') . '/api/buy/artwork';
       $client = new Client();
       $res = $client->request('POST', $url, [
           'headers' => $headers,
           'timeout' => 10,
           'body' => ['artist_id' => $artwork_id]
       ]);
   }
}
