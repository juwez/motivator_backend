<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IUserRepo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $repo;

    public function __construct(IUserRepo $repo)
    {
        $this->repo = $repo;
    }

    public function register(Request $request)
    {
        $user = $this->repo->registerUser($request);
        $token = auth('api')->login($user);
        return $this->respondWithToken($token);
    }
    public function Login()
    {
        $credentials = request(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }
    public function me()
    {
        return response()->json(auth('api')->user());
    }
    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
