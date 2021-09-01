<?php

namespace App\Http\Repositories\V1\User;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Repositories\V1\User\UserRepository;

class UserDeleteRepository extends UserRepository
{
    /**
     * Delete
     *
     * @param User_id $id
     * @return JsonResponse
     */
    public function Delete($id): JsonResponse
    {
        $this->user = $this->user->find($id);
        if ($this->user) {
            try {
                $this->user->roles()->detach();
                $this->user->delete();
            } catch (\Exception $exception) {
                return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            return $this->showData($this->user, Response::HTTP_OK, 'User Deleted Success!');
        } else {
            return $this->errorResponse('User not found', Response::HTTP_NOT_FOUND);
        }
    }
}
