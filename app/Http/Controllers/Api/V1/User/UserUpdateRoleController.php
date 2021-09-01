<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\V1\User\UserUpdateRoleRepository;
use App\Http\Requests\Api\V1\User\UserUpdateRoleRequest;
use Illuminate\Http\JsonResponse;


class UserUpdateRoleController extends Controller
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
    public function __construct(UserUpdateRoleRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * UpdateRole
     *
     * @param  \Illuminate\Http\UserRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function UpdateRole(UserUpdateRoleRequest $request): JsonResponse
    {
        return $this->userRepository->UpdateRole($request->user_id, $request);
    }
}
