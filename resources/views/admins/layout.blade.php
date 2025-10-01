@extends('layouts.app')
@section('main')
<div class="page-title-area bg-18">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $page_name }}</h2>
        </div>
    </div>
</div>
<div class="left-sidebar-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('admins.menu')
            </div>
            <div class="col-lg-9">
                @yield('section')
            </div>
        </div>
    </div>
</div>
@endsection
