@extends('layouts.master')
@section('subtitle')
Dashboard
@endsection
@section('content')
  <div class="row">
    <div class="col-lg-12 col-xs-12">
        <div class="inner">
          <p>Hai, Selamat Datang <b>{{ Auth::user()->name }}..</b></p>
        </div>
    </div>
  </div>
@endsection
