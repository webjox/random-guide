<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class FavoriteController extends Controller
{
    /**
     * Display favorites place user
     */
    public function __invoke(User $user): Response
    {
        return Inertia::render('Favorites', [
            'favoritePlaces' => $user->places()->with('placesInfo')->get(),
        ]);
    }
}
