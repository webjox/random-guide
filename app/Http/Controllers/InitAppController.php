<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InitAppController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $vkId = $request->query('vk_user_id');

        $user = User::where(['vk_id' => $vkId])->first();
        if (null === $user) {
            $user = User::create([
                'vk_id' => $vkId,
                'rating' => 0,
            ]);
        }

        auth()->login($user);

        return to_route('home', ['user' => $user]);
    }
}
