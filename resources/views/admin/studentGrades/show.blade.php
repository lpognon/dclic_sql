@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.studentGrade.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.student-grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.studentGrade.fields.id') }}
                        </th>
                        <td>
                            {{ $studentGrade->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.studentGrade.fields.score') }}
                        </th>
                        <td>
                            {{ $studentGrade->score }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.studentGrade.fields.course') }}
                        </th>
                        <td>
                            {{ $studentGrade->course->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.studentGrade.fields.student') }}
                        </th>
                        <td>
                            {{ $studentGrade->student->firstname ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.student-grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection