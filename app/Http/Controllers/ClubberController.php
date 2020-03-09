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

    public function getClubber($id)
    {
      var_dump($id); 
      $client = new Client(); //GuzzleHttp\Client
      $response = $client->request('GET', env('API_URL').'clubber/'.$id);
      $clubber = json_decode($response->getBody()->getContents());

      $response = $client->request('GET', env('API_URL').'clubber/'.$id.'/perceptions');
      $perceptions = json_decode($response->getBody()->getContents());
      $target_clubbers = [];
      foreach ($perceptions as $perception) {
        //var_dump($perception->target_clubber_id);
        $response = $client->request('GET', env('API_URL').'clubber/'.$perception->target_clubber_id);
        $target_clubber = json_decode($response->getBody()->getContents());
        //var_dump($target_clubber);
        array_push($target_clubbers,$target_clubber);
      }

      //var_dump($target_clubbers);
      return view('clubber', ['clubber' => $clubber, 'perceptions'=> $perceptions, 'target_clubbers' =>$target_clubbers]);
    }
}
