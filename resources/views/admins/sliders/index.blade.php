@extends('admins.layout')
@push('css')
    <style>
        .login-form {
            padding: 35px;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 0 1.25rem rgb(108 118 134 / 42%);
            max-width: 650px;
            margin: auto;
        }

        .sting{
                background-color: transparent;
                border: unset;
        }
        .stingform{
            display:inline-block;
        }
    </style>
@endpush
@push('title')
    السلايدر
@endpush
@section('content')

<div class="doctor-details-tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview">العنوان الرئيسى</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience">اضافة عنوان فرعى جديد</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="overview" role="tabpanel">
            <div class="designation-title">
                <div style="padding: 40px; text-align:center">
                        <section class="cart-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="cart-table table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">الصورة</th>
                                                        <th scope="col">ستايل</th>
                                                        <th scope="col">العنوان</th>
                                                        <th scope="col">المحتوى</th>

                                                        <th scope="col">الإعدادات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sliders as $slider)
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <a href="javascript:void(0)">
                                                                        <img src="{{asset('assets/img/sliders/'.$slider->id.'/'.$slider->image)}}" alt="item">
                                                                    </a>
                                                            </td>
                                                            <td class="product-name">
                                                                <a href="javascript:void(0)" style="text-wrap:wrap">{{ $slider->style }}</a>
                                                            </td>
                                                            <td class="product-name">
                                                                <a href="javascript:void(0)" style="text-wrap:wrap">{{ $slider->title }}</a>
                                                            </td>
                                                            <td class="product-name">
                                                                <a href="javascript:void(0)" style="text-wrap:wrap">{{ $slider->content }}</a>
                                                            </td>

                                                            <td class="product-subtotal">
                                                                <a title="تعديل" href="{{route('admin.slider.edit',['id'=>$slider->id])}}" style="float:unset;font-size:20px">
                                                                    <i class='bx bx-edit'></i>
                                                                </a>
                                                                @if(count($sliders) > 2)
                                                                    <form class="stingform" action="{{route('admin.slider.delete',['id'=>$slider->id])}}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="sting" type="submit" title="حذف" style="float:unset;font-size:20px">
                                                                            <i class='bx bx-trash'></i>
                                                                        </button>
                                                                    </form>
                                                                @endif

                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="experience" role="tabpanel">

           <livewire:admin.sliders.add />

        </div>

    </div>
</div>

@endsection
