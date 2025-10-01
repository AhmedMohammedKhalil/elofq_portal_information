@extends('admins.layout',['page_name'=>'تعديل سلايدر '])

@section('section')
    <livewire:admin.sliders.edit :slider_id="$slider_id" />
@endsection
