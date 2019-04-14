<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client as GuzzleClient;

use Illuminate\Http\Request;

class SkuController extends Controller
{
    public function deleteSku()
    {
        $client = new GuzzleClient();

        $response = $client->get('http://041349a6.ngrok.io/deleteAfterPay/1234');

        return ('hola');

    }
}
