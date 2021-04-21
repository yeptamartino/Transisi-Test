@extends('layouts.master')

@section('subtitle')
Ubah Company
@endsection

@section('content')

<x-form-company
:action="route('admin.company.update', ['id' => $company->id])"
:id="$company->id"
:name="$company->name"
:email="$company->email"
:website="$company->website"
:thumbnail="$company->logo"
/>
@endsection