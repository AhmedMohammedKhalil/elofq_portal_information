@extends('admins.layout',['page_name'=>'تعديل فصل '])

@section('section')
    <livewire:admin.classes.edit :class_id="$class_id" />
@endsection
