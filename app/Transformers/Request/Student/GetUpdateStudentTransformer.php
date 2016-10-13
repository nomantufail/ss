<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:54 PM
 */

namespace App\Transformers\Request\Student;


use App\Transformers\Request\RequestTransformer;

class GetUpdateStudentTransformer extends RequestTransformer{

    public function transform(){
        return [
            'id'=>$this->request->route('id')
        ];
    }
} 