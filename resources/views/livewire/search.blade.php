<section>
    <section class="main-contact-area ptb-100" style="padding-bottom: 150px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            <form id="contactForm" form wire:submit.prevent='makeSearch'>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>النوع</label>
                                            <div class="select-box">
                                                <select class="form-control" name="type_id" wire:model='type_id'>
                                                    <option value="1" @if($type_id==1)
                                                        selected @endif>إسم الكتاب</option>
                                                        <option value="2" @if($type_id==2)
                                                        selected @endif>إسم المؤلف</option>
                                                        <option value="3" @if($type_id==3)
                                                        selected @endif>الموضوع</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>ابحث هنا</label>
                                            <input style="line-height: 4" class="form-control" type="text" name="search"
                                                wire:model.lazy='search' id="search" placeholder="ابحث هنا"/>
                                            @error('search')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <button type="submit" class="default-btn">
                                            بحث
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
</section>
