<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class HistoryController extends Controller
{
    /**
     * Display favorites place user
     */
    public function __invoke(): Response
    {
        $user = auth()->user();

        return Inertia::render('History', [
            'history' => $user
                ->places()
                ->select('is_confirmed', 'name', 'longitude', 'latitude', 'places.created_at')
                ->where('is_favorite', '=', 0)
                ->limit(10)
                ->get(),
        ]);
    }
}
