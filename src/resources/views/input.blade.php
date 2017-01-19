@if(config('seguce92.filemanager.style') === 'bootstrap')
    <div class="form-group">
        <label for="image">{{ $title }}</label>
        <input type="text" name="image" id="image-filemanager" class="form-control" readonly="true">
        <div class="btn-group" role="group" style="margin-top: 3px;">
            <a type="button" href="{{ url(config('seguce92.tinymce.single_filemanager')) }}" class="btn btn-default filemanager-modal">
                <i class="{{ config('seguce92.filemanager.icons.bootstrap.select') }}"></i> Seleccionar Imagen</a>
            <button type="button" data-inputid="image-filemanager" class="btn btn-default clear_elfinder_picker">
                <i class="{{ config('seguce92.filemanager.icons.bootstrap.clear') }}"></i> Borrar</button>
        </div>
    </div>
@else
    <div class="input-field">
        <label for="image">{{ $title }}</label>
        <input type="text" name="image" id="image-filemanager" readonly="true">
        <div class="btn-group" role="group" style="margin-top: 3px;">
            <a type="button" href="{{ url(config('seguce92.tinymce.single_filemanager')) }}" class="btn btn-default filemanager-modal">
                <i class="material-icons">{{ config('seguce92.filemanager.icons.materializecss.select') }}</i> Seleccionar Imagen</a>
            <button type="button" data-inputid="image-filemanager" class="btn btn-default clear_elfinder_picker">
                <i class="material-icons">{{ config('seguce92.filemanager.icons.materializecss.clear') }}</i> Borrar</button>
        </div>
    </div>
@endif
