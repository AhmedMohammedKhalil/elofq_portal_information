@extends('admins.layout',['page_name'=>'تعديل قسم '])

@section('section')
    <livewire:admin.departments.edit :department_id="$department_id" />
@endsection
