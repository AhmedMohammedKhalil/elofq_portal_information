
<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>إضافة معلم جديد</h2>
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
                                <label>الإسم</label>
                                <input placeholder="الإسم" class="form-control" type="name" name="name" wire:model.lazy='name' id="name" />
                                @error('name')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="col-12">
                            <div class="form-group">
                                <label>القسم</label>
                                <div class="select-box">
                                    <select class="form-control" name="department_id" wire:model='department_id'>
                                        <option value="0" selected>إختر القسم</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('department_id')
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
