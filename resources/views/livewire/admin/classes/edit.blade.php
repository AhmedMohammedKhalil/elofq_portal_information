


<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>تعديل بيانات الصف </h2>
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
                                <label>الإسم</label>
                                <input placeholder="الإسم" class="form-control" type="title" name="title" wire:model.lazy='title' id="title" />
                                @error('title')
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
