<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests;
use App\Models\User;
use App\Models\Place;
use App\Facades\LocationProcessing;

class PlaceListController extends Controller
{
    public function placesList($user_id = 114)
    {
        $user = User::find($user_id);
        $places = $user->places()->with('placesInfo')->get();
    }

    public function toggleFavorite($placesInfoId, $is_favorite): void
    {
        $placesInfo = UserPlaces::find($placeInfoId);
        
        if($is_favorite){
            $placesInfo->is_favorite = false;
        } else {
            $placesInfo->is_favorite = true;
        }

        $placesInfo->save();
    }
}
