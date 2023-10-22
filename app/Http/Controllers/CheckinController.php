<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Inertia\Inertia;
use Inertia\Response;

class CheckinController extends Controller
{
    public function __invoke(Place $place): Response
    {
        $place->update([
            'is_confirmed' => true,
        ]);

        $user = auth()->user();
        $rating = $user->rating;
        $user->update([
            'rating' => $rating + rand(1, 10),
        ]);

        return Inertia::render('Welcome', [
            'user' => $user,
        ]);
    }
}
