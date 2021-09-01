<?php

namespace App\Http\Controllers\Api\V1\User;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Repositories\V1\User\UserCreateRepository;
use App\Http\Requests\Api\V1\User\UserCreateRequest;

class UserStoreController extends Controller
{

    /**
     * @var userRepository
     */
    protected $userRepository;

    /**
     *  __construct
     *
     * @param UserCreateRepository $userRepository
     */
    public function __construct(UserCreateRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UserRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserCreateRequest $request): JsonResponse
    {
        return $this->userRepository->Create($request);
    }
}
