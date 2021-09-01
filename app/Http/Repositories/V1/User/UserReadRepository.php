<?php

namespace App\Http\Repositories\V1\User;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Repositories\V1\User\UserRepository;

class UserReadRepository extends UserRepository
{
    /**
     * Read
     *
     * @return JsonResponse
     */
    public function Read(): JsonResponse
    {
        $this->user = $this->user::with('roles')->paginate(10);
        return $this->showData($this->user, Response::HTTP_OK, 'List all User´s with Role');
    }
}
