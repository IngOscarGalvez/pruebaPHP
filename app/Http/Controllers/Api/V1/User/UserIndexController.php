<?php

namespace App\Http\Controllers\Api\V1\User;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Repositories\V1\User\UserReadRepository;

class UserIndexController extends Controller
{
    /**
     * @var userRepository
     */
    protected $userRepository;

    /**
     *  __construct
     *
     * @param UserReadRepository $userRepository
     */
    public function __construct(UserReadRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * index
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->userRepository->Read();
    }
}
