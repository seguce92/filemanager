@if(config('seguce92.filemanager.style') != 'bootstrap')
    <label for="tinymce">{{ $title }}</label>
    <div class="input-field">
        <textarea name="tinymce" id="tinymce"></textarea>
    </div>
@else
    <div class="form-group">
        <label for="tinymce">{{ $title }}</label>
        <textarea name="tinymce" id="tinymce" class="form-control"></textarea>
    </div>
@endif
