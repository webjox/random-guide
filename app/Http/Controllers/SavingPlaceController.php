<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests;
use App\Models\User;
use App\Models\Place;
use App\Models\UserPlace;
use App\Facades\LocationProcessing;


class SavingPlaceController extends Controller
{
    public function __invoke(array $response, int $userVkId, bool $is_confirmed): void
    {
        $user = User::where('vk_id', $userVkId)->first();

        if(is_null($user)){
            $user = new User;
            $user->vk_id = $userVkId;
            $user->save();
        } else {
            $user = User::where('vk_id', $userVkId)->first();
        }

        $addressJson = json_encode($response['address_details']);

        $place = Place::where('longitude', $response['pin']['0'])
        ->where('latitude', $response['pin']['1'])
        ->first();

        if(is_null($place)){
            $place = new Place;

            $place->data = $addressJson;
            $place->name = $response['name'];
            $place->type = $response['type'];
            $place->longitude = $response['pin']['0'];
            $place->latitude = $response['pin']['1'];

            $place->save();
        }

        $userPlace = new UserPlace;
        $userPlace->user_id = $user->id;
        $userPlace->place_id = $place->id;
        $userPlace->is_confirmed = $is_confirmed;
        $userPlace->save();
    }
}
