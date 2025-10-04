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

@extends('admins.layout',['page_name'=> 'إدارة الأقسام' ])


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
                                    <a href="{{ route('admin.department.create') }}" class="default-btn update mx-auto">
                                        اضف قسم جديد
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cart-table table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">القسم</th>
                                        <th scope="col">الاعدادات</th>

                                    </tr>
                                </thead>
                                @if (count($departments) > 0)
                                    <tbody>
                                        @foreach ($departments as $department)
                                            <tr>

                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $department->id }}</a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $department->title }}</a>
                                                </td>
                                                <td class="product-subtotal">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a title="تعديل" href="{{ route('admin.department.edit', ['id'=>$department->id]) }}">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                        </div>
                                                        @if(count($department->sessions) == 0 && count($department->teachers) == 0)
                                                        <div class="col-6">
                                                            <form class="stingform" action="{{route('admin.department.delete',['id'=>$department->id])}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="sting" type="submit" title="حذف" style="float:unset;font-size:20px">
                                                                    <i class='bx bx-trash'></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
