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
                                            <label>التاريخ من</label>
                                            <input style="line-height: 4" class="form-control" type="date" name="start_at"
                                                wire:model.lazy='start_at' id="start_at"/>
                                            @error('start_at')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>التاريخ إلى</label>
                                            <input style="line-height: 4" class="form-control" type="date" name="end_at"
                                                wire:model.lazy='end_at' id="end_at"/>
                                            @error('end_at')
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
