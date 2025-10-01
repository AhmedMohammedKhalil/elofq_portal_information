@extends('layouts.app')
@push('css')
    <style>
        .event-img .main-img{
            border-radius: 50%;
            margin: auto;
            display: block;
            margin-top: 78px;
            height: 400px;
            width: 400px;
        }
        .event-area-two.event-area-style .single-tutor {
            border-radius: 10%;
        }
        .event-area-two.event-area-style .single-tutor.three {
            margin-top: 0px;
        }
    </style>
@endpush
@section('main')

    <section class="feedback-area f5f6fa-bg-color" style="margin-top: 150px">
        <div class="landing-slider owl-theme owl-carousel">
            @foreach ($sliders as $slider)
                <div class="feedback-item" style="background-image: url('{{ asset('img/sliders/'.$slider->id.'/'.$slider->image) }}')">
                    <div class="feedback-title">
                        <h3>{{ $slider->title }}</h3>
                        <span>{{ $slider->content }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="banner-area-two pt-100 pb-70" id="about">
        <div class="section-title">
            <h2>{{ $about->heading }}</h2>
            <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid social">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="banner-content " style="margin: 0">
                                <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">
                                    {{ $about->title }}
                                </h1>
                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">
                                    {{ $about->content }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div style="margin-top: unset" class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                                <img style="height: 500px;border-radius:10%" src="{{ asset('img/abouts/'.$about->image) }}" alt="Image" />
                                <div class="banner-shape-1">
                                    <img src="{{ asset('img/banner-img/shape-img-1.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-2">
                                    <img src="{{ asset('img/banner-img/shape-img-2.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-3">
                                    <img src="{{ asset('img/banner-img/shape-img-3.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-4">
                                    <img src="{{ asset('img/banner-img/shape-img-4.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-5 rotated">
                                    <img src="{{ asset('img/banner-img/shape-img-5.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-6">
                                    <img src="{{ asset('img/banner-img/shape-img-6.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-7 rotated">
                                    <img src="{{ asset('img/banner-img/shape-img-7.png') }}" alt="Image" />
                                </div>
                                <div class="banner-shape-8">
                                    <img src="{{ asset('img/banner-img/shape-img-8.png') }}" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (count($books) > 0)
    <section class="courses-area-three ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title white-title">
                <h2>جميع الكتب</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            @if(count($books) > 3)
            <div class="courses-slider-three owl-theme owl-carousel">
                @include('allbooks')
            </div>
            @else
                @include('books')
            @endif
        </div>
    </section>
    @endif
    <section class="event-area-two event-area-style ptb-100" id="services">
        <div class="container">
            <div class="section-title" style="text-align: center;margin:0 auto 30px">
                <h2>{{ $service->content }}</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="event-img">
                        <img class="main-img" src="{{ asset('img/services/'.$service->id.'/'.$service->image) }}" alt="Image">
                        <div class="event-shape-1 rotated">
                            <img src="{{ asset('img/event-img/event-shape-1.png') }}" alt="Image">
                        </div>
                        <div class="event-shape-2">
                            <img src="{{ asset('img/event-img/event-shape-2.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-tutor {{ $service->type }}">
                                    <img style="height: 50px;width:50px" src="{{ asset('img/services/'.$service->id.'/'.$service->image) }}" alt="">
                                    <p>{{ $service->content }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (count($books) > 0)
        @include('allmodals')
    @endif
@endsection
