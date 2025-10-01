@foreach ($books as $book)
<div class="modal fade product-view-one" id="book-{{ $book->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal">
                <span aria-hidden="true">
                    <i class="bx bx-x"></i>
                </span>
            </button>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="product-view-one-image">
                        <img style="width: 338px;height:338px" src="{!! asset('img/books/'.$book->image) !!}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-content">
                        <h3>
                            <a href="javascript:void(0)">{{ $book->title }}</a>
                        </h3>
                        <ul class="product-info">
                            <li>
                                <span>رقم التصنيف:</span> <a href="javascript:void(0)">{{ $book->classification_number }}</a>
                            </li>
                            @if($book->isbn)
                            <li>
                                <span>رقم التصنيف الدولى:</span> <a href="javascript:void(0)">{{ $book->isbn }}</a>
                            </li>
                            @endif
                            @if($book->author)
                            <li>
                                <span>اسم المؤلف:</span> <a href="javascript:void(0)">{{ $book->author }}</a>
                            </li>
                            @endif
                            <li>
                                <span> الموضوع:</span> <a href="javascript:void(0)">{!! nl2br($book->subject) !!}</a>
                            </li>
                            @if($book->pages_number)
                            <li>
                                <span>عدد الصفحات:</span> <a href="javascript:void(0)">{{ $book->pages_number }}</a>
                            </li>
                            @endif
                            @if($book->book_height)
                            <li>
                                <span>إرتفاع الكتاب:</span> <a href="javascript:void(0)">{{ $book->book_height }}</a>
                            </li>
                            @endif
                            @if($book->printer_number)
                            <li>
                                <span>رقم الطابعة:</span> <a href="javascript:void(0)">{{ $book->printer_number }}</a>
                            </li>
                            @endif
                            @if($book->publishing_house)
                            <li>
                                <span>دار النشر:</span> <a href="javascript:void(0)">{{ $book->publishing_house }}</a>
                            </li>
                            @endif
                            @if($book->publishing_location)
                            <li>
                                <span>مكان النشر:</span> <a href="javascript:void(0)">{{ $book->publishing_location }}</a>
                            </li>
                            @endif
                            @if($book->publishing_year)
                            <li>
                                <span>سنة النشر:</span> <a href="javascript:void(0)">{{ $book->publishing_year }}</a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

