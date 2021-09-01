<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\V1\User\UserUpdatePasswordRepository;
use App\Http\Requests\Api\V1\User\UserUpdatePasswordRequest;
use Illuminate\Http\JsonResponse;


class UserUpdatePasswordController extends Controller
{
    /**
     * @var userRepository
     */
    protected $userRepository;

    /**
     *  __construct
     *
     * @param UserUpdatePasswordRepository $userRepository
     */
    public function __construct(UserUpdatePasswordRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * UpdatePassword
     *
     * @param  \Illuminate\Http\UserRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function UpdatePassword(UserUpdatePasswordRequest $request): JsonResponse
    {
        return $this->userRepository->UpdatePassword($request->user_id, $request);
    }
}
