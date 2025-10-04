@extends('admins.layout',['page_name'=>'تعديل معلم '])

@section('section')
    <livewire:admin.teachers.edit :teacher_id="$teacher_id" />
@endsection
