<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_create');
    }

    public function rules()
    {
        return [
            'code' => [
                'string',
                'required',
                'unique:courses',
            ],
            'name' => [
                'string',
                'nullable',
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date' => [
                'string',
                'required',
            ],
            'teacher_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
