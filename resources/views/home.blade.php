@extends('layouts.app')

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
            <h2>من نحن</h2>
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

    <section class="courses-area-three ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title white-title">
                <h2>جميع الكتب</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="courses-slider-three owl-theme owl-carousel">
                @include('allbooks')
            </div>
        </div>
    </section>

    <section class="event-area-two event-area-style ptb-100" id="services">
        <div class="container">
            <div class="section-title" style="text-align: center;margin:0 auto 30px">
                <h2>خداماتنا</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="event-img">
                        <img src="{{ asset('img/event-img/event-img-5.png') }}" alt="Image">
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
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-tutor one">
                                <img style="height: 50px;width:50px" src="{{ asset('img/services/1/slider-1.jpg') }}" alt="">
                                <h3>Face to face learning</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-tutor two">
                                <img style="height: 50px;width:50px" src="{{ asset('img/services/1/slider-1.jpg') }}" alt="">
                                <h3>Experienced instructor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-tutor three">
                                <img style="height: 50px;width:50px" src="{{ asset('img/services/1/slider-1.jpg') }}" alt="">
                                <h3>International certificate</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-tutor four">
                                <img style="height: 50px;width:50px" src="{{ asset('img/services/1/slider-1.jpg') }}" alt="">
                                <h3>Online support 24/7</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('allmodels')
@endsection
