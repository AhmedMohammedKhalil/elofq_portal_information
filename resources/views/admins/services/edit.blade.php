@extends('admins.layout',['page_name'=>'تعديل خدمة '])

@section('section')
    <livewire:admin.service.edit :service_id="$service_id" />
@endsection
