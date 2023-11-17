<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeePostRequest;
use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('image')){
            $employee->image_path=$request->file('image')->store('employees');
        }
        $employee->save();
        return redirect(route('employees.index'))->with('status','Użytkownik Dodany!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee): View
    {
        return view('employees.show',[
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee) : View
    {
        return view('employees.edit',[
          'employee' => $employee
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeePostRequest $request, Employee $employee): RedirectResponse
    {
        $employee->fill($request->validated());
        if ($request->hasFile('image')){
            $oldImagePath = $employee->image_path;
            if($oldImagePath){
                if (Storage::exists($oldImagePath)) {
                    Storage::delete($oldImagePath);
                }
            }
            $employee->image_path=$request->file('image')->store('employees');
        }

            $employee->save();
            return redirect(route('employees.index'))->with('status','Użytkownik edytowany!');
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
