<div class="cart-table table-responsive mt-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اليوم</th>
                <th scope="col">التاريخ</th>
                <th scope="col">الحصة</th>
                <th scope="col">القسم</th>
                <th scope="col">المعلم</th>
                <th scope="col">الصف</th>
                <th scope="col">الاعدادات</th>

            </tr>
        </thead>
        @if ($sessions != '' && $sessions != null && count($sessions) > 0)
            <tbody>
                @foreach ($sessions as $session)
                    <tr>

                        <td class="product-name">
                            <a href="javascript:void(0)">{{ $session->id }}</a>
                        </td>

                        <td class="product-name">
                            <a href="javascript:void(0)">{{ $session->day }}</a>
                        </td>

                        <td class="product-name">
                            <a href="javascript:void(0)">{{ $session->date }}</a>
                        </td>

                        <td class="product-name">
                            <a href="javascript:void(0)">{{ $session->type }}</a>
                        </td>

                         <td class="product-name">
                            <a href="javascript:void(0)">{{ $session->department->title }}</a>
                        </td>

                         <td class="product-name">
                            <a href="javascript:void(0)">{{ $session->teacher->name }}</a>
                        </td>

                         <td class="product-name">
                            <a href="javascript:void(0)">{{ $session->class->title }}</a>
                        </td>

                        <td class="product-subtotal">

                            <div class="row">
                                <div class="col-6">
                                    <a title="تعديل" href="{{ route('admin.session.edit', ['id'=>$session->id]) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <form class="stingform" action="{{route('admin.session.delete',['id'=>$session->id])}}" method="post">
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
        @else
            <tbody>
                <tr>
                    <td colspan="8">لا يوجد حصص</td>
                </tr>
            </tbody>
        @endif
    </table>

</div>
