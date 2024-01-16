@extends('admins.layout')
@push('title')
     تعديل  السلايدر
@endpush
@section('content')
    <livewire:admin.sliders.edit :slider_id="$slider_id" />
@endsection
