@extends('layouts.master')


@section('subtitle')
DAFTAR EMPLOYEE
@endsection

@section('content')
@include('flash::message')
<div class="table-responsive">
  <table class="table" id="employee">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Company</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @if(count($employees) > 0)
      @foreach($employees as $employee)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->company->name }}</td>
        
       <td>
        <a
        href="{{ route('admin.employee.edit', ['id' => $employee->id]) }}"
        class="btn btn-warning"
        >
        <i class="fa fa-edit"></i>
      </a>
      <form action="{{ route('admin.employee.delete', ['id' => $employee->id]) }}" method="POST" style="display: inline-block;">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Delete Data?')">
          <i class="fa fa-trash" title="Delete"></i>
        </button>
      </form>
    </td>
  </tr>
  @endforeach
  @else
    <tr>
      <td colspan="4">
       Belum Ada Data.
      </td>
    </tr>
  @endif
</tbody>
</table>
{{ $employees->links() }}
</div>
@endsection
