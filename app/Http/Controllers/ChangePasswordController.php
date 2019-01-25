<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\User;

class ChangePasswordController extends Controller
{
    /**
     * This method will accept the ChangePasswordRequest
     * and it will change the password of user
     *
     * @param ChangePasswordRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function process(ChangePasswordRequest $request)
    {
        return $this->getPasswordResetTableRow($request)->count() > 0 ? $this->changePassword($request) : $this->tokenNotFoundResponse();
    }

    /**
     * This method will get the row of the reset password
     *
     * @param $request
     * @return \Illuminate\Database\Query\Builder
     */
    private function getPasswordResetTableRow($request)
    {
        return DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->resetToken]);
    }

    /**
     * This method will return a failed response
     * if the email or the token are not valid
     *
     * @return \Illuminate\Http\JsonResponse
     */
    private function tokenNotFoundResponse()
    {
        return response()->json(['error' => 'Token or Email is incorrect'], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    /**
     * This method will make the changes on the database
     *
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     */
    private function changePassword($request)
    {
        $user = User::whereEmail($request->email)->first();
        $user->update(['password' => $request->password]);
        $this->getPasswordResetTableRow($request)->delete();
        return response()->json(['data' => 'Password Successfully Changed'], Response::HTTP_CREATED);
    }
}
