<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:54 PM
 */

namespace App\Transformers\Request\Student;


use App\Transformers\Request\RequestTransformer;

class RegisterStudentTransformer extends RequestTransformer{

    public function transform(){
        return [
            'lName'=>$this->request->input('l_name'),
            'fName'=>$this->request->input('f_name'),
        ];
    }
} 