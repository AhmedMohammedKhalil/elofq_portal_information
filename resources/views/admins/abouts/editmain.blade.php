@extends('admins.layout')
@push('title')
     تعديل من نحن
@endpush
@section('content')
    <livewire:admin.abouts.edit-main :about_id="$about_id" />
@endsection
