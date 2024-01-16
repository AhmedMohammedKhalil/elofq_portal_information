
<div style="padding: 40px 0 ">
    <div class="login-form">
        <h2>إضافة  سلايدر جديد </h2>
        <form wire:submit.prevent='add' >
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
                <div class="form-group">
                    <textarea name="title" class="form-control"  wire:model.lazy='title' id="title" rows="6" placeholder="عنوان السلايدر"></textarea>
                    @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control"  wire:model.lazy='content' id="content" rows="6" placeholder="محتوى السلايدر"></textarea>
                    @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label>اختار نوع السلايد</label>
                    <select wire:model.lazy='style'>
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                    </select>
                    @error('style') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
                <div style="margin-bottom: 10px">
                    <input type="file" wire:model='image' id="image" class="form-control" placeholder="صورة">
                    @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
    </div>
</div>

