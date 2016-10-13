<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:56 PM
 */

namespace App\Http\Requests\Requests\Student;


use App\DB\Providers\SQL\Models\Student\Student;
use App\Http\Requests\Interfaces\RequestInterface;
use App\Http\Requests\Request;
use App\Http\Validators\Validators\StudentValidators\GetUpdateStudentValidator;
use App\Http\Validators\Validators\StudentValidators\RegisterStudentValidator;
use App\Http\Validators\Validators\StudentValidators\UpdateStudentValidator;
use App\Transformers\Request\Student\GetUpdateStudentTransformer;
use App\Transformers\Request\Student\RegisterStudentTransformer;
use App\Transformers\Request\Student\UpdateStudentTransformer;

class GetUpdateStudentRequest extends Request implements RequestInterface{

    public $validator;
    public function __construct(){
        parent::__construct(new GetUpdateStudentTransformer($this->getOriginalRequest()));
        $this->validator = new GetUpdateStudentValidator($this);
    }

    public function authorize(){
        return true;
    }

    public function validate(){
        return $this->validator->validate();
    }


} 