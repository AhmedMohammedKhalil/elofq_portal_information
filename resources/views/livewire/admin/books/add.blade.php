
<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>إضافة كتاب جديد</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='add'>
                    <div class="row">
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <div class="col-12">
                            <div class="form-group">
                                <label>اسم الكتاب <span  title="مطلوب"  style="color:red">*</span></label>
                                <input placeholder="اسم الكتاب" class="form-control" type="text" name="title" wire:model.lazy='title' id="title" />
                                @error('title')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>الموضوع <span  title="مطلوب"  style="color:red">*</span></label>
                                <textarea name="subject" class="form-control"  wire:model.lazy='subject' id="subject" rows="6" placeholder="الموضوع"></textarea>
                                @error('subject') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>رقم التصنيف <span title="مطلوب" style="color:red">*</span></label>
                                <input placeholder="رقم التصنيف" class="form-control" type="text" name="classification_number" wire:model.lazy='classification_number' id="classification_number" />
                                @error('classification_number')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>رقم التصنيف الدولى</label>
                                <input placeholder="رقم التصنيف الدولى" class="form-control" type="text" name="isbn" wire:model.lazy='isbn' id="isbn" />
                                @error('isbn')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>اسم المؤلف</label>
                                <input placeholder="اسم المؤلف" class="form-control" type="text" name="author" wire:model.lazy='author' id="author" />
                                @error('author')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>عدد الصفحات</label>
                                <input placeholder="عدد الصفحات" class="form-control" type="text" name="pages_number" wire:model.lazy='pages_number' id="pages_number" />
                                @error('pages_number')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>إرتفاع الكتاب</label>
                                <input placeholder="إرتفاع الكتاب" class="form-control" type="text" name="book_height" wire:model.lazy='book_height' id="book_height" />
                                @error('book_height')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label> الطبعة</label>
                                <input placeholder="الطبعة" class="form-control" type="text" name="printer_number" wire:model.lazy='printer_number' id="printer_number" />
                                @error('printer_number')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>دار النشر</label>
                                <input placeholder="دار النشر" class="form-control" type="text" name="publishing_house" wire:model.lazy='publishing_house' id="publishing_house" />
                                @error('publishing_house')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>مكان النشر</label>
                                <input placeholder="مكان النشر" class="form-control" type="text" name="publishing_location" wire:model.lazy='publishing_location' id="publishing_location" />
                                @error('publishing_location')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>سنة النشر</label>
                                <input placeholder="سنة النشر" class="form-control" type="text" name="publishing_year" wire:model.lazy='publishing_year' id="publishing_year" />
                                @error('publishing_year')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
