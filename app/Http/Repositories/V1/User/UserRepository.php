<?php

namespace App\Http\Repositories\V1\User;


use App\Traits\ApiResponser;
use App\Models\User;


class UserRepository
{
    use ApiResponser;

    protected $user;

    /**
     *  __construct
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
