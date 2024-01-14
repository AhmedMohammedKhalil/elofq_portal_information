@extends('layouts.app')
@section('content')
<div>{{ $page_name }}</div>
<div>
    @include('doctors.menu')
    @yield('section')
</div>
@endsection
