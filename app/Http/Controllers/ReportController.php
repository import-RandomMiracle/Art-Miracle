<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report($reportable_id,$reportable_type,$description){
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/reports';
        $client = new Client();
        $res = $client->request('POST', $url, [
            'headers' => $headers,
            'timeout' => 10,
            'body' => ['reportable_id' => $reportable_id,
                'reportable_type' => $reportable_type,
                'description' => $description]
        ]);
    }

    public function feedback(){
        $headers = [
            'Authorization' => 'Bearer ' . $_COOKIE['token'],
            'Accept' => 'application/json',
        ];

        $url = config('services.api.address') . '/api/reports';
        $client = new Client();
        $res = $client->request('POST', $url, [
            'headers' => $headers,
            'timeout' => 10,
            'body' => ['reportable_id' => $reportable_id,
                'reportable_type' => $reportable_type,
                'description' => $description]
        ]);
    }
}
