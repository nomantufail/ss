<?php
/**
 * Created by Noman Tufail.
 * User: Noman
 * Date: 3/21/2016
 * Time: 9:22 AM
 */

namespace App\Http\Validators\Validators\StudentValidators;

use App\Http\Requests\Requests\Auth\RegistrationRequest;
use App\Http\Requests\Requests\Student\RegisterStudentRequest;
use App\Http\Validators\Interfaces\ValidatorsInterface;
use App\Repositories\Providers\Providers\SocietiesRepoProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterStudentValidator extends StudentValidator implements ValidatorsInterface
{

    /**
     * @param RegisterStudentRequest $request
     */
    public function __construct(RegisterStudentRequest $request){
        parent::__construct($request);
        $this->request = $request;
    }
    public function CustomValidationMessages(){
        return [
            'fName.required' => 'First name is required',
            'lName.required' => 'Last name is required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fName' => 'required|min:3|max:55',
            'lName' => 'required|min:3|max:55',
        ];
    }
}