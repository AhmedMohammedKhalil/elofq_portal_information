@extends('layouts.app')
@section('content')
<div>{{ $page_name }}</div>
<div>
    @include('nurses.menu')
    @yield('section')
</div>
@endsection
