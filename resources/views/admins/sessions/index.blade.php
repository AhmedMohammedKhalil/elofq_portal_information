@push('css')
    <style>


        .sting{
                background-color: transparent;
                border: unset;
        }
        .stingform{
            display:inline-block;
        }
    </style>
@endpush

@extends('admins.layout',['page_name'=> 'إدارة الحصص' ])


@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">
                        @if(count($departments) > 0 && count($classes) > 0  && count($teachers) > 0 )
                            <div class="coupon-cart">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                                        <a href="{{ route('admin.session.create') }}" class="default-btn update mx-auto">
                                            اضف حصة جديدة
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <livewire:admin.sessions.search>
                        <livewire:admin.sessions.searching>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
