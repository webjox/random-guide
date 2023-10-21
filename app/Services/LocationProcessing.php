<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class LocationProcessing
{
    public function randomizer(array $places): array
    {
        $randIndex = array_rand($places);

        $randPlace = $places[$randIndex];
        

        dd($randPlace);

        return $randPlace;
    }

}
