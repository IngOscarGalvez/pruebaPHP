<?php

namespace App\Http\Controllers\Api\V1\User;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\User\UserDeleteRequest;
use App\Http\Repositories\V1\User\UserDeleteRepository;


class UserDeleteController extends Controller
{
    /**
     * @var userRepository
     */
    protected $userRepository;

    /**
     *  __construct
     *
     * @param UserDeleteRepository $userRepository
     */
    public function __construct(UserDeleteRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * delete
     *
     * @param  \Illuminate\Http\UserDeleteRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(UserDeleteRequest $request): JsonResponse
    {
        return $this->userRepository->Delete($request->user_id);
    }
}
