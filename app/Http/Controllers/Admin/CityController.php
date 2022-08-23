<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\City;
use App\Models\Department;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Http\Requests\MassDestroyCityRequest;

class CityController extends Controller  {





function index()
{
    abort_if(Gate::denies('city_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$cities = City::with(['department'])->get();



    return view('admin.cities.index', compact('cities'));
}
function create()
{
    abort_if(Gate::denies('city_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$departments = Department::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');



    return view('admin.cities.create', compact('departments'));
}
function store(StoreCityRequest $request)
{
    



$city = City::create($request->all());


return redirect()->route('admin.cities.index');
    
}
function edit(City $city)
{
    abort_if(Gate::denies('city_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$departments = Department::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');


$city->load('department');

    return view('admin.cities.edit', compact('city', 'departments'));
}
function update(UpdateCityRequest $request, City $city)
{
    



$city->update($request->all());


return redirect()->route('admin.cities.index');
    
}
function show(City $city)
{
    abort_if(Gate::denies('city_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$city->load('department', 'pobStudents');

    return view('admin.cities.show', compact('city'));
}
function destroy(City $city)
{
    abort_if(Gate::denies('city_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$city->delete();
return back();
    
}
function massDestroy(MassDestroyCityRequest $request)
{
    



City::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}

}