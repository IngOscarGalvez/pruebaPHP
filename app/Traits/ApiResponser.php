<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

trait ApiResponser
{
    /**
     * successResponse
     *
     * @param string $data
     * @param integer $code
     * @param String $message
     * @return \Illuminate\Http\JsonResponse
     */
    private function successResponse($data, $code, $message = null): JsonResponse
    {
        return response()->json(
            [
                'status'   => 'Success',
                'code'     => $code,
                'message' => $message,
                'result'   => $data,
            ],
            $code
        );
    }

    /**
     * errorResponse
     *
     * @param string $message
     * @param integer $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorResponse($message, $code): JsonResponse
    {
        return response()->json(
            [
                'status'   => 'Error',
                'code'     => $code,
                'messages' => $message,
                'result'   => [],
            ],
            $code
        );
    }

    /**
     * showData
     *
     * @param object $collection
     * @param integer $code
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function showData($collection, $code = 200, $message = null): JsonResponse
    {
        return $this->successResponse($collection, $code, $message);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {

        return $this->successResponse([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60, // minutes
            'user' => $this->UserAuth(),
        ], Response::HTTP_OK);
    }


    /**
     * UserAuth
     *
     * @return void
     */
    protected function UserAuth()
    {
        $auth = Auth::user();
        $user = User::find($auth->id);
        $role = $user->getRoleNames();
        $permission = $user->getAllPermissions();
        return [
            'user'       => $auth,
            'roles'       => $role,
            'permissions' => $permission
        ];
    }
}
