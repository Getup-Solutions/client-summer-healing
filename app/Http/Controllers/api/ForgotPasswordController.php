<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ApiCode;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class ForgotPasswordController extends Controller
{
    public function forgot() {
        $credentials = request()->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($credentials);

        if ($status == Password::RESET_LINK_SENT) {
            return [
                'status' => __($status)
            ];
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);

        //return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', RulesPassword::defaults()],
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                $user->tokens()->delete();

                event(new PasswordReset($user));
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return response([
                'message'=> 'Password reset successfully'
            ]);
        }

        return response([
            'message'=> __($status)
        ], 500);

    }



}
