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
use App\Http\Validators\Validators\StudentValidators\RegisterStudentValidator;
use App\Transformers\Request\Student\RegisterStudentTransformer;

class RegisterStudentRequest extends Request implements RequestInterface{

    public $validator;
    public function __construct(){
        parent::__construct(new RegisterStudentTransformer($this->getOriginalRequest()));
        $this->validator = new RegisterStudentValidator($this);
    }

    public function authorize(){
        return true;
    }

    public function validate(){
        return $this->validator->validate();
    }

    public function Student()
    {
        $student = new Student();
        $student->fName = $this->get('fName');
        $student->lName = $this->get('lName');
        return $student;
    }

} 