<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Ixudra\Curl\Facades\Curl;

class DataApiController extends Controller
{
    public function index()
    {
        // $response = json_decode(Curl::to('Get', 'https://api.github.com/'));
        // echo $response;
        // // dd($result);  
        // return view('data', compact('response', 'result'));

        $url = "http://localhost:2000/master-pedagang/pedagang-alamat";
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $url);

        $statusCode = $response->getStatusCode();
        $result = json_decode($response->getBody());

        return view('data', compact('result'));
    }
}
