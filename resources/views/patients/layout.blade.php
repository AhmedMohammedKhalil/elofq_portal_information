@extends('layouts.app')
@section('content')
    <div>{{ $page_name }}</div>
    <div>
        @include('patients.menu')
        @yield('section')
    </div>
@endsection
