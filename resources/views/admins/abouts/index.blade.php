@extends('admins.layout',['page_name'=> 'إدارة من نحن' ])


@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">
                        <div class="cart-table mt-4 table-responsive">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">الصورة</th>
                                        <th scope="col">العنوان الرئيسى</th>
                                        <th scope="col">العنوان الفرعى</th>
                                        <th scope="col">المحتوى</th>
                                        <th scope="col">الاعدادات</th>

                                    </tr>
                                </thead>
                                @if (count($abouts) > 0)
                                    <tbody>
                                        @foreach ($abouts as $a)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">
                                                        <img style="width:50px;height:50px" src="{{asset('img/abouts/'.$a->image)}}" alt="item">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $a->heading }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $a->title }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($a->content) !!}</a>
                                                </td>
                                                <td class="product-subtotal">
                                                    <a title="تعديل" href="{{ route('admin.about.edit', ['id'=>$a->id]) }}"
                                                        >
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
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
