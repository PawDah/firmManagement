<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeePostRequest;
use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('employees.index',[
            'employees' => Employee::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('employees.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeePostRequest $request): RedirectResponse
    {
        $employee=new Employee($request->validated());
        $employee->save();
        return redirect(route('employees.index'))->with('status','Użytkownik Dodany!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('employees.show',[
            'employee' => Employee::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        return view('employees.edit',[
          'employee' => Employee::find($id)
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeePostRequest $request, string $id): RedirectResponse
    {
        if (Employee::where('id',$id)->exists()) {
            $employee = Employee::find($id);
            $employee->fill($request->validated());
            $employee->save();
            return redirect(route('employees.index'))->with('status','Użytkownik edytowany!');
        }
        else{
            return redirect(route('employees.index'))->with('status','Użytkownik nieznaleziony!');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        if (Employee::where('id',$id)->exists()) {
            $employee = Employee::find($id);
            $employee->delete();
            return redirect(route('employees.index'))->with('status','Użytkownik Usunięty!');
        }
        else{
            return redirect(route('employees.index'))->with('status','Użytkownik nieznaleziony!');
        }

    }
}
