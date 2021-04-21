@extends('layouts.master')

@section('subtitle')
Tambah Company
@endsection

@section('content')
<x-form-company
:action="route('admin.company.store')"
/>
@endsection