<?php

namespace App\Service;

use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\Auth\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function __construct(readonly protected AuthRepositoryInterface $authRepository)
    {
    }


    public function register(RegisterRequest $request)
    {
        if ($user = $this->authRepository->findByEmail($request->email)){
            $user = $this->authRepository->create($request->toArray());
            return Auth::login($user);
        }
    }

}
