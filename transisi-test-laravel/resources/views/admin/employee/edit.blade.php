@extends('layouts.master')

@section('subtitle')
Ubah Employee
@endsection

@section('content')
<x-form-employee
:action="route('admin.employee.update', ['id' => $employee->id])"
:name="$employee->name"
:email="$employee->email"
:id="$employee->id"
:company="$company"
:selected-company-id="$employee->company->id"
:employee="$employee"
/>
@endsection