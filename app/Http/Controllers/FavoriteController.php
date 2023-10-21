<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class FavoriteController extends Controller
{
    /**
     * Display favorites place user
     */
    public function index(): Response
    {
        return Inertia::render('Favorite/Index');
    }
}
