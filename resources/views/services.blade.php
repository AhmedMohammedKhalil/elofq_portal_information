@extends('layouts.app')
@section('main')
    <div class="page-title-area bg-11" style="margin-top: 100px; background-image: url('{{ asset('img/IMG_2998.JPG') }}')">
        <div class="container">
            <div class="page-title-content">
                <h3>خدماتنا الإلكترونية</h3>
                <p>نوفر خدمات المكتبة المدرسية إلكترونياً </p>
            </div>
        </div>
    </div>

    @if(count($departments) > 0 && count($classes) > 0  && count($teachers) > 0 )
    <section class="banner-area-two pt-100 pb-70" style="background: white">
        <div class="section-title">
            <h2>حجز حصص دراسية</h2>
            <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
        </div>
            <livewire:book-session />
    </section>
    @endif

@endsection
