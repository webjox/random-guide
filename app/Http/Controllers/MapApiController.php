<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests;

class MapApiController extends Controller
{
    public function request()
    {
        $response = Http::get('https://demo.maps.vk.com/api/types', [
            'q' => 'q=Москва Ленинградский 39с80;',

        ]);

        dd($response->body());
        dd(json_decode($response->json(), true));

        return Inertia::render('app', [
                'response' => $response,
        ]);
    }
}
