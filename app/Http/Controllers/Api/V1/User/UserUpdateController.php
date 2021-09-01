<?php

namespace App\Http\Controllers\Api\V1\User;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Repositories\V1\User\UserUpdateRepository;
use App\Http\Requests\Api\V1\User\UserUpdateRequest;


class UserUpdateController extends Controller
{

    /**
     * @var userRepository
     */
    protected $userRepository;

    /**
     *  __construct
     *
     * @param UserUpdateRepository $userRepository
     */
    public function __construct(UserUpdateRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UserRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UserUpdateRequest $request): JsonResponse
    {
        return $this->userRepository->Update($request->user_id, $request);
    }
}
