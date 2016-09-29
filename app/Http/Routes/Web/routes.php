<?php

Route::get('student/register',
    [
        'middleware'=>
            [
//                'webAuthenticate:getStudentRegistrationFormRequest',
//                'webAuthorize:getStudentRegistrationFormRequest',
//                'webValidate:getStudentRegistrationFormRequest'
            ],
        'uses'=>'StudentsController@getRegistrationForm'
    ]);
Route::post('student/register',
    [
        'middleware'=>
            [
                'webAuthenticate:RegisterStudentRequest',
                'webAuthorize:RegisterStudentRequest',
                'webValidate:RegisterStudentRequest'
            ],
        'uses'=>'StudentsController@register'
    ]);