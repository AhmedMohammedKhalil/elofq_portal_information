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

@extends('admins.layout',['page_name'=> 'إدارة الكتب' ])


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
                                    <a href="{{ route('admin.book.create') }}" class="default-btn update mx-auto">
                                        اضف كتاب جديد
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cart-table table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم الكتاب</th>
                                        <th scope="col">رقم التصنيف</th>
                                        <th scope="col">الموضوع</th>
                                        <th scope="col">الاعدادات</th>

                                    </tr>
                                </thead>
                                @if (count($books) > 0)
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">
                                                        {{ $loop->iteration }}
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $book->title }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $book->classification_number }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($book->subject) !!}</a>
                                                </td>
                                                <td class="product-subtotal">

                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a style="margin-top: 3px" title="عرض" href="#book-{{ $book->id }}" data-bs-toggle="modal"
                                                                    >
                                                                    <i class="fa-solid fa-eye"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-4">
                                                                <a style="margin-top: 3px" title="تعديل" href="{{ route('admin.book.edit', ['id'=>$book->id]) }}"
                                                                    >
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-4">
                                                                <form class="stingform" action="{{route('admin.book.delete',['id'=>$book->id])}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="sting" type="submit" title="حذف" style="float:unset;font-size:20px">
                                                                        <i class='bx bx-trash'></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                @endif
                            </table>
                        </div>
                        {{-- @if(count($books) > 0)
                            {!! $books->links('pagination::bootstrap-4') !!}
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@if (count($books) > 0)
    @include('allmodals')
@endif
@endsection
