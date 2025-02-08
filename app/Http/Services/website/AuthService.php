<?php

namespace App\Http\Services\website;

use App\Http\Requests\Api\V1\Auth\SignInRequest;
use App\Http\Requests\Api\V1\Auth\SignUpRequest;
use App\Http\Resources\V1\User\UserResource;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;

class AuthService
{

    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
    )
    {
    }

    public function signUp(SignUpRequest $request) {
        DB::beginTransaction();
        try {
            $data = $request->except(['password_confirmation','first_name','last_name','terms']);

            $data['name'] = $request->first_name . ' ' . $request->last_name;
            $user = $this->userRepository->create($data);

            DB::commit();
            return redirect()->route('index')->with(['success' => __('messages.created successfully')]);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('index')->with(['error' => __('messages.error')]);
        }
    }

    public function signIn(SignInRequest $request) {
        $credentials = $request->only('email', 'password');
        if (auth('api')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('index')->with(['success'=>'done']); // Change this if needed
        }

        return back()->with([
            'error' => 'Invalid credentials',
        ]);
    }

    public function signOut() {
        auth('api')->logout();
        return redirect()->route('index')->with(['success'=>'done']);    }

}
