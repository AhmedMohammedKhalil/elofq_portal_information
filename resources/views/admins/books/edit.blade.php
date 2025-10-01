@extends('admins.layout',['page_name'=>'تعديل كتاب'])

@section('section')
    <livewire:admin.book.edit :book_id="$book_id"/>
@endsection
