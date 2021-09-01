<?php

namespace App\Http\Repositories\V1\Auth;

use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthLogoutRepository
{
    use ApiResponser;
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(): JsonResponse
    {
        Auth::logout();
        return $this->showData(
            [],
            Response::HTTP_OK,
            'Successfully logged out'
        );
    }
}
