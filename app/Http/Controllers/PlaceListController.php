<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests;
use App\Facades\LocationProcessing;

class PlaceListController extends Controller
{
    public function request()
    {
        $placesRaw = Http::get('https://demo.maps.vk.com/api/places', [
            'q' => 'q=Розливное пиво; q=Пиво, ',
            'location' => '47.238385, 39.712174',
            'radius' => '10000',
        ]);

        $places = json_decode($placesRaw, true);

        $finalPlace = LocationProcessing::randomizer($places['results']);

        return Inertia::render('app', [
                'response' => $finalPlace,
        ]);
    }
}
