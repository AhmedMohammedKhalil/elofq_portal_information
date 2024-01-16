@extends('admins.layout')
@push('title')
     تعديل من نحن
@endpush
@section('content')
    <livewire:admin.abouts.edit :about_id="$about_id" />
@endsection
