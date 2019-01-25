<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    /**
     * This method send the email after all is good or bad it will
     * use all methods in this class to do it job
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendEmail(Request $request)
    {
        if (!$this->validateEmail($request->email)) {
            return $this->failedResponse();
        }

        $this->send($request->email);
        return $this->successResponse();
    }

    /**
     * This method will send the email
     *
     * @param $email
     */
    public function send($email)
    {
        $token = $this->createToken($email);
        Mail::to($email)->send(new ResetPasswordMail($token));
    }

    /**
     * This method check if entry is in the database if user make a reset request 2 times
     * it will return it if not it will create a new one and send save it
     *
     * @param $email
     * @return mixed|string
     */
    public function createToken($email)
    {
        $oldToken = DB::table('password_resets')->where('email', $email)->first();

        if ($oldToken) {
            return $oldToken->token;
        }

        $token = str_random(60);
        $this->saveToken($token, $email);
        return $token;
    }

    /**
     * This method is for saving the token and email of user want to reset his password
     *
     * @param $token
     * @param $email
     */
    public function saveToken($token, $email)
    {
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
    }

    /**
     * This method check if the email exist on database.
     *
     * @param $email
     * @return bool
     */
    public function validateEmail($email)
    {
        return !!User::where('email', $email)->first();
    }

    /**
     * This method is to send a failed response if the email wasn't send.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function failedResponse()
    {
        return response()->json([
            'error' => 'Email does\'t found on our database'
        ], Response::HTTP_NOT_FOUND);
    }

    /**
     * This method is to send a success response if the email was sent successfully.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse()
    {
        return response()->json([
            'data' => 'Reset Email is send successfully, please check your inbox.'
        ], Response::HTTP_OK);
    }
}
