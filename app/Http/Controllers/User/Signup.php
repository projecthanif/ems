<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;

class Signup extends Controller
{
    public function store(CreateUserRequest $request)
    {
        $formData = $request->validated();

    }
}
