<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function getData(){

    	// Call the API
		$response = Http::get('https://justlaravel.com/wp-json/wp/v2/posts');
		$data = json_decode($response->body());
		return view('welcome')->withData($data);
    }
}
