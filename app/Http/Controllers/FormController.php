<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FormController extends Controller
{
    public function viewPE9()
    {
        $client = new Client();
    	$response = $client->request('GET', env('NOMINETION_API'));
    	$statusCode = $response->getStatusCode();
        // $body = $response->getBody();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        //dd($body);
        return view('pe9')->with('Fdata',$obj);
        
    }

    public function viewPE30()
    {
        $client = new Client();
    	$response = $client->request('GET', env('NOMINETION_API'));
    	$statusCode = $response->getStatusCode();
        // $body = $response->getBody();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        //dd($body);
        return view('pe30x1x2')->with('Fdata',$obj);
        
    }
}
