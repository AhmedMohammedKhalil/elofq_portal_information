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

@extends('admins.layout',['page_name'=> 'إدارة المعلمين' ])


@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">
                        @if(count($departments) > 0 )
                        <div class="coupon-cart">
                            <div class="row">
                                <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                                    <a href="{{ route('admin.teacher.create') }}" class="default-btn update mx-auto">
                                        اضف معلم جديد
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="cart-table table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الإسم</th>
                                        <th scope="col">القسم</th>
                                        <th scope="col">الاعدادات</th>

                                    </tr>
                                </thead>
                                @if (count($teachers) > 0)
                                    <tbody>
                                        @foreach ($teachers as $teacher)
                                            <tr>

                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $teacher->id }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $teacher->name }}</a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $teacher->department->title }}</a>
                                                </td>

                                                <td class="product-subtotal">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a title="تعديل" href="{{ route('admin.teacher.edit', ['id'=>$teacher->id]) }}"
                                                                >
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                        </div>
                                                        @if(count($teacher->sessions) == 0)
                                                            <div class="col-6">
                                                                <form class="stingform" action="{{route('admin.teacher.delete',['id'=>$teacher->id])}}" method="post">
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
