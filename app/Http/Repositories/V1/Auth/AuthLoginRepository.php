<?php

namespace App\Http\Repositories\V1\Auth;

use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthLoginRepository
{
    use ApiResponser;
    /**
     * Login
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function Login($request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        if (!$token = Auth::attempt($credentials)) {
            return $this->errorResponse('Unauthorized', Response::HTTP_UNAUTHORIZED);
        }
        return $this->respondWithToken($token);
    }
}
