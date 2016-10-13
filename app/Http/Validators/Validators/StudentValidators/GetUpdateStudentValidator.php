<?php
/**
 * Created by Noman Tufail.
 * User: Noman
 * Date: 3/21/2016
 * Time: 9:22 AM
 */

namespace App\Http\Validators\Validators\StudentValidators;

use App\Http\Requests\Requests\Auth\RegistrationRequest;
use App\Http\Requests\Requests\Student\GetUpdateStudentRequest;
use App\Http\Requests\Requests\Student\RegisterStudentRequest;
use App\Http\Requests\Requests\Student\UpdateStudentRequest;
use App\Http\Validators\Interfaces\ValidatorsInterface;
use App\Repositories\Providers\Providers\SocietiesRepoProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class GetUpdateStudentValidator extends StudentValidator implements ValidatorsInterface
{

    /**
     * @param GetUpdateStudentRequest $request
     */
    public function __construct(GetUpdateStudentRequest $request){
        parent::__construct($request);
        $this->request = $request;
    }
    public function CustomValidationMessages(){
        return [];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required | exists:students'
        ];
    }
}