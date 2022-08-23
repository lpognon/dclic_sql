<?php

namespace App\Http\Requests;

use App\Models\Teacher;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTeacherRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('teacher_edit');
    }

    public function rules()
    {
        return [
            'firstname' => [
                'string',
                'required',
            ],
            'lastname' => [
                'string',
                'required',
            ],
            'gender' => [
                'string',
                'min:1',
                'max:1',
                'required',
            ],
        ];
    }
}
