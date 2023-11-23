<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Support\Facades\Storage;

class EmployeeService
{
    public function store(array $employeeData)
    {
        $employee = new Employee($employeeData);
        if (array_key_exists('image', $employeeData)) {
            $employee->image_path = $employeeData['image']->store('employees');
        }
        $employee->save();
    }
    public function update(array $employeeData, Employee $employee)
    {
        if (array_key_exists('image', $employeeData)) {
            if ($employee->hasImage_path()) {
                Storage::delete($employee->image_path);
            }
            $employee->image_path = $employeeData['image']->store('employees');
        }
        return $employee->update($employeeData);
    }

}
