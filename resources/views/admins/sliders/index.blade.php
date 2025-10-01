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

@extends('admins.layout',['page_name'=> 'إدارة السلايدر' ])


@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">
                        <div class="coupon-cart">
                            <div class="row">
                                <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                                    <a href="{{ route('admin.slider.create') }}" class="default-btn update mx-auto">
                                        اضف سلايدر جديد
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cart-table table-responsive mt-4">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">الصورة</th>
                                        <th scope="col">العنوان</th>
                                        <th scope="col">المحتوى</th>
                                        <th scope="col">الاعدادات</th>

                                    </tr>
                                </thead>
                                @if (count($sliders) > 0)
                                    <tbody>
                                        @foreach ($sliders as $slider)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">
                                                        <img style="width:50px;height:50px" src="{{asset('img/sliders/'.$slider->id.'/'.$slider->image)}}" alt="item">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $slider->title }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($slider->content) !!}</a>
                                                </td>
                                                <td class="product-subtotal">

                                                        @if(count($sliders) > 2)
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a title="تعديل" href="{{ route('admin.slider.edit', ['id'=>$slider->id]) }}"
                                                                    >
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <form class="stingform" action="{{route('admin.slider.delete',['id'=>$slider->id])}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="sting" type="submit" title="حذف" style="float:unset;font-size:20px">
                                                                        <i class='bx bx-trash'></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        @else
                                                            <a title="تعديل" href="{{ route('admin.slider.edit', ['id'=>$slider->id]) }}"
                                                                >
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                        @endif



                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
