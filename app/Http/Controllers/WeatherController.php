<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{

    public function index()
    {
        $url = //Weather URL;
        $client = new Client();
        $response = $client->request('GET',$url,[
            'query'    => [
                'url'   => 'technics/msxvili-sayofacxovrebeli-teqnika/sarecxi-manqana/indesit-e2sc-2160-w-ua-sarecxi-manqana-indeziti-135274-shps-alta'
            ]
        ]);

        $response = json_decode($response->getBody()->getContents(),true);

        $data['item'] = $response;

        return view('welcome', $data);
    }
}
