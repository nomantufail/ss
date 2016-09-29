<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\DB\Providers\SQL\Models\Agency;
use App\Http\Controllers\Api\V1\ApiController;
use App\Http\Requests\Requests\Auth\LoginRequest;
use App\Http\Requests\Requests\Auth\RegistrationRequest;
use App\Http\Responses\Responses\ApiResponse;
use App\Libs\Auth\Api as Authenticator;
use App\Repositories\Repositories\Sql\AgenciesRepository;
use App\Repositories\Repositories\Sql\UsersRepository;
use App\Transformers\Response\UserTransformer;

class AuthController extends ApiController
{
    private $auth = null;
    private $users = null;
    private $agencies = null;
    private $userTransformer;
    public $response;
    public function __construct
    (
        ApiResponse $response, Authenticator $authenticator,
        UsersRepository $usersRepository, AgenciesRepository $agenciesRepository,
        UserTransformer $userTransformer
    )
    {
        $this->auth = $authenticator;
        $this->users = $usersRepository;
        $this->agencies = $agenciesRepository;
        $this->response = $response;
        $this->userTransformer = $userTransformer;
    }
    public function login(LoginRequest $request)
    {
        if(!$this->auth->attempt($request->getCredentials()))
            return $this->response->respondInvalidCredentials();
        $authenticatedUser = $this->auth->login($this->users->findByEmail($request->get('email')));
        return $this->response->respond(['data'=>[
            'authUser' => $authenticatedUser
        ]]);
    }

    public function register(RegistrationRequest $request)
    {

    }
}
