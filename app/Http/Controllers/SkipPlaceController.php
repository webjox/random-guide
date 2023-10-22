<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

class SkipPlaceController extends Controller
{
    public function __invoke(): void
    {
        $user = auth()->user();
        $rating = $user->rating;

        if ($rating > 0) {
            $user->update([
                'rating' => $rating - rand(1, 5),
            ]);
        }
    }
}
