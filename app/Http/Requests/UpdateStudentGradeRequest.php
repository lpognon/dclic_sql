<?php

namespace App\Http\Requests;

use App\Models\StudentGrade;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStudentGradeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('student_grade_edit');
    }

    public function rules()
    {
        return [
            'score' => [
                'numeric',
                'required',
                'min:0',
                'max:100',
            ],
            'course_id' => [
                'required',
                'integer',
            ],
            'student_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
