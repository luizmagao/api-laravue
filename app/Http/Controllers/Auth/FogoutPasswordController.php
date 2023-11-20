<?php

namespace App\Http\Controllers\Auth;

use App\Events\ForgotPasswordRequested;
use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgoutPasswordRequest;
use App\Models\User;
use Illuminate\Support\Str;

class FogoutPasswordController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ForgoutPasswordRequest $request)
    {
        //
        $input = $request->validated();

        $user = User::query()->whereEmail($input['email'])->first();

        if (!$user) {
            throw new UserNotFoundException();
        }

        $token = $user->resetPasswordTokens()->create([
            'token' => strtoupper(Str::random(6))
        ]);

        ForgotPasswordRequested::dispatch($user, $token->token);
    }
}
