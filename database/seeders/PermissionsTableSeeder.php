<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'student_create',
            ],
            [
                'id'    => 18,
                'title' => 'student_edit',
            ],
            [
                'id'    => 19,
                'title' => 'student_show',
            ],
            [
                'id'    => 20,
                'title' => 'student_delete',
            ],
            [
                'id'    => 21,
                'title' => 'student_access',
            ],
            [
                'id'    => 22,
                'title' => 'course_create',
            ],
            [
                'id'    => 23,
                'title' => 'course_edit',
            ],
            [
                'id'    => 24,
                'title' => 'course_show',
            ],
            [
                'id'    => 25,
                'title' => 'course_delete',
            ],
            [
                'id'    => 26,
                'title' => 'course_access',
            ],
            [
                'id'    => 27,
                'title' => 'teacher_create',
            ],
            [
                'id'    => 28,
                'title' => 'teacher_edit',
            ],
            [
                'id'    => 29,
                'title' => 'teacher_show',
            ],
            [
                'id'    => 30,
                'title' => 'teacher_delete',
            ],
            [
                'id'    => 31,
                'title' => 'teacher_access',
            ],
            [
                'id'    => 32,
                'title' => 'student_grade_create',
            ],
            [
                'id'    => 33,
                'title' => 'student_grade_edit',
            ],
            [
                'id'    => 34,
                'title' => 'student_grade_show',
            ],
            [
                'id'    => 35,
                'title' => 'student_grade_delete',
            ],
            [
                'id'    => 36,
                'title' => 'student_grade_access',
            ],
            [
                'id'    => 37,
                'title' => 'city_create',
            ],
            [
                'id'    => 38,
                'title' => 'city_edit',
            ],
            [
                'id'    => 39,
                'title' => 'city_show',
            ],
            [
                'id'    => 40,
                'title' => 'city_delete',
            ],
            [
                'id'    => 41,
                'title' => 'city_access',
            ],
            [
                'id'    => 42,
                'title' => 'setting_access',
            ],
            [
                'id'    => 43,
                'title' => 'department_create',
            ],
            [
                'id'    => 44,
                'title' => 'department_edit',
            ],
            [
                'id'    => 45,
                'title' => 'department_show',
            ],
            [
                'id'    => 46,
                'title' => 'department_delete',
            ],
            [
                'id'    => 47,
                'title' => 'department_access',
            ],
            [
                'id'    => 48,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
