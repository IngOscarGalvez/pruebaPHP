<?php

namespace App\Http\Repositories\V1\User;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Repositories\V1\User\UserRepository;

class UserCreateRepository extends UserRepository
{
    /**
     * Create
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function Create($request): JsonResponse
    {
        try {
            $this->user->name = $request->name;
            $this->user->email = $request->email;
            $this->user->password = app('hash')->make($request->password);
            $this->user->save();
            $this->user->assignRole($request->role);
        } catch (\Exception $exception) {
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return $this->showData($this->user, Response::HTTP_CREATED, 'User Created Success!');
    }
}
