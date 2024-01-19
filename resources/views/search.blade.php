@extends('layouts.app')
@section('main')
    <div class="page-title-area bg-10" style="margin-top: 100px">
        <div class="container">
            <div class="page-title-content">
                <h2>بحث</h2>
                <p>ابحث عن الكتب التى تريدها</p>
            </div>
        </div>
    </div>
    <livewire:search />
    <livewire:searching />
@endsection
