<?php

namespace App\Http\Controllers\Auth\V1;

use App\Http\Controllers\Controller;
use App\Http\Repositories\V1\Auth\AuthLoginRepository;
use App\Http\Requests\Auth\V1\LoginRequest;
use Illuminate\Http\JsonResponse;


class AuthLoginController extends Controller
{

    /**
     * @var AuthRepository
     */
    protected $AuthLoginRepository;

    /**
     *  __construct
     *
     * @param AuthLoginRepository $AuthRepository
     */
    public function __construct(AuthLoginRepository $AuthLoginRepository)
    {
        $this->AuthLoginRepository = $AuthLoginRepository;
    }

    /**
     * login
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        return $this->AuthLoginRepository->Login($request);
    }
}
