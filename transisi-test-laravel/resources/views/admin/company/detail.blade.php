@extends('layouts.master')

@section('title')
<a href="{{ route('admin.admin') }}" class="btn btn-primary">
    <i class="fa fa-arrow-left" title="Kembali"></i>
</a>
@endsection


@section('subtitle')
Detail Company
@endsection

@section('content')
<table class="table table-border table-hover">
    <tbody>
        <tr>
            <th>Nama</th>
            <td>: {{ $company->nama }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>: {{ $company->email }}</td>
        </tr>
        
        <tr>
            <th>Website</th>
            <td>: {{ $company->website }}</td>
        </tr>
       
        <tr>
            <th>Logo</th>
            <td>:  @if( $company->thumbnail == '')
                <a class="btn btn-primary btn-xs">Logo belum ada.</a>
              @else
                <img src=" {{ $company->thumbnail }}" width="500"/>
              @endif</td>
        </tr>
    </tbody>
</table>
@endsection