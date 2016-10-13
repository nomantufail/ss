<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\Student\GetAllStudentsRequest;
use App\Http\Requests\Requests\Student\GetStudentRegistrationFormRequest;
use App\Http\Requests\Requests\Student\GetUpdateStudentRequest;
use App\Http\Requests\Requests\Student\RegisterStudentRequest;
use App\Http\Requests\Requests\Student\UpdateStudentRequest;
use App\Http\Requests\Requests\User\AddUserRequest;
use App\Http\Requests\Requests\User\ForgetPasswordRequest;
use App\Http\Requests\Requests\User\GetAgentRequest;
use App\Http\Requests\Requests\User\GetAgentsRequest;
use App\Http\Requests\Requests\User\SearchUsersRequest;
use App\Http\Requests\Requests\User\TrustedAgentRequest;
use App\Http\Responses\Responses\WebResponse;
use App\Libs\Helpers\Helper;
use App\Repositories\Providers\Providers\BannersRepoProvider;
use App\Repositories\Providers\Providers\PropertiesRepoProvider;
use App\Repositories\Providers\Providers\SocietiesRepoProvider;
use App\Repositories\Providers\Providers\StudentsRepoProvider;
use App\Repositories\Providers\Providers\UsersJsonRepoProvider;
use App\Repositories\Providers\Providers\UsersRepoProvider;
use App\Traits\User\UsersFilesReleaser;
use App\Transformers\Response\UserTransformer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class StudentsController extends WebController
{
    public $students;
    public function __construct()
    {
        parent::__construct();
        $this->students = (new StudentsRepoProvider())->repo();
    }

    public function getRegistrationForm(GetStudentRegistrationFormRequest $request)
    {
        return $this->response->setView('student.register')->respond(['data'=>[
            'classes'=>['kg','one','two']
        ]]);
    }

    public function register(RegisterStudentRequest $request)
    {
        $student = $request->student();
        $student->id = $this->students->store($request->student());
        return $this->response->setView('student.registered')->respond(['data'=>[
            'student'=>$student
        ]]);
    }
    public function getAllStudents(GetAllStudentsRequest $request)
    {
        return $this->response->setView('student.list')->respond(['data'=>[
            'students'=>$this->students->all()
        ]]);
    }

    public function getUpdateStudentForm(GetUpdateStudentRequest $request){

        $student = $this->students->findById($request->get('id'));
        return $this->response->setView('student.update')->respond(['data'=>[
            'student'=>$student
        ]]);
    }
    public function updateStudent(UpdateStudentRequest $request){
        //$student = $request->student();
        //$student = $this->students->update($student);
        return 'aaa';
    }
}
