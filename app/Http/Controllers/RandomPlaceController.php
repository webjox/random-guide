<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests;

class RandomPlaceController extends Controller
{
    public function getRandomPlace()
    {
        $response = Http::get('https://demo.maps.vk.com/api/places', [
            'q' => 'q=Mail.ru; q=метро; q=55.797041,37.537830; q=210000000FE79787',
            'location' => '47.238385, 39.712174',
            'radius' => '500',

        ]);

        dd($response->body());
        dd(json_decode($response->json(), true));

        return Inertia::render('app', [
                'response' => $response,
        ]);
    }
}
