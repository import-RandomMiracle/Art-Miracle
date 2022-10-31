<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResourceController extends Controller
{
    public static function getJson($name){
        $url = config('services.api.address') . str($name);
        $client = new Client();
//        dd($url);
        // bug เนื่องจากไม่ได้ส่ง token ไปยัง backend
        $res = $client->request('GET',$url,[
            'timeout' => 10
]);

        $json = json_decode($res->getBody(),true);
        return $json;
    }
}
