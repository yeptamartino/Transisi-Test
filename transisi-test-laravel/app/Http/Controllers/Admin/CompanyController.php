<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;
use App\Models\Constants;
use App\Models\Company;
use Flash;

class CompanyController extends Controller
{

  public function index(Request $request)
  {
    $companies = Company::orderBy('updated_at', 'desc')->paginate(5);
    return view('admin.company.index', compact('companies'));
  }

  public function create()
  {
    return view('admin.company.create');
  }

  public function store(Request $request, ImageUploader $imageUploader)
  {
    $request->validate(Company::$validation);
    $company = new Company([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'website' => $request->input('website'),
    ]);
    $company->logo = $imageUploader->saveImage($request, 'thumbnail');
    Flash::success('Data company berhasil di tambahkan.');
    $company->save();

    return redirect()->route('admin.company');
  }

  public function edit($id)
  {
    $company = Company::findOrFail($id);
    return view('admin.company.edit', compact('company'));
  }

  public function update($id, Request $request, ImageUploader $imageUploader)
  {
    $request->validate(Company::$validationUpdate);
    $company = Company::findOrFail($id);
      $company->name = $request->input('name');
      $company->email = $request->input('email');
      $company->website = $request->input('website');
    
    
    if($request->file('thumbnail')) {
        $company->logo = $imageUploader->saveImage($request, 'thumbnail');
      }
    Flash::success('Data company berhasil di ubah.');
    $company->save();

    return redirect()->route('admin.company');
  }

  public function delete($id)
  {
    $company = Company::findOrFail($id);
    $company->delete();
    Flash::success('Data company berhasil di hapus.');
    return redirect()->route('admin.company');
  }
}
