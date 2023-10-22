<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class NavigatorController extends Controller
{
    public function __invoke(): Response
    {
        $user = auth()->user();
        $currentPlace = $user->places()
            ->where('is_confirmed', 0)
            ->latest('user_places.created_at')
            ->first();

        return Inertia::render('Navigator', [
            'place' => $currentPlace,
        ]);
    }
}
