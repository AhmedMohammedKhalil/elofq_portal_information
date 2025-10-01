@extends('admins.layout')

@section('section')
<section class="counter-area ebeef5-bg-color pt-100 pb-70">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-1">
                        <img src="{{ asset('img/counter-shape/counter-shape-1.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $books_count }}">0</span>
                        </h2>
                    </div>
                    <p>الكتب</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-2.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $sliders_count }}">0</span>
                        </h2>
                    </div>
                    <p>السلايدر</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-3.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $services_count }}">0</span>
                        </h2>
                    </div>
                    <p>الخدمات</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
