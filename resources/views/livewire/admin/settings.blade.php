

<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>تعديل البيانات</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='edit'>
                    <div class="row">
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <div class="col-12">
                            <div class="form-group">
                                <label>الرقم المدنى</label>
                                <input class="form-control" type="c_number" name="c_number" wire:model.lazy='c_number' id="c_number" />
                                @error('c_number')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>الإسم</label>
                                <input class="form-control" type="name" name="name" wire:model.lazy='name' id="name" />
                                @error('name')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>البريد الألكترونى</label>
                                <input class="form-control" type="email" name="email" wire:model.lazy='email'
                                    id="email" />
                                @error('email')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>الصورة</label>
                                <input class="form-control" type="file" name="image" wire:model='image' id="image" />
                                @error('image')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">حفظ التغييرات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
