<?php

namespace App\Http\Requests;

use App\Models\StudentGrade;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStudentGradeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('student_grade_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:student_grades,id',
        ];
    }
}
