<?php

namespace App\Http\Controllers\Auth\V1;


use App\Http\Controllers\Controller;
use App\Http\Repositories\V1\Auth\AuthLogoutRepository;
use Illuminate\Http\JsonResponse;


class AuthLogoutController extends Controller
{
    /**
     * @var AuthRepository
     */
    protected $AuthRepository;

    /**
     *  __construct
     *
     * @param AuthLogoutRepository $AuthRepository
     */
    public function __construct(AuthLogoutRepository $AuthRepository)
    {
        $this->AuthRepository = $AuthRepository;
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(): JsonResponse
    {
        return $this->AuthRepository->logout();
    }
}
