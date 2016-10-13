<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:56 PM
 */

namespace App\Http\Requests\Requests\Student;


use App\Http\Requests\Interfaces\RequestInterface;
use App\Http\Requests\Request;
use App\Http\Validators\Validators\StudentValidators\GetAllStudentsValidator;
use App\Transformers\Request\Student\GetAllStudentsTransformer;

class GetAllStudentsRequest extends Request implements RequestInterface{

    public $validator;
    public function __construct(){
        parent::__construct(new GetAllStudentsTransformer($this->getOriginalRequest()));
        $this->validator = new GetAllStudentsValidator($this);
    }

    public function authorize(){
        return true;
    }

    public function validate(){
        return $this->validator->validate();
    }

} 