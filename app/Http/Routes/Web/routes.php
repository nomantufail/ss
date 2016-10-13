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

Route::get('students',
    [
        'middleware'=>
            [
                'webAuthenticate:GetAllStudentsRequest',
                'webAuthorize:GetAllStudentsRequest',
                'webValidate:GetAllStudentsRequest'
            ],
        'uses'=>'StudentsController@getAllStudents'
    ]);
Route::get('students/update/{id}',
    [
        'middleware'=>
            [
                'webAuthenticate:GetUpdateStudentRequest',
                'webAuthorize:GetUpdateStudentRequest',
                'webValidate:GetUpdateStudentRequest'
            ],
        'uses'=>'StudentsController@getUpdateStudentForm'
    ]);

Route::post('students/update/{id}',
    [
        'middleware'=>
            [
                'webAuthenticate:UpdateStudentRequest',
                'webAuthorize:UpdateStudentRequest',
                'webValidate:UpdateStudentRequest'
            ],
        'uses'=>'StudentsController@updateStudent'
    ]);
