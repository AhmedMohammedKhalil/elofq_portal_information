<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>تسجيل الدخول</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='login'>
                    <div class="row">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
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
                                <label>كلمة السر</label>
                                <input class="form-control" type="password" name="password" wire:model.lazy='password'
                                    id="password" />
                                @error('password')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">سجل الأن</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
