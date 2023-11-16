<?php

namespace App\Http\Controllers\Auth;

use App\Events\Users\UserRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request)
    {
        //
        $input = $request->validated();
        $user = User::create($input);

        UserRegistered::dispatch($user);

        return new UserResource($user);
    }
}
