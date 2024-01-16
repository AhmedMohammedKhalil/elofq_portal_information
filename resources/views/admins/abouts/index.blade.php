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
    من نحن
@endpush
@section('content')

<div class="doctor-details-tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview">المحتوى الرئيسى</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="abouts-tab" data-bs-toggle="tab" href="#abouts" role="tab" aria-controls="abouts">المحتوى الفرعى</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience">اضافة محتوى فرعى جديد</a>
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
                                                        <th scope="col">المحتوى</th>
                                                        <th scope="col">الإعدادات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($abouts as $about)
                                                        @if($about->type == 'heading1')
                                                            <tr>
                                                                <td class="product-thumbnail">
                                                                    <a href="javascript:void(0)">
                                                                            <img src="{{asset('assets/img/abouts/'.$about->image)}}" alt="item">
                                                                        </a>
                                                                </td>
                                                                <td class="product-name">
                                                                    <a href="javascript:void(0)">{{ $about->content }}</a>
                                                                </td>
                                                                <td class="product-subtotal">
                                                                    <a title="تعديل" href="{{route('admin.about.editmain',['id'=>$about->id])}}" style="float:unset;font-size:20px">
                                                                        <i class='bx bx-edit'></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endif
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
        <div class="tab-pane fade" id="abouts" role="tabpanel">
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
                                                        <th scope="col">المحتوى</th>
                                                        <th scope="col">الإعدادات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($abouts as $about)
                                                        @if($about->type == 'heading2')
                                                            <tr>

                                                                <td class="product-name">
                                                                    <a href="javascript:void(0)">{{ $about->content }}</a>
                                                                </td>
                                                                <td class="product-subtotal">
                                                                    <a title="تعديل" href="{{route('admin.about.edit',['id'=>$about->id])}}" style="float:unset;font-size:20px">
                                                                        <i class='bx bx-edit'></i>
                                                                    </a>
                                                                    <form class="stingform" action="{{route('admin.about.delete',['id'=>$about->id])}}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="sting" type="submit" title="حذف" style="float:unset;font-size:20px">
                                                                            <i class='bx bx-trash'></i>
                                                                        </button>
                                                                    </form>

                                                                </td>
                                                            </tr>
                                                        @endif
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

           <livewire:admin.abouts.add />

        </div>

    </div>
</div>

@endsection
