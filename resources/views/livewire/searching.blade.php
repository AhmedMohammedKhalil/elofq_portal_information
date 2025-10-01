
@if($this->books == "")
<section>
    <section class="courses-area-three ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title white-title">
                <h2>الكتب</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="">
                <h3 style="text-align:center;color:white">لا يوجد كتب</h3>
            </div>
        </div>
    </section>
</section>
@elseif(count($books) > 0)
<section>
    <section class="courses-area-three ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title white-title">
                <h2>الكتب</h2>
                <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
            </div>
            <div class="">
                @include('books')
            </div>
        </div>
    </section>
    <section>
        @include('allmodals')
    </section>
</section>
@endif
