@extends('admins.layout',['page_name'=> 'تعديل من نحن'])

@section('section')
    <livewire:admin.abouts.edit :about_id="$about_id" />
@endsection
