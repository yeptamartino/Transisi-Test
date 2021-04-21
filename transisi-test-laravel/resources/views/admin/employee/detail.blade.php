@extends('layouts.master')

@section('title')
<a href="{{ route('admin.employee') }}" class="btn btn-primary">
    <i class="fa fa-arrow-left" title="Kembali"></i>
</a>
@endsection


@section('subtitle')
Detail Employee
@endsection

@section('content')
<table class="table table-border table-hover">
    <tbody>
        <tr>
            <th>Nama</th>
            <td>: {{ $employee->nama }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>: {{ $employee->email }}</td>
        </tr>
        
       
        <tr>
            <th>Foto</th>
            <td>:  @if( $employee->thumbnail == '')
                <a class="btn btn-primary btn-xs">Foto belum ada.</a>
              @else
                <img src=" {{ $employee->thumbnail }}" width="500"/>
              @endif</td>
        </tr>
    </tbody>
</table>
@endsection