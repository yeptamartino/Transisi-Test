<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
	use SoftDeletes;
	protected $dates   = ['deleted_at'];
	protected $table   = "employees";
    protected $guarded = [];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

    public static $validation = [
        'name' => 'required|string|min:5',
        'email' => 'required|string|min:5',
    ];
	public static $validationUpdate = [
        'name' => 'required|string|min:5',
        'email' => 'required|string|min:5',
    ];
}
