@extends('admins.layout')
@section('section')
<div class="instructor-content">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="advisor-img">
                @if (auth('admin')->user()->image == null)
                <img src="{{ asset('img/admins/default.jpg') }}" alt="Image">
                @else
                <img src="{{asset('img/admins/'.auth('admin')->user()->id.'/'.auth('admin')->user()->image)}}"
                    alt="Image">
                @endif
            </div>
        </div>
        <div class="col-lg-8">
            <div class="advisor-content">
                <a href="#">
                    <h3>{{ auth('admin')->user()->name }}</h3>
                </a>
                <p>{{ auth('admin')->user()->email }}</p>
                <p>{{ auth('admin')->user()->c_number }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
