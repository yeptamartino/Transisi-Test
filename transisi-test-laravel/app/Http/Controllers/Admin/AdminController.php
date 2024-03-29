<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;
use App\Models\Constants;
use App\Models\Admin;
use Flash;

class AdminController extends Controller
{

  public function index(Request $request)
  {
    $admins = Admin::orderBy('updated_at', 'desc')->paginate(5);
    return view('admin.admin.index', compact('admins'));
  }

  public function create()
  {
    return view('admin.admin.create');
  }

  public function store(Request $request, ImageUploader $imageUploader)
  {
    $request->validate(Admin::$validation);
    $admin = new Admin([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
        'password' => bcrypt($request->input('password')),
        'role' => Constants::$USER_ROLE_ADMIN,
    ]);
    $admin->logo = $imageUploader->saveImage($request, 'thumbnail');
    Flash::success('Data admin berhasil di tambahkan.');
    $admin->save();

    return redirect()->route('admin.admin');
  }

  public function edit($id)
  {
    $admin = Admin::findOrFail($id);
    return view('admin.admin.edit', compact('admin'));
  }

  public function update($id, Request $request, ImageUploader $imageUploader)
  {
    $request->validate(Admin::$validationUpdate);
    $admin = Admin::findOrFail($id);
      $admin->name = $request->input('name');
      $admin->email = $request->input('email');
      $admin->phone = $request->input('phone');
      $admin->address = $request->input('address');
      $admin->password =  bcrypt($request->input('password'));
    
    if($request->file('thumbnail')) {
      $admin->logo    = $imageUploader->saveImage($request, 'thumbnail');
    }
    Flash::success('Data admin berhasil di ubah.');
    $admin->save();

    return redirect()->route('admin.admin');
  }

  public function delete($id)
  {
    $admin = Admin::findOrFail($id);
    $admin->delete();
    Flash::success('Data admin berhasil di hapus.');
    return redirect()->route('admin.admin');
  }
}
