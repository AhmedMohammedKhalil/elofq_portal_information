<div style="padding: 40px 0 ">
    <div class="login-form">
        <h2>إضافة محتوى فرعى جديد</h2>
        <form wire:submit.prevent='add' >
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif


                <div class="form-group">
                    <textarea name="content" class="form-control"  wire:model.lazy='content' id="content" rows="6" placeholder="محتوى المقال"></textarea>
                    @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>


                <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
    </div>
</div>

