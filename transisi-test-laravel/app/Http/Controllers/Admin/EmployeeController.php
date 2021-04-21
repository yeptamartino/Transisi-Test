<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Company;
use App\Helpers\ImageUploader;
use Flash;
class EmployeeController extends Controller
{

  public function index(Request $request)
  {
    $employees = Employee::orderBy('updated_at','desc')->paginate(5);
  

    return view('admin.employee.index', compact('employees'));
  }

  public function create()
  {
    $company = Company::all();
    return view('admin.employee.create', compact('company'));
  }

  public function store(Request $request)
  {    
    $request->validate(Employee::$validation);
    $data = $request->all();

    $employee = new Employee([
      'company_id' => $request->input('company_id'),
      'name'        => $request->input('name'),
      'email' => $request->input('email'),
    ]);    

    Flash::success('Data katalog berhasil di tambahkan.');
    $employee->save();

    return redirect()->route('admin.employee');
  }

  public function edit($id)
  {
    $employee = Employee::findOrFail($id);
    $company = Company::all();
   

    return view('admin.employee.edit', compact('employee', 'company'));
  }

  public function update($id, Request $request)
  {
    $request->validate(Employee::$validationUpdate);
    $employee = Employee::findOrFail($id);
    $data = $request->all();

    $employee->company_id = $request->input('company_id');
    $employee->name         = $request->input('name');
    $employee->email  = $request->input('email');
  
    Flash::success('Data katalog berhasil di ubah.');
    $employee->save();    

    return redirect()->route('admin.employee');
  }

  public function delete($id)
  {
    $employee = Employee::findOrFail($id);
    if($employee->stocks) {
      if(count($employee->stocks) > 0) {
      Flash::warning('Katalog tidak bisa di hapus, karena stok masih ada.');      
        return redirect()->back();
    }
  }
    $employee->delete();
    Flash::success('Data katalog berhasil di hapus.');
    return redirect()->route('admin.employee');
  }
}
