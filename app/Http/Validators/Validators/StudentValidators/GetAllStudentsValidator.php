<?php
/**
 * Created by Noman Tufail.
 * User: Noman
 * Date: 3/21/2016
 * Time: 9:22 AM
 */

namespace App\Http\Validators\Validators\StudentValidators;

use App\Http\Requests\Requests\Student\GetAllStudentsRequest;
use App\Http\Validators\Interfaces\ValidatorsInterface;

class GetAllStudentsValidator extends StudentValidator implements ValidatorsInterface
{

    /**
     * @param GetAllStudentsRequest $request
     */
    public function __construct(GetAllStudentsRequest $request){
        parent::__construct($request);
        $this->request = $request;
    }
    public function CustomValidationMessages(){
        return [
            //
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
           //
        ];
    }
}