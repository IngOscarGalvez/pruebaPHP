<?php

namespace App\Http\Repositories\V1\Auth;


use App\Http\Repositories\V1\Auth\AuthLoginRepository;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Auth\V1\RegisterRequest;

class AuthRegisterRepository
{
    use ApiResponser;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var AuthLoginRepository
     */
    protected $authLoginRepository;

    /**
     * __construct
     *
     * @param User $user
     * @param AuthLoginRepository $authLoginRepository
     */
    public function __construct(User $user, AuthLoginRepository $authLoginRepository)
    {
        $this->user = $user;
        $this->authLoginRepository = $authLoginRepository;
    }

    /**
     * register
     *
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function Register(RegisterRequest $request): JsonResponse
    {
        try {
            $this->user->name = $request->name;
            $this->user->email = $request->email;
            $this->user->password = app('hash')->make($request->password);
            $this->user->save();
            $this->user->assignRole('User');
        } catch (\Exception $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $this->authLoginRepository->Login($request);
    }
}
