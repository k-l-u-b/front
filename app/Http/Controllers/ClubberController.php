<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ClubberController extends Controller
{
    public function getClubbers()
      {
        $client = new Client(); //GuzzleHttp\Client
        $response = $client->request('GET', env('API_URL').'clubbers');
        $clubbers = json_decode($response->getBody()->getContents());

        return view('clubbers', ['clubbers' => $clubbers]);
      }
}
