<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\User;
use App\Models\UserPlace;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SavingPlaceController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $response = $request->input('response');
        $is_confirmed = $request->boolean('is_confirmed');

        $user = auth()->user();

        $addressJson = json_encode($response['address_details']);

        $place = Place::where('longitude', $response['pin']['0'])
            ->where('latitude', $response['pin']['1'])
            ->first();

        if (is_null($place)) {
            $place = new Place();

            $place->data = $addressJson;
            $place->name = $response['name'];
            $place->type = $response['type'];
            $place->longitude = $response['pin']['0'];
            $place->latitude = $response['pin']['1'];

            $place->save();
        }

        $userPlace = new UserPlace();
        $userPlace->user_id = $user->id;
        $userPlace->place_id = $place->id;
        $userPlace->is_confirmed = $is_confirmed;
        $userPlace->save();

        return Inertia::render('Navigator', [
            'place' => $place,
        ]);
    }
}
