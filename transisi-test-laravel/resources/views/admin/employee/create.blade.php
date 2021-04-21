@extends('layouts.master')

@section('subtitle')
Tambah Employee
@endsection

@section('content')
    <x-form-employee
        :action="route('admin.employee.store')"
        :company="$company"
    />
@endsection