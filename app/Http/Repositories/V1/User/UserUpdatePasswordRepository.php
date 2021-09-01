<?php

namespace App\Http\Repositories\V1\User;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Repositories\V1\User\UserRepository;

class UserUpdatePasswordRepository extends UserRepository
{
    /**
     * UpdatePassword
     *
     * @param User_id $id
     * @param Request $request
     * @return JsonResponse
     */
    public function UpdatePassword($id, $request): JsonResponse
    {
        $this->user = $this->user::with('roles')->find($id);
        if ($this->user) {
            try {
                $this->user->password = app('hash')->make($request->password);
                $this->user->save();
            } catch (\Exception $exception) {
                return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            return $this->showData($this->user, Response::HTTP_CREATED, 'User Password Updated Success!');
        } else {
            return $this->errorResponse('User not found', Response::HTTP_NOT_FOUND);
        }
    }
}
