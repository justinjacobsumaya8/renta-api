<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService 
{
    public function getUser()
    {
        return Auth::guard("api")->user();
    }
}