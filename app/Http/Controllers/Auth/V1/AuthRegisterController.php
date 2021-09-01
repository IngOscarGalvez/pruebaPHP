<?php

namespace App\Http\Controllers\Auth\V1;

use App\Http\Repositories\V1\Auth\AuthRegisterRepository;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Auth\V1\RegisterRequest;


class AuthRegisterController extends AuthLoginController
{
    /**
     * @var AuthRepository
     */
    protected $AuthRegisterRepository;

    /**
     *  __construct
     *
     * @param AuthLoginRepository $AuthRepository
     */
    public function __construct(AuthRegisterRepository $AuthRegisterRepository)
    {
        $this->AuthRegisterRepository = $AuthRegisterRepository;
    }

    /**
     * register
     *
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        return $this->AuthRegisterRepository->Register($request);
    }
}
