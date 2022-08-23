<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStudentGradeRequest;
use App\Http\Requests\StoreStudentGradeRequest;
use App\Http\Requests\UpdateStudentGradeRequest;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentGrade;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentGradeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('student_grade_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $studentGrades = StudentGrade::with(['course', 'student'])->get();

        return view('admin.studentGrades.index', compact('studentGrades'));
    }

    public function create()
    {
        abort_if(Gate::denies('student_grade_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $students = Student::pluck('firstname', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.studentGrades.create', compact('courses', 'students'));
    }

    public function store(StoreStudentGradeRequest $request)
    {
        $studentGrade = StudentGrade::create($request->all());

        return redirect()->route('admin.student-grades.index');
    }

    public function edit(StudentGrade $studentGrade)
    {
        abort_if(Gate::denies('student_grade_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $students = Student::pluck('firstname', 'id')->prepend(trans('global.pleaseSelect'), '');

        $studentGrade->load('course', 'student');

        return view('admin.studentGrades.edit', compact('courses', 'studentGrade', 'students'));
    }

    public function update(UpdateStudentGradeRequest $request, StudentGrade $studentGrade)
    {
        $studentGrade->update($request->all());

        return redirect()->route('admin.student-grades.index');
    }

    public function show(StudentGrade $studentGrade)
    {
        abort_if(Gate::denies('student_grade_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $studentGrade->load('course', 'student');

        return view('admin.studentGrades.show', compact('studentGrade'));
    }

    public function destroy(StudentGrade $studentGrade)
    {
        abort_if(Gate::denies('student_grade_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $studentGrade->delete();

        return back();
    }

    public function massDestroy(MassDestroyStudentGradeRequest $request)
    {
        StudentGrade::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
