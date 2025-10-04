<section>
    <section class="main-contact-area ptb-100" style="padding-bottom: 150px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            <form id="contactForm" form wire:submit.prevent='edit'>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label>القسم</label>
                                            <div class="select-box">
                                                <select class="form-control" name="department_id" wire:model.live='department_id'>
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

                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label>المعلم</label>
                                            <div class="select-box">
                                                <select class="form-control" name="teacher_id" wire:model.live='teacher_id'>
                                                    <option value="0" selected>إختر المعلم</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('teacher_id')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label>الصف</label>
                                            <div class="select-box">
                                                <select class="form-control" name="class_id" wire:model.live='class_id'>
                                                    <option value="0" selected>إختر الصف</option>
                                                    @foreach ($classes as $class)
                                                        <option value="{{ $class->id }}">{{ $class->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('class_id')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-group">
                                            <label>الحصة</label>
                                            <div class="select-box">
                                                <select class="form-control" name="type" wire:model.live='type'>
                                                    <option value="0" selected>إختر الحصة</option>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type }}">{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('type')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <label>التاريخ</label>
                                            <input style="line-height: 4" class="form-control" type="text" name="date"
                                                wire:model='date' id="date" placeholder="التاريخ" value="{{ $date }}"/>
                                            @error('date')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="flash-message">
                                        @if (session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @elseif(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <button type="submit" class="default-btn">
                                            حفظ التغييرات
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        window.addEventListener('hide-flash', () => {
            setTimeout(() => {
                let el = document.getElementById('flash-message');
                if(el) el.remove();
            }, 2000);
        });
    </script>
</section>

