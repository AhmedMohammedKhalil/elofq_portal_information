@extends('layouts.app')
@section('main')
    <div class="page-title-area bg-10" style="margin-top: 100px; background-image: url('{{ asset('img/IMG_2996.JPG') }}')">
        <div class="container">
            <div class="page-title-content">
                <h3>بحث</h3>
                <p>ابحث عن الكتب التى تريدها</p>
            </div>
        </div>
    </div>
    <livewire:search />
    <livewire:searching />
@endsection
