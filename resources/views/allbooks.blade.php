@foreach ($books as $book)
<div class="single-shop pb-5" style="background-color: var(--white-color);border-radius:10%;overflow:hidden">
    <div class="shop-img pt-5">
        <img style="height: 400px" src="{!! asset('img/books/'.$book->image) !!}" alt="Image">
        <ul>
            <li>
                <a href="#">
                    <a href="#book-{{ $book->id }}" data-bs-toggle="modal">
                        <i class="bx bx-show-alt"></i>
                    </a>
                </a>
            </li>
        </ul>
    </div>
    <h3>{{ $book->title }}</h3>
    <span>رقم التصنيف : {{ $book->classification_number }}</span>
    <span>{{ $book->subject }}</span>
</div>
@endforeach





