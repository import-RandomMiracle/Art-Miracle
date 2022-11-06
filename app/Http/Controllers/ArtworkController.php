<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ArtworkController extends Controller
{
    public static function editArtwork(string $artworkId, float $price, string $description, string $category) {
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/' . 'artworks/' . $artworkId;
        $client = new Client();

        if ($_POST['edit']) {
            $res = $client->request('POST', $url, [
                'headers' => $headers,
                'timeout' => 10,

                'body' => [
                    'price' => $price,
                    'description' => $description,
                    'categories' => $category,
                ]
            ]);
        } else {
            $res = $client->request('DELETE', $url, [
                'headers' => $headers,
                'timeout' => 10
            ]);
        }

        $json = json_decode($res->getBody(), true);
        return $json;
    }
}
