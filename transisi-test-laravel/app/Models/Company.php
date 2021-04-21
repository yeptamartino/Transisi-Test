<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates   = ['deleted_at'];
    protected $table   = "companies";
    protected $guarded = [];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public static $validation = [
        'name' => 'required|string|min:5',
        'email' => 'required|string|min:5',
        'website' => 'required|string|min:5',
        'thumbnail'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public static $validationUpdate = [
        'name' => 'required|string|min:5',
        'email' => 'required|string|min:5',
        'website' => 'required|string|min:5',
    ];
  }
