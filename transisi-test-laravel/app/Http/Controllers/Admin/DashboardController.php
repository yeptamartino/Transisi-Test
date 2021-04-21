<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Company;
use App\Models\Constants;
use Carbon\Carbon;
use Flash;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
    }
    public function dashboard(Request $request){
      $company = $request->get('company');
      
      $eployees = Employee::orderBy('updated_at','desc');
      if($company){
        $eployees->where('company_id', $company);
      }
      $company = Company::all();
      $eployees = $eployees->get();
      
     

      return view(
        'admin.dashboard',
          compact(
          'company',
          'eployees',
        ));
    }
   
}
