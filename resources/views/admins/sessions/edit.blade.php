@extends('admins.layout',['page_name'=>'تعديل حصة '])

@section('section')
    <livewire:admin.sessions.edit :session_id="$session_id" />
@endsection
