<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class InformationController extends Controller
{
    /**
     * Display favorites place user
     */
    public function index(): Response
    {
        return Inertia::render('Information/Index');
    }
}
