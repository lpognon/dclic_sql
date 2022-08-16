<?php

namespace App\Http\Requests;

use App\Models\Student;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStudentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('student_edit');
    }

    public function rules()
    {
        return [
            'code' => [
                'string',
                'required',
                'unique:students,code,' . request()->route('student')->id,
            ],
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
            'dob' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'pob' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'whatsapp' => [
                'string',
                'nullable',
            ],
            'is_active' => [
                'required',
            ],
            'profession' => [
                'string',
                'nullable',
            ],
        ];
    }
}
